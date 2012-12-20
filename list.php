<?php

include "include.php";

$post = $_POST;
$get = $_GET;

if(!isset($_SESSION['username'])) {
	header('Location: index.php');
} else {
	$username = $_SESSION['username'];
}

$sql = "SELECT * from $TASK_TABLE_NAME where 1 = 1";

if(isset($post['submit']) && $post['submit'] == "Search"){
	$name = mysql_real_escape_string($post['name']);
	$price = mysql_real_escape_string($post['price']);
	$assigned = mysql_real_escape_string($post['assigned']);
	$status = mysql_real_escape_string($post['status']);
	
	if(strlen($name)) {
		$sql .= " and (NAME LIKE '%$name%' or DESCRIPTION LIKE '%$name%')";
		$smarty->assign('name', $name);
	}

	if(strlen($price)) {
		$sql .= " and ESTIMATED_PRICE >= '$price'";
		$smarty->assign('price', $price);
	}

	if($assigned != -1) {
		$sql .= " and ASSIGNED_TO = '$assigned'";
		$smarty->assign('assigned', $assigned);
	}
	
	if($status != -1) {
		$sql .= " and STATUS = '$status'";
		$smarty->assign('status', $status);
	}
}

$sql .= " ORDER BY LAST_UPDATED DESC";
$res = $db->query($sql);
$tasks = array();
while($row = $res->assoc()){
	$task = array();
	$task['id'] = $row['ID'];
	$task['name'] = $row['NAME'];
	$task['description'] = $row['DESCRIPTION'];
	$task['status'] = $row['STATUS'];
	$task['assigned_to'] = $row['ASSIGNED_TO'];
	$task['image'] = $row['IMAGE'];
	$task['estimated'] = $row['ESTIMATED_PRICE'];
	$task['created_time'] = date('d-m H:i', strtotime($row['CREATED']));
	$task['created_by'] = $row['CREATED_BY'];
	$task['contact_person'] = $row['CONTACT_PERSON'];
	$task['contact_number'] = $row['CONTACT_NUMBER'];
	$task['updated'] = date('d/m/Y H:i',strtotime($row['LAST_UPDATED']));
	$task['comments'] = getNumberOfComments($row['ID']);
	
	$tasks[] = $task;
}

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$smarty->assign('username', $username);
}

$smarty->assign('users', getUsers());
$smarty->assign('statuses', getStatuses());
$smarty->assign('tasks', $tasks);
$smarty->display('list.tpl');


function getStatuses(){
	return array(
		'-1' => 'Choose Status'
		, 'Created' => 'Created'
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
	$users['-1'] = 'Choose User';
	while($row = $res->assoc()){
		$users[$row['NAME']] = $row['NAME'];
	}
	
	return $users;
}
	
