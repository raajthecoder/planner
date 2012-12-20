<?php

function getNumberOfComments($task_id){
	global $db, $COMMENTS_TABLE_NAME;
	
	$sql = "Select count(*) as COUNT from $COMMENTS_TABLE_NAME where TASK_ID = '$task_id'";
	$res = $db->query($sql);
	$row = $res->assoc();
	
	if(isset($row['COUNT'])) {
		if($row['COUNT'] >= 0){
			return $row['COUNT'];
		}
	}
	
	return 0;
}

function getRecentComments($limit = 5){
	global $db, $COMMENTS_TABLE_NAME;
	
	$sql = "Select * from $COMMENTS_TABLE_NAME ORDER BY ID DESC LIMIT $limit";
	$res = $db->query($sql);
	$comments = array();
	while($row = $res->assoc()){
		$comment = array();
		$comment['name'] = $row['USERNAME'];
		$comment['task_id'] = $row['TASK_ID'];
		$comment['comment'] = $row['COMMENT'];
		$comments[] = $comment;
	}
	
	return $comments;
}
