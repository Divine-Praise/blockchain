<?php /* Smarty version 3.1.27, created on 2023-07-14 01:20:02
         compiled from "my:withdrawal_requests_masspay_end" */ ?>
<?php
/*%%SmartyHeaderCode:114441372264b0a2c2d39304_04777505%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa63a19f25f9d8bf16bb47a52bcb671a1308dcbe' => 
    array (
      0 => 'my:withdrawal_requests_masspay_end',
      1 => 1689297602,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '114441372264b0a2c2d39304_04777505',
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64b0a2c2d3b431_70299805',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64b0a2c2d3b431_70299805')) {
function content_64b0a2c2d3b431_70299805 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114441372264b0a2c2d39304_04777505';
?>
 <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_trns']) {?><div class="alert alert-danger">No transactions to pay found.</div><?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value['no_curl']) {?><div class="alert alert-danger">Required PHP cURL module is not installed. Please contact your hoster to enable it.</div><?php }?> <br> <center> <a href="?a=withdrawal_requests" class="sbmt btn btn-success">Return</a> </center> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>