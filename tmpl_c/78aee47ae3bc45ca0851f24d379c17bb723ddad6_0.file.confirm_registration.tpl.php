<?php /* Smarty version 3.1.27, created on 2023-10-04 01:22:26
         compiled from "/home/assetpin/public_html/tmpl/confirm_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:625083862651cbe52ee6ee5_92786860%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78aee47ae3bc45ca0851f24d379c17bb723ddad6' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/confirm_registration.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '625083862651cbe52ee6ee5_92786860',
  'variables' => 
  array (
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651cbe52f3e754_23666369',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651cbe52f3e754_23666369')) {
function content_651cbe52f3e754_23666369 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '625083862651cbe52ee6ee5_92786860';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['success']->value == 0) {?>
<b>Account has not been confirmed:</b><br> Please check the link you received. It seems it is broken.
<?php } else { ?>
<b>Account has been confirmed:</b><br>
<br>

Your account has been successfully confirmed.
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>