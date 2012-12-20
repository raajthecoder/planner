<?php /* Smarty version Smarty-3.1.11, created on 2012-08-16 11:28:47
         compiled from "include/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22408428750221426588053-32446942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9d80862d60eb7fb3de39abd97a7ab77ddc62fc0' => 
    array (
      0 => 'include/templates/index.tpl',
      1 => 1345080519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22408428750221426588053-32446942',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502214265ab8f9_88925781',
  'variables' => 
  array (
    'username' => 0,
    'filter_select' => 0,
    'filter' => 0,
    'tasks' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502214265ab8f9_88925781')) {function content_502214265ab8f9_88925781($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/raaj/raaj/include/Smarty/plugins/function.html_options.php';
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
			$('#qsearch').focus(function() {
				var searchText = $('#qsearch').val();
				if(searchText == "Search...") {
			  		$('#qsearch').val('');
		  		}
     		});
     		
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
			<li id="current"><a href="index.php">Home</a><span></span></li>
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
 			<div align="right">
 			<form name="sort_form" id="sort_form" method="post" action="index.php">
 				<?php echo smarty_function_html_options(array('id'=>'filter','name'=>'filter','options'=>$_smarty_tpl->tpl_vars['filter_select']->value,'selected'=>$_smarty_tpl->tpl_vars['filter']->value,'onchange'=>"document.sort_form.submit();"),$_smarty_tpl);?>

 			</form>
 			</div>
 			
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
	 		<article class="post">
	 			<div class="primary">
	 				
	 				<h2><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['name'];?>
</a></h2>
	 				<p class="post-info"><span>for</span> <?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['assigned_to'];?>
</p>
	 				<div class="image-section">
              		    <img src="<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['image'];?>
" alt="image post" height="300" width="498"/>
         	        </div>
         	        
         	        <p><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['description'];?>
 </p>
         	        <p>
         	        	Contact Person: <?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['contact_person'];?>
 <br>
         	        	Contact Number: <?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['contact_number'];?>
 <br>
         	        </p>
         	        <p>
         	        	Last Updated at <?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['updated'];?>

					</p>
         	        
         	        <p><a class="more" href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
">Continue Reading &raquo;</a>
         	        <a class="more" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
">Edit &raquo;</a></p>
	 			</div>
	 			
	 			<aside>
            	    <p class="dateinfo"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_MMM'];?>
<span><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_D'];?>
</span></p>
               	    <div class="post-meta">
                  	    <h4>Task Info</h4>
                     	<ul>
                           <li class="user"><a href="#"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_by'];?>
</a></li>
                           <li class="time"><a href="#"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_time'];?>
</a></li>
                           <li class="comment"><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['comments'];?>
 Comments</a></li>
                           <li class="dollar"><a href="#"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['estimated'];?>
</a></li>
                           <li class="permalink"><a href="#"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['status'];?>
</a></li>
                           <li class="due"><a href="#"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['due_date'];?>
</a></li>
                        </ul>
					</div>
                </aside>
	 		</article>
	 		<?php endfor; endif; ?>
	 	</div>
		
		<?php echo $_smarty_tpl->getSubTemplate ("about-us.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>


<div id="login-div">
<form name="auth_form" method="post" action="login.php">
	<div style="padding: 100px 0 0 250px;">
	<div id="login-box">
	
		<h2>Login</h2>
		
		<div id="login-box-name" style="margin-top:20px;">Email:</div>
		<div id="login-box-field" style="margin-top:20px;">
			<input name="username" class="form-login" title="Username" value="" size="30" maxlength="2048" />
		</div>
		
		<div id="login-box-name">Password:</div>
		<div id="login-box-field">
			<input name="passwd" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" />
		</div><br/>
	
		<span class="login-box-options">
			<input type="checkbox" name="remember"> Remember Me 
			<a href="#" style="margin-left:30px;">Forgot password?</a>
		</span><br/><br/>

		<input type="image" id="login-img" src="images/login-btn.png" width="103" height="42" style="margin-left:90px;" onclick="document.auth_form.submit();" />
	</div>
	</div>
</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>