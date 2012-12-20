<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 14:21:08
         compiled from "include/templates/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17235038705024af42245bb2-41012272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcd0a65efb0bafb6e5d56e780e8368b65decb615' => 
    array (
      0 => 'include/templates/edit.tpl',
      1 => 1345004466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17235038705024af42245bb2-41012272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5024af4231a995_87638698',
  'variables' => 
  array (
    'task' => 0,
    'username' => 0,
    'statuses' => 0,
    'users' => 0,
    'task_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5024af4231a995_87638698')) {function content_5024af4231a995_87638698($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/raaj/raaj/include/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Viewing <?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
</title>
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
		<?php if (isset($_smarty_tpl->tpl_vars['username']->value)){?>
		<ul>
			<li><a href="#">Welcome <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><span></span></li>
			<li><a href="index.php">Home</a><span></span></li>
			<li><a href="list.php">Task-List</a><span></span></li>
			<li><a href="create.php">Create</a><span></span></li>
			<li id="current"><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">View</a><span></span></li>
			<li><a href="index.php?action=logout">Logout</a><span></span></li>
		</ul>
		<?php }else{ ?>
		<?php }?>
	</nav>
	</header>
</div>


<div id="content-wrap">
    <div id="content" class="clearfix">
     <div id="main">
    	<h3>Edit the Task</h3>
			<form action="edit.php" method="post">
	
	            <div>
	            <label>Name <span class="required">*</span></label>
	            <input name="name" type="text" size="40" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
" />
	            </div>

	            <div>
	            <label>Status<span class="required">*</span></label>
	            <?php echo smarty_function_html_options(array('name'=>'status','options'=>$_smarty_tpl->tpl_vars['statuses']->value,'selected'=>$_smarty_tpl->tpl_vars['task']->value['status']),$_smarty_tpl);?>

	            </div>
	
				<div>
	            <label>Due Date (dd-mm-yyyy)<span class="required">*</span></label>
	            <input name="due_date" type="text" id="due_date" size="40" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['due_date'];?>
" />
	            </div>

				<div>
	            <label>Estimated Price<span class="required">*</span></label>
	            <input name="estimated" type="text" id="estimated" size="40" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['estimated'];?>
" />
	            </div>

				<div>
	            <label>Contact Person<span class="required">*</span></label>
	            <input name="contact_person" type="text" id="contact_person" size="40" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['contact_person'];?>
" />
	            </div>

				<div>
	            <label>Contact Number<span class="required">*</span></label>
	            <input name="contact_number" type="text" id="contact_number" size="40" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['contact_number'];?>
" />
	            </div>

				<div>
	            <label>Favours<span class="required">*</span></label>
	            <input name="favours" type="text" id="favours" size="40" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['favours'];?>
" />
	            </div>

				<div>
	            <label>Image<span class="required">*</span></label>
	            <input name="image" type="text" id="image" size="40" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['image'];?>
" />
	            </div>
	
	            <div>
	            <label>Description <span class="required">*</span></label>
	            <textarea name="description" rows="20" cols="50" id="description"><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</textarea><br />
	            </div>

	            <div>
	            <label>Description <span class="required">*</span></label>
				<?php echo smarty_function_html_options(array('id'=>'user','name'=>'user','options'=>$_smarty_tpl->tpl_vars['users']->value,'selected'=>$_smarty_tpl->tpl_vars['task']->value['user']),$_smarty_tpl);?>
<br />
	            </div>
	
	            <div class="no-border">
					<input type="submit"  name="edit" value="Submit" class="button">
				</div>
			<input type="hidden" name="task_id" value="<?php echo $_smarty_tpl->tpl_vars['task_id']->value;?>
" />
			</form>
    	</div>
		<?php echo $_smarty_tpl->getSubTemplate ("about-us.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>