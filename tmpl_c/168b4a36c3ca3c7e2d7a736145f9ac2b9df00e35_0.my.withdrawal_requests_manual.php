<?php /* Smarty version 3.1.27, created on 2023-09-30 01:57:23
         compiled from "my:withdrawal_requests_manual" */ ?>
<?php
/*%%SmartyHeaderCode:53801294965178083361812_78566103%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '168b4a36c3ca3c7e2d7a736145f9ac2b9df00e35' => 
    array (
      0 => 'my:withdrawal_requests_manual',
      1 => 1696039043,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '53801294965178083361812_78566103',
  'variables' => 
  array (
    'fatals' => 0,
    'trans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65178083389420_07434107',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65178083389420_07434107')) {
function content_65178083389420_07434107 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53801294965178083361812_78566103';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Manual Process Withdrawal:</h3> <?php if ($_smarty_tpl->tpl_vars['fatals']->value) {?> <?php if ($_smarty_tpl->tpl_vars['fatals']->value['done']) {?> <div class="alert alert-success">Withdrawal has been processed.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['fatals']->value['not_found']) {?> <div class="alert alert-warning">Transaction not found. Probably withdrawal was already processed.</div> <?php }?> <?php if ($_smarty_tpl->tpl_vars['fatals']->value['user_not_found']) {?> <div class="alert alert-danger">User not found</div> <?php }?> <br> <center> <input type=button class=sbmt value="Close" onclick="window.close();"> </center> <?php }?> <?php if (!$_smarty_tpl->tpl_vars['fatals']->value) {?> <form name=spend method=post> <table class="form"> <?php echo $_smarty_tpl->getSubTemplate ("my:withdraw_details_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  <tr> <th>Payment ID:</th> <td><input type=input name=batch value="" class=inpts></td> </tr> <tr> <th>Payee Account:</th> <td><input type=input name=payee value="<?php if (!$_smarty_tpl->tpl_vars['trans']->value['account_array']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['account'], ENT_QUOTES, 'UTF-8', true);
}?>" class=inpts></td> </tr> <tr> <th></th> <td> <input type=hidden name=a value="withdrawal_requests"> <input type=hidden name=action2 value="pay_manual"> <input type=hidden name=do value="confirm"> <input type=hidden name=id value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['id'];?>
"> <input type=submit value="Confirm Transaction has been Paid" class="sbmt btn-success"> &nbsp; <input type=button class="sbmt btn-danger" value="Cancel" onclick="window.close();"> </td> </tr> </table> </form>  <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>