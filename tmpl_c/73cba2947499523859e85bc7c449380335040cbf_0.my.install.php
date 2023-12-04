<?php /* Smarty version 3.1.27, created on 2023-07-06 18:04:40
         compiled from "my:install" */ ?>
<?php
/*%%SmartyHeaderCode:48460708064a702384d4766_97906235%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73cba2947499523859e85bc7c449380335040cbf' => 
    array (
      0 => 'my:install',
      1 => 1688666680,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '48460708064a702384d4766_97906235',
  'variables' => 
  array (
    'wrong_license' => 0,
    'wrong_mysql_data' => 0,
    'wrong_admin_data' => 0,
    'installed' => 0,
    'form_data' => 0,
    'hostname' => 0,
    'unlink_install' => 0,
    'script_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a702384f3ba6_73182464',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a702384f3ba6_73182464')) {
function content_64a702384f3ba6_73182464 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '48460708064a702384d4766_97906235';
?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> <head> <title>HYIP Manager Pro. Install Script.</title> <link href="style.css" rel="stylesheet" type="text/css"> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </head> <body bgcolor="#FFFFF2" link="#666699" vlink="#666699" alink="#666699" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" > <center> <table width="760" border="0" cellpadding="0" cellspacing="0" height=100<?php echo '%>';?> <tr> <td valign=top height=142> <table cellspacing=0 cellpadding=0 border=0 width=100% height=142> <tr><td background="images/ver.gif" bgcolor=#FF8D00><img src="images/top.gif" width=304 height=142 border="0" align=left></td></tr> </table> </td> </tr> <tr> <td valign="top"> <table cellspacing=0 cellpadding=1 border=0 width=100% height=100% bgcolor=#ff8d00> <tr> <td> <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0"> <tr bgcolor="#FFFFFF" valign="top"> <td bgcolor="#FFFFFF" valign="top" width=99<?php echo '%>';?> 
 <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts"> <tr> <td width=100% height=100% valign=top> <center style="width:60%;margin:auto;"> <h3>HYIP Manager Pro - Installation</h3> <?php if ($_smarty_tpl->tpl_vars['wrong_license']->value == 1) {?> <div class="alert alert-danger"><b>Invalid License.</b><br><br>Please contact <a href="http://www.goldcoders.com">www.goldcoders.com</a> if you bought license to this host.</div>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['wrong_mysql_data']->value) {?> <div class="alert alert-danger"><b>Invalid MySQL login info.</b><br><br>Please be sure you entered right mysql host, mysql database name, mysql login, mysql password.<br> Ask this information your hosting provider if you not sure. </div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['wrong_admin_data']->value) {?> <div class="alert alert-danger">Please, enter Admin login info. Admin login should be unique for security reasons. </div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['installed']->value != 1) {?> <form method=post name=installfm onsubmit="return checkform()"> <input type=hidden name=a value=install> <table class="form"> <tr> <th colspan=2>MySQL data</th> </tr><tr> <th>Mysql host:</th> <td><input type=text name=mysql_host value="<?php if ($_smarty_tpl->tpl_vars['form_data']->value['mysql_host']) {
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['form_data']->value['mysql_host'], ENT_QUOTES, 'UTF-8', true));
} else { ?>localhost<?php }?>" class=inpts size=30></td> </tr><tr> <th>Mysql database name:</th> <td><input type=text name=mysql_db value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['form_data']->value['mysql_db'], ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td> </tr><tr> <th>Mysql username:</th> <td><input type=text name=mysql_username value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['form_data']->value['mysql_username'], ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td> </tr><tr> <th>Mysql password:</th> <td><input type=text name=mysql_password value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['form_data']->value['mysql_password'], ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td> </tr><tr> <th colspan=2>License data:</th> </tr><tr> <th>Host:</th> <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['hostname']->value);?>
</td> </tr><tr> <th>License Key:</th> <td><input type=text name=license_string value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['form_data']->value['license_string'], ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td> </tr><tr> <th colspan=2>Admin account data:</th> </tr><tr> <th>System E-mail:</th> <td><input type=text name=system_email value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['form_data']->value['system_email'])===null||$tmp==='' ? "noreply@".((string)$_smarty_tpl->tpl_vars['hostname']->value) : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td> </tr><tr> <th>Admin E-mail:</th> <td><input type=text name=admin_email value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['form_data']->value['admin_email'], ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td> </tr><tr> <th>Admin Login:</th> <td><input type=text name=admin_login value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['form_data']->value['admin_login'], ENT_QUOTES, 'UTF-8', true));?>
" class=inpts size=30></td> </tr><tr> <th>Admin Password:</th> <td><input type=password name=admin_password value="" class=inpts size=30></td> </tr><tr> <th>&nbsp;</th> <td><input type=submit value="Install" class=sbmt></td> </tr></table> </form> <?php } else { ?> <div class="alert alert-success">Script successfully installed!</div> <?php if ($_smarty_tpl->tpl_vars['unlink_install']->value) {?> <div class="alert alert-danger">Please delete install.php file for security reason.</div> <?php }?> <table class=form> <tr> <th>Path to script</th> <td><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['script_path']->value);?>
" target=_blank><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['script_path']->value);?>
</a></td> </tr> <tr> <th>Admin login:</th> <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['form_data']->value['admin_login'], ENT_QUOTES, 'UTF-8', true));?>
</td> </tr> <tr> <th>Admin password:</th> <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['form_data']->value['admin_password'], ENT_QUOTES, 'UTF-8', true));?>
</td> </tr> </table> <div class="alert alert-warning">Login to admin area, go to settings screen and specify your sitename, payment accounts and other information.</div> <?php }?> </td> </tr> </table> 
 </td> </tr> </table> </td> </tr> </table> </td> </tr> <tr> <td height="19" bgcolor="ff8d00"><div align="center" class="forCopyright">All Rights Reserved. <a href="http://www.templaterex.com" class="forCopyright">Template Rex</a></div></td>
 </tr> </table> </center></body> </html> <?php }
}
?>