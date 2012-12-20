<?php
function getRecentTasks($limit = 5){
	global $db, $TASK_TABLE_NAME;
	
	$sql = "Select * from $TASK_TABLE_NAME ORDER BY ID DESC LIMIT $limit";
	$res = $db->query($sql);
	$tasks = array();
	while($row = $res->assoc()){
		$task = array();
		$task['name'] = $row['NAME'];
		$task['task_id'] = $row['ID'];
		$task['status'] = $row['STATUS'];
		$tasks[] = $task;
	}
	
	return $tasks;
}


function updateStatus($task_id, $status){
	global $db, $TASK_TABLE_NAME;
	
	$sql = "Update $TASK_TABLE_NAME Set STATUS = '$status' where id = '$task_id'";
	$res = $db->query($sql);
}