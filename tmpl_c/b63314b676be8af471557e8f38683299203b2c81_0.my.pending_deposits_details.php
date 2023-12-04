<?php /* Smarty version 3.1.27, created on 2023-10-05 11:41:30
         compiled from "my:pending_deposits_details" */ ?>
<?php
/*%%SmartyHeaderCode:1717727497651ea0ea54c027_99858954%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b63314b676be8af471557e8f38683299203b2c81' => 
    array (
      0 => 'my:pending_deposits_details',
      1 => 1696506090,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1717727497651ea0ea54c027_99858954',
  'variables' => 
  array (
    'deposit' => 0,
    'frm' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651ea0ea5958c5_92457593',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651ea0ea5958c5_92457593')) {
function content_651ea0ea5958c5_92457593 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1717727497651ea0ea54c027_99858954';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Deposit Details:</h3> <?php echo '<script'; ?>
> var percent = parseFloat(<?php echo $_smarty_tpl->tpl_vars['deposit']->value['fees']['percent'];?>
); var add_amount = parseFloat(<?php echo $_smarty_tpl->tpl_vars['deposit']->value['fees']['add_amount'];?>
); var fee_min = parseFloat(<?php echo $_smarty_tpl->tpl_vars['deposit']->value['fees']['fee_min'];?>
); var fee_max = parseFloat(<?php echo $_smarty_tpl->tpl_vars['deposit']->value['fees']['fee_max'];?>
); var ecpow = ("<?php echo $_smarty_tpl->tpl_vars['deposit']->value['fees']['add_amount'];?>
".replace(/^\d+\./, "")).length;  function update_fee() { var to_deposit = ""; var amount = parseFloat(document.getElementById("debit_amount").value); if (!isNaN(amount)) { var fee = amount * (percent/100); if (Math.abs(fee) < Math.abs(fee_min)) fee = fee_min; if (Math.abs(fee_max) > 0 && Math.abs(fee) > Math.abs(fee_max)) fee = fee_max; to_deposit = amount - add_amount; to_deposit = (to_deposit - fee).toFixed(ecpow); } document.getElementById("credit_amount").innerHTML = to_deposit; } function check_pd(e) { if (this.value == "movetodeposit") { ret = confirm("Please, confirm deposit creation"); } if (this.value == "movetoaccount") { ret = confirm("Please, confirm add funds to balnce"); } if (this.value == "movetonew") { ret = confirm("Please, confirm deposit status change"); } if (this.value == "movetoproblem") { ret = confirm("Please, confirm deposit status change"); } if (this.value == "delete") { ret = confirm("Please, confirm deposit deelete"); } if (ret == false) { e.preventDefault(); e.stopPropagation(); } }  <?php echo '</script'; ?>
> <form method=post name=nform onsubmit="return "> <input type=hidden name=a value=pending_deposits> <input type=hidden name=id value=<?php echo $_smarty_tpl->tpl_vars['deposit']->value['id'];?>
> <table class=form> <tr> <th colspan=2>Deposit Information:</th> </tr> <tr> <th>Debit Amount:</th> <td> <?php echo amount_smarty_fiat(0,$_smarty_tpl->tpl_vars['deposit']->value['ec'],"#sign#");?>
<input type=text name=amount value="<?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['amount'],$_smarty_tpl->tpl_vars['deposit']->value['ec'],"#amount#");?>
" id="debit_amount" class="inpts nosize" size=15 onkeyup="update_fee()" onclick="update_fee()" onblur="update_fee()"> </td> </tr> <tr> <th>Fee:</th> <td><?php echo $_smarty_tpl->tpl_vars['deposit']->value['fees']['percent'];?>
% + <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['fees']['add_amount'],$_smarty_tpl->tpl_vars['deposit']->value['ec']);?>
 (min. <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['fees']['fee_min'],$_smarty_tpl->tpl_vars['deposit']->value['ec']);?>
 max. <?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['deposit']->value['fees']['fee_max'],$_smarty_tpl->tpl_vars['deposit']->value['ec']);?>
)</td> </tr> <tr> <th>Credit Amount:</th> <td><?php echo amount_smarty_fiat(0,$_smarty_tpl->tpl_vars['deposit']->value['ec'],"#sign#");?>
<span id="credit_amount"><?php echo $_smarty_tpl->tpl_vars['deposit']->value['to_deposit'];?>
</span></td> </tr> <tr> <th>Currency:</th> <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['deposit']->value['ec_name'])===null||$tmp==='' ? "<i>deleted</i>" : $tmp);?>
</td> </tr> <tr> <th>Plan:</th> <td><?php echo $_smarty_tpl->tpl_vars['deposit']->value['type_name'];?>
</td> </tr> <?php if ($_smarty_tpl->tpl_vars['frm']->value['do'] != "movetoaccount") {?> <?php if ($_smarty_tpl->tpl_vars['deposit']->value['compound'] > 0) {?> <tr> <th>Componding percent:</th> <td><?php echo $_smarty_tpl->tpl_vars['deposit']->value['compound'];?>
 %</td> </tr> <?php }?> <?php }?> <tr> <th>Date:</th> <td><?php echo $_smarty_tpl->tpl_vars['deposit']->value['fdate'];?>
 </tr><tr> <th>User:</th> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['deposit']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr> <tr> <th colspan=2>Transaction Information:</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['deposit']->value['info'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?> <tr> <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</th> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['i']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</td> </tr> <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>  </table> <br> <?php if ($_smarty_tpl->tpl_vars['deposit']->value['status'] != "processed") {?> <button name=do value=movetodeposit id="movetodeposit_btn" type=submit class="sbmt btn btn-success">Create Deposit</button> &nbsp; <?php echo '<script'; ?>
>document.getElementById("movetodeposit_btn").addEventListener("click", check_pd);<?php echo '</script'; ?>
> <button name=do value=movetoaccount id="movetoaccount_btn" type=submit class="sbmt btn btn-success">Add Funds to Balance</button> &nbsp; <?php echo '<script'; ?>
>document.getElementById("movetoaccount_btn").addEventListener("click", check_pd);<?php echo '</script'; ?>
> <?php if ($_smarty_tpl->tpl_vars['deposit']->value['status'] == "problem") {?> <button name=do value=movetonew id="movetonew_btn" type=submit class="sbmt btn btn-info">Move to New</button> &nbsp; <?php echo '<script'; ?>
>document.getElementById("movetonew_btn").addEventListener("click", check_pd);<?php echo '</script'; ?>
> <?php } else { ?> <button name=do value=movetoproblem id="movetoproblem_btn" type=submit class="sbmt btn btn-info">Move to Problem</button> &nbsp; <?php echo '<script'; ?>
>document.getElementById("movetoproblem_btn").addEventListener("click", check_pd);<?php echo '</script'; ?>
> <?php }?> <button name=do value=delete id="delete_btn" type=submit class="sbmt btn btn-danger">Delete</button> &nbsp; <?php echo '<script'; ?>
>document.getElementById("delete_btn").addEventListener("click", check_pd);<?php echo '</script'; ?>
> <?php }?> <a class="sbmt btn btn-warning" href="?a=pending_deposits&type=<?php echo $_smarty_tpl->tpl_vars['deposit']->value['status'];?>
">Cancel</a>  </form> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php if ($_smarty_tpl->tpl_vars['frm']->value['do'] == "movetodeposit") {?> You can change the amount before moving this transfer to the deposit <?php } else { ?> Move to deposit - you can move this deposit to &#39;processed&#39; and create a deposit for it if you have really received this deposit.<br> Move to problem - move this deposit to the &#39;problem&#39; list.<br> Delete - delete this deposit if you haven&#39;t received it. <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>