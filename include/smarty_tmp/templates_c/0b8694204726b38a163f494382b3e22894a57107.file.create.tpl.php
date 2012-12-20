<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 12:26:01
         compiled from "include/templates/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122739969502458f9d7acb6-92325586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b8694204726b38a163f494382b3e22894a57107' => 
    array (
      0 => 'include/templates/create.tpl',
      1 => 1344997511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122739969502458f9d7acb6-92325586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502458f9dae4e9_95806633',
  'variables' => 
  array (
    'username' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502458f9dae4e9_95806633')) {function content_502458f9dae4e9_95806633($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/raaj/raaj/include/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Create a Task</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/coolblue.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/coolblue-form.css" />
    
    <script src="js/jquery-1.6.1.min.js"></script>
    <script src="js/jquery.lightbox_me.js"></script>
    <script src="js/scrollToTop.js"></script>
    <script>
    
		$(document).ready(function(){
		});
		
	</script>
</head>

<body id="top">
<div id="header-wrap">
	<header>
	<hgroup>
	    <h1><a href="index.php">Planner.</a></h1>
	    <h3>Plane for a stree-free wedding</h3>
	</hgroup>
		
	<nav>
		<ul>
			<li><a href="#">Welcome <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><span></span></li>
			<li><a href="index.php">Home</a><span></span></li>
			<li><a href="list.php">Task-List</a><span></span></li>
			<li id="current"><a href="create.php">Create</a><span></span></li>
			<li><a href="index.php?action=logout">Logout</a><span></span></li>
		</ul>
	</nav>
	</header>
</div>

<div id="content-wrap">
    <div id="content" class="clearfix">
     <div id="main">
    	<h3>Create a Task</h3>
			<form action="create.php" method="post" enctype="multipart/form-data">
	
	            <div>
	            <label>Name <span class="required">*</span></label>
	            <input name="name" type="text" size="40" value="" />
	            </div>
	
				<div>
	            <label>Due Date (dd-mm-yyyy)<span class="required">*</span></label>
	            <input name="due_date" type="text" id="due_date" size="40" value="" />
	            </div>

				<div>
	            <label>Estimated Price<span class="required">*</span></label>
	            <input name="estimated" type="text" id="estimated" size="40" value="" />
	            </div>

				<div>
	            <label>Contact Person<span class="required">*</span></label>
	            <input name="contact_person" type="text" id="contact_person" size="40" value="" />
	            </div>

				<div>
	            <label>Contact Number<span class="required">*</span></label>
	            <input name="contact_number" type="text" id="contact_number" size="40" value="" />
	            </div>

				<div>
	            <label>Favours<span class="required">*</span></label>
	            <input name="favours" type="text" id="favours" size="40" value="" />
	            </div>
	
	            <div>
	            <label>Description <span class="required">*</span></label>
	            <textarea name="description" rows="20" cols="50" id="description"></textarea><br />
	            </div>

	            <div>
	            <label>Assigned To <span class="required">*</span></label>
	            <?php echo smarty_function_html_options(array('id'=>'user','name'=>'user','options'=>$_smarty_tpl->tpl_vars['users']->value),$_smarty_tpl);?>
<br />
	            </div>

	            <div>
	            <label>Image</label>
	            <input type="file" name="image"><br/>
	            </div>
	
	            <div class="no-border">
					<input type="submit"  name="create" value="Submit" class="button">
				</div>
			</form>
    	</div>
		<?php echo $_smarty_tpl->getSubTemplate ("about-us.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>