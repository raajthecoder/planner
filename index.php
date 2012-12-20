<?php

include "include.php";

$get = $_GET;
$post = $_POST;

if(isset($get['action']) && $get['action'] == "logout") {
	$_SESSION['username'] = null;
	session_destroy();
	unset($_SESSION);
}

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$smarty->assign('username', $username);
}

$sql = "SELECT *, datediff(DUE_DATE, now()) as DATES from $TASK_TABLE_NAME ";
if(isset($get['qsearch'])){
	$searchText = mysql_real_escape_string($get['qsearch']);
	$sql .= " where NAME like '%$searchText%'";
	$sql .= " or DESCRIPTION like '%$searchText%'";
	$sql .= " or CONTACT_PERSON like '%$searchText%'";
}

if(isset($post['filter'])){
	$filter = $post['filter'];
	$sort = "LAST_UPDATED";
	switch($filter){
		case "Recent" :
			break;
		case "Action Required" :
			$sql .= " where STATUS = 'Action Required'";
			break;
		case "Assigned to Me" :
			$sql .= " where ASSIGNED_TO = '$username'";
			break;
	}
}

$sql .= " ORDER BY LAST_UPDATED DESC limit 10";

$res = $db->query($sql);
$tasks = array();
while($row = $res->assoc()){
	$task = array();
	$task['id'] = $row['ID'];
	$task['name'] = $row['NAME'];
	$task['description'] = $row['DESCRIPTION'];
	$task['image'] = $row['IMAGE'];
	$task['estimated'] = $row['ESTIMATED_PRICE'];
	$task['status'] = $row['STATUS'];
	$task['assigned_to'] = $row['ASSIGNED_TO'];
	$task['due_date'] = "Due in " .$row['DATES'] . " (s) days";
	$task['created_MMM'] = strtoupper(date('M', strtotime($row['CREATED'])));
	$task['created_D'] = (int)date('d', strtotime($row['CREATED']));
	$task['created_time'] = date('H:i', strtotime($row['CREATED']));
	$task['created_by'] = $row['CREATED_BY'];
	$task['contact_person'] = $row['CONTACT_PERSON'];
	$task['contact_number'] = $row['CONTACT_NUMBER'];
	$task['updated'] = date('d/m/Y H:i',strtotime($row['LAST_UPDATED']));
	$task['comments'] = getNumberOfComments($row['ID']);
	
	$tasks[] = $task;
}

$smarty->assign('filter_select', getFilterSelect());
$smarty->assign('filter', $filter);
$smarty->assign('tasks', $tasks);
$smarty->display('index.tpl');


function getFilterSelect(){
	return array(
		'Recent' => 'Recent'
		, 'Action Required' => 'Action Required'
		, 'Assigned to Me' => 'Assigned to Me'
	);
}

?>
