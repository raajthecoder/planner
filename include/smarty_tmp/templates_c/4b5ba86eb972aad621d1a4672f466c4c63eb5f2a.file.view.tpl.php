<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 14:19:18
         compiled from "include/templates/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1212564125502493425ce5c6-20241069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b5ba86eb972aad621d1a4672f466c4c63eb5f2a' => 
    array (
      0 => 'include/templates/view.tpl',
      1 => 1345004355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1212564125502493425ce5c6-20241069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502493426dba50_98945008',
  'variables' => 
  array (
    'task' => 0,
    'username' => 0,
    'total_comments' => 0,
    'comments' => 0,
    'task_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502493426dba50_98945008')) {function content_502493426dba50_98945008($_smarty_tpl) {?><!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Viewing <?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/coolblue.css" />
    
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
	 		<article class="post">
	 			<div class="primary">
	 				
	 				<h2><a href="index.html"><?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
</a></h2>
	 				<p class="post-info"><span>for</span> <?php echo $_smarty_tpl->tpl_vars['task']->value['assigned_to'];?>
</p>
	 				<div class="image-section">
              		    <img src="<?php echo $_smarty_tpl->tpl_vars['task']->value['image'];?>
" alt="image post" height="206" width="498"/>
         	        </div>
         	        
         	        <p><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
 </p>
         	        <p>
         	        	Contact Person: <?php echo $_smarty_tpl->tpl_vars['task']->value['contact_person'];?>
 <br>
         	        	Contact Number: <?php echo $_smarty_tpl->tpl_vars['task']->value['contact_number'];?>
 <br>
         	        </p>
         	        <p>
         	        	Last Updated at <?php echo $_smarty_tpl->tpl_vars['task']->value['updated'];?>

					</p>
         	        
         	        <p><a class="more" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">Edit &raquo;</a></p>
	 			</div>
	 			
	 			<aside>
            	    <p class="dateinfo"><?php echo $_smarty_tpl->tpl_vars['task']->value['created_MMM'];?>
<span><?php echo $_smarty_tpl->tpl_vars['task']->value['created_D'];?>
</span></p>
               	    <div class="post-meta">
                  	    <h4>Task Info</h4>
                     	<ul>
                           <li class="user"><a href="#"><?php echo $_smarty_tpl->tpl_vars['task']->value['created_by'];?>
</a></li>
                           <li class="time"><a href="#"><?php echo $_smarty_tpl->tpl_vars['task']->value['created_time'];?>
</a></li>
                           <li class="comment"><a href="#"><?php echo $_smarty_tpl->tpl_vars['total_comments']->value;?>
 Comments</a></li>
                           <li class="dollar"><a href="#"><?php echo $_smarty_tpl->tpl_vars['task']->value['estimated'];?>
</a></li>
                           <li class="permalink"><a href="#"><?php echo $_smarty_tpl->tpl_vars['task']->value['status'];?>
</a></li>
                           <li class="due"><a href="#"><?php echo $_smarty_tpl->tpl_vars['task']->value['due_date'];?>
</a></li>
                        </ul>
					</div>
                </aside>
	 		</article>
	 		
	 		
	 		<div class="post-bottom-section">
	 			 <h4><?php echo $_smarty_tpl->tpl_vars['total_comments']->value;?>
 comments</h4>
	 			 <div class="primary">
	 			 	<ol class="commentlist">
	 			 		<li class="depth-1">
	 			 			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<div class="comment-info">
								<img alt="" src="images/<?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['name'];?>
.jpg" class="avatar" height="42" width="42" />
								<cite>
									<a href="#"><?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['name'];?>
</a> Says: <br />
									<span class="comment-data"><a href="#comment-63" title=""><?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['date'];?>
</a></span>
								</cite>
							</div>

							<div class="comment-text">
								<p><?php echo $_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['comment'];?>
</p>
							</div>
							<?php endfor; endif; ?>
							
							
							<form action="view.php" method="post">
							<div class="comment-text">
								<textarea name="comment" rows="3" cols="58" id="comment" ></textarea><br />
								<div class="reply">
									<input type="submit" name="reply" value="Comment">
		 						</div>
							</div>
							<input type="hidden" name="task_id" value="<?php echo $_smarty_tpl->tpl_vars['task_id']->value;?>
" />
							</form>
							
							
						</li>
					</ol>
	 			 </div>
	 		</div>
 		</div>
	<?php echo $_smarty_tpl->getSubTemplate ("about-us.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>