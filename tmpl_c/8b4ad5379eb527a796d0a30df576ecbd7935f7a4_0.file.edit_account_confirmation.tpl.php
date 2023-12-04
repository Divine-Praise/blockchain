<?php /* Smarty version 3.1.27, created on 2023-09-04 16:39:46
         compiled from "/home/assetpin/public_html/tmpl/edit_account_confirmation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:134564197864f6085256f780_38559251%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b4ad5379eb527a796d0a30df576ecbd7935f7a4' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/edit_account_confirmation.tpl',
      1 => 1580258160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134564197864f6085256f780_38559251',
  'variables' => 
  array (
    'say' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64f60852592b12_97973464',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64f60852592b12_97973464')) {
function content_64f60852592b12_97973464 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '134564197864f6085256f780_38559251';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h3>Confirm Your Identity:</h3><br><br>
<form action="index.php" method=post name=editform>
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
<input type=hidden name=action2 value=confirm>

<?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_code') {?>
<b style="color: red">Invalid Confirmation Code</b><br><br>
<?php }?>

The system sent you an e-mail with the confirmation code used to confirm your identity. Please check your e-mail.
<br><br>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your Confirmation Code:</td>
 <td><input type=text name=account_update_confirmation_code class=inpts size=30></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>