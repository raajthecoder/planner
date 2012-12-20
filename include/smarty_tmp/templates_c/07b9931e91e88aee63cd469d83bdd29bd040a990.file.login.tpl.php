<?php /* Smarty version Smarty-3.1.11, created on 2012-08-09 16:23:18
         compiled from "include/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205907139150233fb8b18e47-99539444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07b9931e91e88aee63cd469d83bdd29bd040a990' => 
    array (
      0 => 'include/templates/login.tpl',
      1 => 1344493320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205907139150233fb8b18e47-99539444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50233fb8b3c856_26444057',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50233fb8b3c856_26444057')) {function content_50233fb8b3c856_26444057($_smarty_tpl) {?><!DOCTYPE html>

<head>
	<meta http-equiv="X-UA-Compatible" content="chrome=1"/>
	<title>Login for Stress-Free wedding</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/login-box.css" />
	
	<script src="js/jquery-1.6.1.min.js"></script>
	<script>
	</script>
</head>

<form name="auth" method="post" action="login.php">
<body>
	<div style="padding: 100px 0 0 250px;">
	<div id="login-box">
	
	<h2>Login</h2>
	
	<div id="login-box-name" style="margin-top:20px;">Email:</div><div id="login-box-field" style="margin-top:20px;"><input name="q" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
		<div id="login-box-name">Password:</div><div id="login-box-field"><input name="q" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div><br/>
			<span class="login-box-options"><input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Forgot password?</a></span><br/><br/>
			<a href="#"><input type="image" src="images/login-btn.png" width="103" height="42" style="margin-left:90px;" /></a>
		</div>
	</div>
</body>
</form>
</html>
	

<?php }} ?>