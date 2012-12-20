<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 15:00:33
         compiled from "include/templates/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4223544975024a7e484e813-24906841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d99e1bcbb5c45330360cb7af7a2b43538b5ab40' => 
    array (
      0 => 'include/templates/list.tpl',
      1 => 1345006832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4223544975024a7e484e813-24906841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5024a7e48c8354_73856249',
  'variables' => 
  array (
    'username' => 0,
    'name' => 0,
    'price' => 0,
    'users' => 0,
    'assigned' => 0,
    'statuses' => 0,
    'status' => 0,
    'tasks' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5024a7e48c8354_73856249')) {function content_5024a7e48c8354_73856249($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/raaj/raaj/include/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Wedding Planner</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/coolblue.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/login-box.css" />
    
    <script src="js/jquery-1.6.1.min.js"></script>
    <script src="js/jquery.lightbox_me.js"></script>
    <script src="js/scrollToTop.js"></script>
    <script>
    
		$(document).ready(function(){
			$('#login').click(function(e) {
			    $('#login-div').lightbox_me({
			        centered: true, 
			        onLoad: function() { 
			            $('#login-div').find('input:first').focus();
			            }
			        });
			   	e.preventDefault();
			});
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
			<li id="current"><a href="index.php">Home</a><span></span></li>
			<li><a href="list.php">Task-List</a><span></span></li>
			<li><a href="create.php">Create</a><span></span></li>
			<li><a href="index.php?action=logout">Logout</a><span></span></li>
		</ul>
		<?php }else{ ?>
		<ul>
			<li id="current"><a href="index.html">Home</a><span></span></li>
			<li><a href="list.php">Task-List</a><span></span></li>
			<li><a href="create.php">Create</a><span></span></li>
			<li id="login"><a href="login.php">Login</a><span></span></li>
		</ul>
		<?php }?>
	</nav>

	<div class="subscribe">
	    <span>Subscribe:</span> <a href="#">Email</a> | <a href="#">RSS</a>
	</div>

	<form id="quick-search" method="get" action="index.php">
	  <fieldset class="search">
	     <label for="qsearch">Search:</label>
	     <input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" />
	     <button class="btn" title="Submit Search">Search</button>
	  </fieldset>
	</form>
   
	</header>
</div>

<div id="content-wrap">
	<div id="content" class="clearfix">
	 	<div id="main">
 			<form action="list.php" method="post">
			
				<table width="100%" border="0">
					<tr>
						<td>Name/Description</td>
						<td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></td>
						<td>Estimated Price</td>
						<td> <input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" /></td>
					</tr>
					<tr>
						<td>Assigned to</td>
						<td><?php echo smarty_function_html_options(array('id'=>'assigned','name'=>'assigned','options'=>$_smarty_tpl->tpl_vars['users']->value,'selected'=>$_smarty_tpl->tpl_vars['assigned']->value),$_smarty_tpl);?>
</td>
						<td>Status</td>
						<td><?php echo smarty_function_html_options(array('id'=>'status','name'=>'status','options'=>$_smarty_tpl->tpl_vars['statuses']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value),$_smarty_tpl);?>
</td>
					</tr>
					<tr>
						<td colspan="4" align="right"><input type="submit" name="submit" value="Search"></td>
					</tr>
					
			 	</table>
	  		</form>
 			<table width="50%">
			<tr>
				<th width="20%">Task Name</th>
				<th width="5%">Status</th>
				<th width="10%">Created</th>
				<th width="5%">Estimated</th>
				<th width="20%">Contact Person</th>
				<th width="20%">Contact Number</th>
				<th width="5%">Assigned To</th>
			</tr>
	 		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tasks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total']);
?>
				<tr>
					<td><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['name'];?>
<a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['status'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_by'];?>
 at <?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_time'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['estimated'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['contact_person'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['contact_number'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['assigned_to'];?>
</td>
				</tr>
	 		<?php endfor; endif; ?>
			</table>
		</div>
	 	<?php echo $_smarty_tpl->getSubTemplate ("about-us.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>