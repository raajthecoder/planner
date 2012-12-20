<?php

include "include.php";

$post = $_POST;
$get = $_GET;

if(!isset($_SESSION['username'])) {
	header('Location: index.php');
} else {
	$username = $_SESSION['username'];
}

if(isset($get['id'])){
	$task_id = mysql_real_escape_string($get['id']); 
} else if(isset($post['task_id'])){
	$task_id = mysql_real_escape_string($post['task_id']); 
} else {
	header('Location: index.php');
}

if(isset($post['edit']) && $post['edit'] == "Submit"){
	
	$name = mysql_real_escape_string($post['name']);
	$due_date  = mysql_real_escape_string($post['due_date']);
	$due_date = date('Y/m/d',strtotime($due_date));
	$estimated = mysql_real_escape_string($post['estimated']);
	$contact_person = mysql_real_escape_string($post['contact_person']);
	$contact_number = mysql_real_escape_string($post['contact_number']);
	$favours = mysql_real_escape_string($post['favours']);
	$description = mysql_real_escape_string($post['description']);
	$image = mysql_real_escape_string($post['image']);
	$status = mysql_real_escape_string($post['status']);
	$user = mysql_real_escape_string($post['user']);
	
	$sql = "Update $TASK_TABLE_NAME Set 
		NAME = '$name'
		, DESCRIPTION = '$description'
		, DUE_DATE = '$due_date'
		, ESTIMATED_PRICE = '$estimated'
		, CONTACT_PERSON = '$contact_person'
		, CONTACT_NUMBER = '$contact_number'
		, FAVOURS = '$favours'
		, IMAGE = '$image'
		, STATUS = '$status'
		, ASSIGNED_TO = '$user'
		, UPDATED_BY = '$username'
		, LAST_UPDATED = now()
	 where id = '$task_id'";
	 
	$res = $db->query($sql);
	
	header('Location: index.php');
}

$sql = "Select * from $TASK_TABLE_NAME where id = '$task_id'";
$res = $db->query($sql);
$row = $res->assoc();

$task = array();
$task['id'] = $row['ID'];
$task['name'] = $row['NAME'];
$task['description'] = $row['DESCRIPTION'];
$task['status'] = $row['STATUS'];
$task['image'] = $row['IMAGE'];
$task['due_date'] = date('d-m-Y', strtotime($row['DUE_DATE']));
$task['estimated'] = $row['ESTIMATED_PRICE'];
$task['user'] = $row['ASSIGNED_TO'];
$task['created_MMM'] = strtoupper(date('M', strtotime($row['CREATED'])));
$task['created_D'] = (int)date('d', strtotime($row['CREATED']));
$task['created_time'] = date('H:i', strtotime($row['CREATED']));
$task['created_by'] = $row['CREATED_BY'];
$task['contact_person'] = $row['CONTACT_PERSON'];
$task['contact_number'] = $row['CONTACT_NUMBER'];
$task['updated'] = date('d/m/Y H:i',strtotime($row['LAST_UPDATED']));

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$smarty->assign('username', $username);
}

$smarty->assign('users', getUsers());
$smarty->assign('task_id', $task_id);
$smarty->assign('task', $task);
$smarty->assign('statuses', getStatuses());
$smarty->display('edit.tpl');

function getStatuses(){
	return array(
		'Created' => 'Created'
		, 'Action Required' => 'Action Required'
		, 'Incomplete' => 'Incomplete'
		, 'Rejected' => 'Rejected'
		, 'Completed' => 'Completed'
	);
}

function getUsers(){
	global $USER_TABLE_NAME, $db;
	
	$sql = "Select NAME from $USER_TABLE_NAME where Active = 1";
	$res = $db->query($sql);
	$users = array();
	while($row = $res->assoc()){
		$users[$row['NAME']] = $row['NAME'];
	}
	
	return $users;
}