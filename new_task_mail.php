<?php

include "include.php";

$users = getMailUsers();

foreach($users as $user => $email) {
	$sql = "Select *, datediff(DUE_DATE, now()) as DATES from $TASK_TABLE_NAME where ASSIGNED_TO = '$user' and STATUS = 'Created'";
	$res = $db->query($sql);
	$count = 0;
	$tasks = array();
	while($row = $res->assoc()){
		$count++;

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
		updateStatus($row['ID'], 'InProgress');
	}
	
	if($count > 0){
		$subject = "$count new task assigned to you";
		$body = get_body($tasks, $count);
		planner_mail($email,$subject,$body);
	}
}


function get_body($tasks, $count){
	global $smarty;
	$smarty->assign('count', $count);
	$smarty->assign('tasks', $tasks);
	$output = $smarty->fetch('new_task_mail.tpl');
	return $output;
}
?>
