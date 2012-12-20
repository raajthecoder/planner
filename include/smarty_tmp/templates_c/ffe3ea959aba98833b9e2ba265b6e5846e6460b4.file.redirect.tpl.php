<?php /* Smarty version Smarty-3.1.11, created on 2012-08-09 16:58:43
         compiled from "include/templates/redirect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90481017750235fa3824aa2-39360182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffe3ea959aba98833b9e2ba265b6e5846e6460b4' => 
    array (
      0 => 'include/templates/redirect.tpl',
      1 => 1337308778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90481017750235fa3824aa2-39360182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50235fa3863d36_72928837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50235fa3863d36_72928837')) {function content_50235fa3863d36_72928837($_smarty_tpl) {?>
<script language="javascript">

window.onload = init;
function init(){
	var url = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
	setTimeout(location.href = url,100);
}
	
</script>


<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 <?php }} ?>