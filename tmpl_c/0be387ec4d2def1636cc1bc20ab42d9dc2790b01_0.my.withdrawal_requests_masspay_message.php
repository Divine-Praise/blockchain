<?php /* Smarty version 3.1.27, created on 2023-07-14 01:20:02
         compiled from "my:withdrawal_requests_masspay_message" */ ?>
<?php
/*%%SmartyHeaderCode:1581888264b0a2c2d32130_00433816%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0be387ec4d2def1636cc1bc20ab42d9dc2790b01' => 
    array (
      0 => 'my:withdrawal_requests_masspay_message',
      1 => 1689297602,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1581888264b0a2c2d32130_00433816',
  'variables' => 
  array (
    'result' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64b0a2c2d37e40_42006037',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64b0a2c2d37e40_42006037')) {
function content_64b0a2c2d37e40_42006037 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1581888264b0a2c2d32130_00433816';
?>
 <?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == 1) {?> <div class="alert alert-success"> Sending <b><?php echo $_smarty_tpl->tpl_vars['result']->value['fiat'];?>
 <?php echo $_smarty_tpl->tpl_vars['result']->value['amount'];?>
</b> to <?php echo $_smarty_tpl->tpl_vars['result']->value['ec_name'];?>
 account #<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['account'], ENT_QUOTES, 'UTF-8', true);?>
</b>.<br> <b>Success: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['batch'], ENT_QUOTES, 'UTF-8', true);?>
</b> </div> <?php } else { ?> <div class="alert alert-danger"> Sending <b><?php echo $_smarty_tpl->tpl_vars['result']->value['fiat'];?>
 <?php echo $_smarty_tpl->tpl_vars['result']->value['amount'];?>
</b> to <?php echo $_smarty_tpl->tpl_vars['result']->value['ec_name'];?>
 account #<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['account'], ENT_QUOTES, 'UTF-8', true);?>
</b>.<br> <b>Error: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['error'], ENT_QUOTES, 'UTF-8', true);?>
</b> </div> <?php }?> <?php }
}
?>