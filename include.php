<?php
require_once("include/mysqlpro.class.php");
require_once("include/smarty.inc.php");
require_once("include/mail.inc.php");
require_once("include/ftp.class.php");
require_once("conf/config.php");
include_once("include/comments.inc.php");
include_once("include/task.inc.php");

$db = new MySQL_DB(DBSERVER, DBUSER, DBPASS, DBNAME);

session_start();
$smarty->assign('recentcomments', getRecentComments());
$smarty->assign('recenttasks', getRecentTasks());

?>
