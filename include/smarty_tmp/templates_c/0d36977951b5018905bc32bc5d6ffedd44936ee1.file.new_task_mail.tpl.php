<?php /* Smarty version Smarty-3.1.11, created on 2012-08-16 16:12:12
         compiled from "include/templates/new_task_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1224451161502c8a62707817-17351027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d36977951b5018905bc32bc5d6ffedd44936ee1' => 
    array (
      0 => 'include/templates/new_task_mail.tpl',
      1 => 1345097528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1224451161502c8a62707817-17351027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502c8a628127b3_04583085',
  'variables' => 
  array (
    'count' => 0,
    'tasks' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502c8a628127b3_04583085')) {function content_502c8a628127b3_04583085($_smarty_tpl) {?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
/* Mobile-specific Styles */
@media only screen and (max-device-width: 480px) { 
table[class=w0], td[class=w0] { width: 0 !important; }
table[class=w10], td[class=w10], img[class=w10] { width:10px !important; }
table[class=w15], td[class=w15], img[class=w15] { width:5px !important; }
table[class=w30], td[class=w30], img[class=w30] { width:10px !important; }
table[class=w60], td[class=w60], img[class=w60] { width:10px !important; }
table[class=w125], td[class=w125], img[class=w125] { width:80px !important; }
table[class=w130], td[class=w130], img[class=w130] { width:55px !important; }
table[class=w140], td[class=w140], img[class=w140] { width:90px !important; }
table[class=w160], td[class=w160], img[class=w160] { width:180px !important; }
table[class=w170], td[class=w170], img[class=w170] { width:100px !important; }
table[class=w180], td[class=w180], img[class=w180] { width:80px !important; }
table[class=w195], td[class=w195], img[class=w195] { width:80px !important; }
table[class=w220], td[class=w220], img[class=w220] { width:80px !important; }
table[class=w240], td[class=w240], img[class=w240] { width:180px !important; }
table[class=w255], td[class=w255], img[class=w255] { width:185px !important; }
table[class=w275], td[class=w275], img[class=w275] { width:135px !important; }
table[class=w280], td[class=w280], img[class=w280] { width:135px !important; }
table[class=w300], td[class=w300], img[class=w300] { width:140px !important; }
table[class=w325], td[class=w325], img[class=w325] { width:95px !important; }
table[class=w360], td[class=w360], img[class=w360] { width:140px !important; }
table[class=w410], td[class=w410], img[class=w410] { width:180px !important; }
table[class=w470], td[class=w470], img[class=w470] { width:200px !important; }
table[class=w580], td[class=w580], img[class=w580] { width:280px !important; }
table[class=w640], td[class=w640], img[class=w640] { width:300px !important; }
table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; }
table[class=h0], td[class=h0] { height: 0 !important; }
p[class=footer-content-left] { text-align: center !important; }
#headline p { font-size: 30px !important; }
.article-content, #left-sidebar{ -webkit-text-size-adjust: 90% !important; -ms-text-size-adjust: 90% !important; }
.header-content, .footer-content-left {-webkit-text-size-adjust: 80% !important; -ms-text-size-adjust: 80% !important;}
 } 
