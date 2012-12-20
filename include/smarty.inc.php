<?php


require('include/Smarty/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('include/templates');
$smarty->setCompileDir('include/smarty_tmp/templates_c');
$smarty->setCacheDir('include/smarty_tmp/cache');
$smarty->setConfigDir('include/smarty_tmp/configs');