<?php /* Smarty version 3.1.27, created on 2023-10-05 11:05:08
         compiled from "my:tmpl_postback" */ ?>
<?php
/*%%SmartyHeaderCode:799231116651e98646e8992_99194574%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff05f7aee0ad7987920608a24bcf8c4f4dab1cb2' => 
    array (
      0 => 'my:tmpl_postback',
      1 => 1696503908,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '799231116651e98646e8992_99194574',
  'variables' => 
  array (
    'no_transactions' => 0,
    'transactions' => 0,
    'ltc_confirmations' => 0,
    't' => 0,
    'deposit_added' => 0,
    'processed_tx_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651e986472f3f3_52286648',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651e986472f3f3_52286648')) {
function content_651e986472f3f3_52286648 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '799231116651e98646e8992_99194574';
?>
 <html> <head></head> <body onload="update_status_from_iframe()"> <?php echo '<script'; ?>
 language=javascript>  function update_status_from_iframe() { window.parent.document.getElementById("placeforstatus").innerHTML = document.documentElement.innerHTML; }  <?php echo '</script'; ?>
> <?php if ($_smarty_tpl->tpl_vars['no_transactions']->value) {?> <b>Order status:</b> Waiting for payment<Br> <?php echo '<script'; ?>
 language=javascript> window.parent.document.getElementById("coinpr_form").style.display = ""; window.parent.document.getElementById("coin_payment_image").style.display = ""; <?php echo '</script'; ?>
> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['transactions']->value) {?>  <b>Order status:</b> Waiting for <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ltc_confirmations']->value);?>
 confirmations<br> <?php
$_from = $_smarty_tpl->tpl_vars['transactions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?> Payment: <a href=https://live.blockcypher.com/ltc/tx/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['txid']);?>
/ target=_blank><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['txid']);?>
</a> <?php if ($_smarty_tpl->tpl_vars['t']->value['tx_exists']) {?>Deposit Created<?php } else { ?>( <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['confirmations']);?>
 confirmations)<?php }?>. <br> 
 <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?> <?php }?> <?php if (!$_smarty_tpl->tpl_vars['transactions']->value && $_smarty_tpl->tpl_vars['deposit_added']->value == 1) {?> <b>Order status:</b> Deposit created txid: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['processed_tx_id']->value);?>
  <?php }?> <?php }?> <?php echo '<script'; ?>
 language=javascript> setTimeout("location.reload()", 30000); <?php echo '</script'; ?>
> </body></html> <?php }
}
?>