/* Client-specific Styles */
#outlook a { padding: 0; }	/* Force Outlook to provide a "view in browser" button. */
body { width: 100% !important; }
.ReadMsgBody { width: 100%; }
.ExternalClass { width: 100%; display:block !important; } /* Force Hotmail to display emails at full width */
/* Reset Styles */
/* Add 100px so mobile switch bar doesn't cover street address. */
body { background-color: #ececec; margin: 0; padding: 0; }
img { height: auto; line-height: 100%; outline: none; text-decoration: none; display: block;}
br, strong br, b br, em br, i br { line-height:100%; }
h1, h2, h3, h4, h5, h6 { line-height: 100% !important; -webkit-font-smoothing: antialiased; }
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: blue !important; }
h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {	color: red !important; }
/* Preferably not the same color as the normal header link color.  There is limited support for psuedo classes in email clients, this was added just for good measure. */
h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited { color: purple !important; }
/* Preferably not the same color as the normal header link color. There is limited support for psuedo classes in email clients, this was added just for good measure. */  
table td, table tr { border-collapse: collapse; }
.yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span {
color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;
}	/* Body text color for the New Yahoo.  This example sets the font of Yahoo's Shortcuts to black. */
/* This most probably won't work in all email clients. Don't include <code _tmplitem="33" > blocks in email. */
code {
  white-space: normal;
  word-break: break-all;
}
#background-table { background-color: #ececec; }
/* Webkit Elements */
#top-bar { border-radius:6px 6px 0px 0px; -moz-border-radius: 6px 6px 0px 0px; -webkit-border-radius:6px 6px 0px 0px; -webkit-font-smoothing: antialiased; background-color: #043948; color: #e7cba3; }
#top-bar a { font-weight: bold; color: #e7cba3; text-decoration: none;}
#footer { border-radius:0px 0px 6px 6px; -moz-border-radius: 0px 0px 6px 6px; -webkit-border-radius:0px 0px 6px 6px; -webkit-font-smoothing: antialiased; }
/* Fonts and Content */
body, td { font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif; }
.header-content, .footer-content-left, .footer-content-right { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
/* Prevent Webkit and Windows Mobile platforms from changing default font sizes on header and footer. */
.header-content { font-size: 12px; color: #e7cba3; }
.header-content a { font-weight: bold; color: #e7cba3; text-decoration: none; }
#headline p { color: #e7cba3; font-family: 'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif; font-size: 36px; text-align: center; margin-top:0px; margin-bottom:30px; }
#headline p a { color: #e7cba3; text-decoration: none; }
.article-title { font-size: 18px; line-height:24px; color: #9a9661; font-weight:bold; margin-top:0px; margin-bottom:18px; font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif; }
.article-title a { color: #9a9661; text-decoration: none; }
.article-title.with-meta {margin-bottom: 0;}
.article-meta { font-size: 13px; line-height: 20px; color: #ccc; font-weight: bold; margin-top: 0;}
.article-content { font-size: 13px; line-height: 18px; color: #444444; margin-top: 0px; margin-bottom: 18px; font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif; }
.article-content a { color: #00707b; font-weight:bold; text-decoration:none; }
.article-content img { max-width: 100% }
.article-content ol, .article-content ul { margin-top:0px; margin-bottom:18px; margin-left:19px; padding:0; }
.article-content li { font-size: 13px; line-height: 18px; color: #444444; }
.article-content li a { color: #00707b; text-decoration:underline; }
.article-content p {margin-bottom: 15px;}
.footer-content-left { font-size: 12px; line-height: 15px; color: #e2e2e2; margin-top: 0px; margin-bottom: 15px; }
.footer-content-left a { color: #e7cba3; font-weight: bold; text-decoration: none; }
.footer-content-right { font-size: 11px; line-height: 16px; color: #e2e2e2; margin-top: 0px; margin-bottom: 15px; }
.footer-content-right a { color: #e7cba3; font-weight: bold; text-decoration: none; }
#footer { background-color: #043948; color: #e2e2e2; }
#footer a { color: #e7cba3; text-decoration: none; font-weight: bold; }
#permission-reminder { white-space: normal; }
#street-address { color: #e7cba3; white-space: normal; }
</style>
<!--[if gte mso 9]>
<style _tmplitem="33" >
.article-content ol, .article-content ul {
   margin: 0 0 0 24px;
   padding: 0;
   list-style-position: inside;
}
</style>
<![endif]-->
</head>



<body><table width="100%" cellpadding="0" cellspacing="0" border="0" id="background-table">
	<tbody><tr>
		<td align="center" bgcolor="#ececec">
        	<table class="w640" style="margin:0 10px;" width="640" cellpadding="0" cellspacing="0" border="0">
            	<tbody><tr><td class="w640" width="640" height="20"></td></tr>
                
            	<tr>
                	<td class="w640" width="640">
                        <table id="top-bar" class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#00707b">
    <tbody><tr>
        <td class="w15" width="15"></td>
        <td class="w325" width="350" valign="middle" align="left">
            <table class="w325" width="350" cellpadding="0" cellspacing="0" border="0">
                <tbody><tr><td class="w325" width="350" height="8"></td></tr>
            </tbody></table>
            <div class="header-content"><span><a href="kidding.php">Unsubscribe</<a></span></div>
            <table class="w325" width="350" cellpadding="0" cellspacing="0" border="0">
                <tbody><tr><td class="w325" width="350" height="8"></td></tr>
            </tbody></table>
        </td>
        <td class="w30" width="30"></td>
        <td class="w255" width="255" valign="middle" align="right">
            <table class="w255" width="255" cellpadding="0" cellspacing="0" border="0">
                <tbody><tr><td class="w255" width="255" height="8"></td></tr>
            </tbody></table>
            <table cellpadding="0" cellspacing="0" border="0">
    <tbody><tr>
        
        <td valign="middle"><fblike><img src="https://img.createsend1.com/img/templatebuilder/like-glyph.png" border="0" width="8" height="14" alt="Facebook icon"=""></fblike></td>
        <td width="3"></td>
        <td valign="middle"><div class="header-content"><fblike>Like</fblike></div></td>
        
        
        <td class="w10" width="10"></td>
        <td valign="middle"><tweet><img src="https://img.createsend1.com/img/templatebuilder/tweet-glyph.png" border="0" width="17" height="13" alt="Twitter icon"=""></tweet></td>
        <td width="3"></td>
        <td valign="middle"><div class="header-content"><tweet>Tweet</tweet></div></td>
        
        
        <td class="w10" width="10"></td>
        <td valign="middle"><forwardtoafriend lang="en"><img src="https://img.createsend1.com/img/templatebuilder/forward-glyph.png" border="0" width="19" height="14" alt="Forward icon"=""></forwardtoafriend></td>
        <td width="3"></td>
        <td valign="middle"><div class="header-content"><forwardtoafriend lang="en">Forward</forwardtoafriend></div></td>
        
    </tr>
</tbody></table>
            <table class="w255" width="255" cellpadding="0" cellspacing="0" border="0">
                <tbody><tr><td class="w255" width="255" height="8"></td></tr>
            </tbody></table>
        </td>
        <td class="w15" width="15"></td>
    </tr>
</tbody></table>
                        
                    </td>
                </tr>
                <tr>
                <td id="header" class="w640" width="640" align="center" bgcolor="#00707b">
    
    <table class="w640" width="640" cellpadding="0" cellspacing="0" border="0">
        <tbody><tr><td class="w30" width="30"></td><td class="w580" width="580" height="30"></td><td class="w30" width="30"></td></tr>
        <tr>
            <td class="w30" width="30"></td>
            <td class="w580" width="580">
                <div align="center" id="headline">
                    <p>
                        <strong><singleline label="Title">Wedding Planner</singleline></strong>
                    </p>
                </div>
            </td>
            <td class="w30" width="30"></td>
        </tr>
    </tbody></table>
</td></tr>
                
<tr><td class="w640" width="640" height="30" bgcolor="#ffffff"></td></tr>
<tr id="simple-content-row"><td class="w640" width="640" bgcolor="#ffffff">
    <table class="w640" width="640" cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
            <td class="w30" width="30"></td>
            <td class="w580" width="580">
                <repeater>
                    <layout label="Text only">
                        <table class="w580" width="580" cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr>
                                <td class="w580" width="580">
                                    <p align="left" class="article-title"><singleline label="Title">You have <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 assign to you today</singleline></p>
                                    <div align="left" class="article-content">
                                        <multiline label="Description"></multiline>
                                    </div>
                                </td>
                            </tr>
                            <tr><td class="w580" width="580" height="10"></td></tr>
                        </tbody></table>
                    </layout>

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
                    <layout label="Text only">
                        <table class="w580" width="580" cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr>
                                <td class="w580" width="580">
                                    <p align="left" class="article-title"><singleline label="Title"></singleline></p>
                                    <div align="left" class="article-content">
                                        <multiline label="Description">
                                        <div class="primary">
							 				<h2><a href="http://raaj.comlu.com/index.php"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['name'];?>
</a></h2>
							 				<p class="post-info"><span>for</span> <?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['assigned_to'];?>
</p>
							 				<div class="image-section">
						              		    <img src="http://raaj.comlu.com/<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['image'];?>
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
						         	        
						         	        <p><a class="more" href="http://raaj.comlu.com/view.php?id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
">Continue Reading &raquo;</a>
						         	        <a class="more" href="http://raaj.comlu.com/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['id'];?>
">Edit &raquo;</a></p>
							 			</div>
							 			
							 			<aside>
						            	    <p class="dateinfo"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_MMM'];?>
<span><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_D'];?>
</span></p>
						               	    <div class="post-meta">
						                  	    <h4>Task Info</h4>
						                     	<ul>
						                           <li class="user"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_by'];?>
</li>
						                           <li class="time"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['created_time'];?>
</li>
						                           <li class="comment"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['comments'];?>
 Comments</li>
						                           <li class="dollar"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['estimated'];?>
</li>
						                           <li class="permalink"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['status'];?>
</li>
						                           <li class="due"><?php echo $_smarty_tpl->tpl_vars['tasks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['due_date'];?>
</li>
						                        </ul>
											</div>
						                </aside>
                                        </multiline>
                                    </div>
                                </td>
                            </tr>
                            <tr><td class="w580" width="580" height="10"></td></tr>
                        </tbody></table>
                    </layout>
                    <?php endfor; endif; ?>
                </repeater>
            </td>
            <td class="w30" width="30"></td>
        </tr>
    </tbody></table>
</td></tr>
<tr><td class="w640" width="640" height="15" bgcolor="#ffffff"></td></tr>
	<tr><td class="w640" width="640">
    <table id="footer" class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#043948">
        <tbody><tr><td class="w30" width="30"></td><td class="w580 h0" width="360" height="30"></td><td class="w0" width="60"></td><td class="w0" width="160"></td><td class="w30" width="30"></td></tr>
        <tr><td class="w30" width="30"></td><td class="w580 h0" width="360" height="15"></td><td class="w0" width="60"></td><td class="w0" width="160"></td><td class="w30" width="30"></td></tr>
    </tbody></table>
</td></tr>
 </tbody></table>
</td></tr>
</tbody></table></body></html><?php }} ?>