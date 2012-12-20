<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 14:36:03
         compiled from "include/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2279129705024947135f4f3-36127463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '662599be5af036248e072e4a63b091fc376e4aa4' => 
    array (
      0 => 'include/templates/footer.tpl',
      1 => 1345005288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2279129705024947135f4f3-36127463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502494713634c3_12281727',
  'variables' => 
  array (
    'recentcomments' => 0,
    'recenttasks' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502494713634c3_12281727')) {function content_502494713634c3_12281727($_smarty_tpl) {?><div id="extra-wrap"><div id="extra" class="clearfix">
	    <div id="gallery" class="clearfix">
		    <h3>Flickr Photos </h3>
		    <p class="thumbs">
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
            <a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
            </p>
        </div>

	    <div class="col first">

		    <h3>Contact Info</h3>

		    <p>
		    <strong>Phone: </strong>+44 123 0056<br/>
		    <strong>Mobile: </strong>+44 123 0056<br/>
		    </p>

		    <p><strong>Marriage: </strong>
		    <strong>Reception: </strong>
		    </p>

            <h3>Follow us:</h3>

            <ul class="subscribe-stuff">
      	        <li><a title="Facebook" href="index.html" rel="nofollow">
				<img alt="Facebook" title="Facebook" src="images/social_facebook.png" /></a>
			    </li>
			    <li><a title="Twitter" href="index.html" rel="nofollow">
				<img alt="Twitter" title="Twitter" src="images/social_twitter.png" /></a>
			    </li>
			    <li><a title="E-mail this story to a friend!" href="index.html" rel="nofollow">
				<img alt="E-mail this story to a friend!" title="E-mail this story to a friend!" src="images/social_email.png" /></a>
			    </li>
            </ul>
            
            <br/>
            	<script language="JavaScript" src="http://www.counter160.com/js.js?img=6"></script>
    		<br/>
	    </div>

        <div class="col">
            <h3>Recent Comments</h3>
	        <div class="recent-comments">
                <ul>
                	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recentcomments']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			        <li><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['recentcomments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['task_id'];?>
" title="Comment on title"><?php echo $_smarty_tpl->tpl_vars['recentcomments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['comment'];?>
</a><br /> &#45; <cite><?php echo $_smarty_tpl->tpl_vars['recentcomments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['name'];?>
</cite></li>
                    <?php endfor; endif; ?>
			    </ul>
		    </div>

        </div>

        <div class="col">

            <h3>Recent Task</h3>
	        <div class="footer-list">
			    <ul>
			    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recenttasks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				    <li><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['recenttasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['task_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['recenttasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['name'];?>
</a> &#45; <cite><?php echo $_smarty_tpl->tpl_vars['recenttasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['status'];?>
</cite></li>
				    <?php endfor; endif; ?>
			    </ul>
		    </div>
	    </div>

</div></div>

<!-- footer -->
<footer>
	<p class="footer-left">
		&copy; 2012 Copyright Info &nbsp; &nbsp; &nbsp;
	</p>

	<p class="footer-right">
	   	<a href="index.php">Home</a> |
        <a href="#top" class="back-to-top">Back to Top</a>
    </p>
<!-- /footer -->
</footer>

</body>
</html><?php }} ?>