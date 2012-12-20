<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 14:27:11
         compiled from "include/templates/about-us.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16771446955024a742a33ae6-87826513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2a291697af85563aa38bbb35ff1a8b003dc0a94' => 
    array (
      0 => 'include/templates/about-us.tpl',
      1 => 1345004804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16771446955024a742a33ae6-87826513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5024a742a36875_28432467',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5024a742a36875_28432467')) {function content_5024a742a36875_28432467($_smarty_tpl) {?><div id="sidebar">
	 <div class="about-me">
 	    <h3>About Us</h3>
        <p>
        <a href="index.php"><img src="images/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
.jpg" width="42" height="42" alt="firefox" class="align-left" /></a>
        <a href="index.php">Learn more...</a>
	    </p>
    </div>
</div><?php }} ?>