<?php

include "include.php";

$post = $_POST;

$username = mysql_real_escape_string($post['username']);
$passwd = mysql_real_escape_string($post['passwd']);
$md5 = md5($passwd);

$sql = "Select name from $USER_TABLE_NAME where username = '$username' and password = '$md5' and active = 1";

$res = $db->query($sql);
$row = $res->assoc();

if(isset($row['name'])){
	session_start();
	$_SESSION['username'] = $row['name'];
} else {
	$_SESSION['username'] = null;
	session_destroy();
}

$smarty->assign('url', 'index.php');
$smarty->display('redirect.tpl');

?>
