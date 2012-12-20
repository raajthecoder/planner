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

if(isset($post['reply']) && $post['reply'] == "Comment"){
	$comment = mysql_real_escape_string($post['comment']);
	$task_id  = mysql_real_escape_string($post['task_id']);
	
	$sql = "Insert into $COMMENTS_TABLE_NAME (USERNAME,TASK_ID,COMMENT,DATE)
	 values ('$username', '$task_id','$comment',now())";
	$res = $db->query($sql);
}

$sql = "Select *, datediff(DUE_DATE, now()) as DATES from $TASK_TABLE_NAME where id = '$task_id'";
$res = $db->query($sql);
$row = $res->assoc();


$task = array();
$task['id'] = $row['ID'];
$task['name'] = $row['NAME'];
$task['description'] = $row['DESCRIPTION'];
$task['image'] = $row['IMAGE'];
$task['estimated'] = $row['ESTIMATED_PRICE'];
$task['assigned_to'] = $row['ASSIGNED_TO'];
$task['status'] = $row['STATUS'];
$task['due_date'] = "Due in " .$row['DATES'] . " (s) days";
$task['created_MMM'] = strtoupper(date('M', strtotime($row['CREATED'])));
$task['created_D'] = (int)date('d', strtotime($row['CREATED']));
$task['created_time'] = date('H:i', strtotime($row['CREATED']));
$task['created_by'] = $row['CREATED_BY'];
$task['contact_person'] = $row['CONTACT_PERSON'];
$task['contact_number'] = $row['CONTACT_NUMBER'];
$task['updated'] = date('d/m/Y H:i',strtotime($row['LAST_UPDATED']));


$sql = "Select * from $COMMENTS_TABLE_NAME where TASK_ID = '$task_id'";
$res = $db->query($sql);
$comments = array();
while($row = $res->assoc()){
	$comment = array();
	$comment['name'] = $row['USERNAME'];
	$comment['comment'] = $row['COMMENT'];
	$comment['date'] = date('d/m/Y H:i', strtotime($row['DATE']));
	$comments[] = $comment;
}

if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$smarty->assign('username', $username);
}

$smarty->assign('total_comments', getNumberOfComments($task_id));
$smarty->assign('task_id', $task_id);
$smarty->assign('comments', $comments);
$smarty->assign('task', $task);
$smarty->display('view.tpl');

?>