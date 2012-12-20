<?php

include "include.php";

$post = $_POST;

if(!isset($_SESSION['username'])) {
	header('Location: index.php');
} else {
	$username = $_SESSION['username'];
}

if(isset($post['create']) && $post['create'] == "Submit"){
	$image = $_FILES['image']['name'];
	$size = $_FILES['image']['size'];
	$tmp_filename = $_FILES['image']['tmp_name'];
	$filename = "images/$image";
	$image_name = false;
	if ($image && $size > 0) {
		if(upload($filename, $tmp_filename)){
			$image_name = $filename ;
		}
	}
	
	if(!$image_name) {
		$image_name = "images/img-post.jpg";
	}
	
	
	$name = mysql_real_escape_string($post['name']);
	$due_date  = mysql_real_escape_string($post['due_date']);
	$due_date = date('Y/m/d',strtotime($due_date));
	$estimated = mysql_real_escape_string($post['estimated']);
	$contact_person = mysql_real_escape_string($post['contact_person']);
	$contact_number = mysql_real_escape_string($post['contact_number']);
	$favours = mysql_real_escape_string($post['favours']);
	$description = mysql_real_escape_string($post['description']);
	$user = mysql_real_escape_string($post['user']);
	
	if(!strlen($user) || $user == '-1'){
		$user = $username;
	}
	
	$sql = "Insert into $TASK_TABLE_NAME (NAME, DESCRIPTION,DUE_DATE,ESTIMATED_PRICE,CREATED,CREATED_BY,CONTACT_PERSON,CONTACT_NUMBER,FAVOURS,LAST_UPDATED, UPDATED_BY, STATUS, IMAGE, ASSIGNED_TO)
	 values ('$name', '$description','$due_date','$estimated',now(),'$username','$contact_person','$contact_number','$favours',now(),'$username', 'Created', '$image_name', '$user')";
	$res = $db->query($sql);
	
	header('Location: index.php');
}

$smarty->assign('users', getUsers());
$smarty->display('create.tpl');

function upload($localfile, $tmp_filename){
	
	if(DEV){
		copy($tmp_filename, $localfile);
		return true;
	}
	

 	$fp = fopen($tmp_filename, 'r');
	$ftp = new FTPConnect(FTPSERVER, FTPUSER, FTPPASS, FTPIMAGEDIR);
	$ftp->passive(true);
	$ftp->put($fp,basename($localfile));
 	fclose($fp);
	
	$files = $ftp->dirList();
	foreach($files as $file){
		if($file == basename($localfile))
			return true;
	}
	
	return false;
}

function getUsers(){
	global $USER_TABLE_NAME, $db;
	
	$sql = "Select NAME from $USER_TABLE_NAME where Active = 1";
	$res = $db->query($sql);
	$users = array();
	$users[-1] = "Assign to yourself";
	while($row = $res->assoc()){
		$users[$row['NAME']] = $row['NAME'];
	}
	
	return $users;
}
	
