<?php

include "include.php";

$to = "admin@raaj.comlu.com, rangaraaj.v@gmail.com";

backup($USER_TABLE_NAME);
backup($TASK_TABLE_NAME);
backup($COMMENTS_TABLE_NAME);

function backup($table_name){
	global $db, $to;
	
	//Backing up
	$sql = "Select * from $table_name";
	$res = $db->query($sql);
	
	$date = date('d-m-H');
	$file_name = "data/" . $table_name . "-$date.csv";
	
	$fp = fopen($file_name, "w+");
	$headers = false;
	while($row = $res->assoc()){
		
		if(!$headers) {
			$headers = array_keys($row);
			fputcsv($fp,$headers, ",", '"');
		}
		fputcsv($fp,$row, ",");
	}
	
	fclose($fp);
	
	$filename = basename($file_name);
	$path = dirname($file_name);
	$body = "backed up at " . date('m/d/Y H:i:s');
	planner_mail_attachment($filename,$path,$to,"Wedding planner DB backup",$body);
}
