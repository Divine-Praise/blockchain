<?php /* Smarty version 3.1.27, created on 2023-07-12 11:15:38
         compiled from "my:referrals" */ ?>
<?php
/*%%SmartyHeaderCode:77172753364ae8b5a946e10_50687118%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75d8c1e32dc705c93bfea3b3f59df48d44b1463f' => 
    array (
      0 => 'my:referrals',
      1 => 1689160538,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '77172753364ae8b5a946e10_50687118',
  'variables' => 
  array (
    'frm' => 0,
    'settings' => 0,
    'direct_ref_table' => 0,
    'i' => 0,
    'r' => 0,
    'more_ref_levels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64ae8b5a97b557_36434566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64ae8b5a97b557_36434566')) {
function content_64ae8b5a97b557_36434566 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '77172753364ae8b5a946e10_50687118';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Referral Settings:</h3>  <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "done") {?> <div class="alert alert-success">Changes has been successfully saved.</div> <?php }?>  <?php echo '<script'; ?>
 language=javascript> function checkref(a) { if (!document.refform.elements["ref_name["+a+"]"]) return; document.refform.elements["ref_name["+a+"]"].disabled = !document.refform.elements["active["+a+"]"].checked; document.refform.elements["ref_from["+a+"]"].disabled = !document.refform.elements["active["+a+"]"].checked; document.refform.elements["ref_to["+a+"]"].disabled = !document.refform.elements["active["+a+"]"].checked; document.refform.elements["ref_percent["+a+"]"].disabled = !document.refform.elements["active["+a+"]"].checked; } function update_force_upline() { var opt = document.refform.force_upline.selectedIndex; document.getElementById("get_rand_ref_tr").style.display = opt ? "" : "none"; } function update_solid_ref_comm() { var opt = document.refform.use_solid_referral_commission.selectedIndex; document.getElementById("solid_ref_comm_amount_tr").style.display = opt ? "" : "none"; } <?php echo '</script'; ?>
> <style> select { margin: 8px 2px; } </style>  <form method=post name=refform> <input type=hidden name=a value=referrals> <input type=hidden name=action value=save> <input type=hidden name=say value=""> <table class="form"> <tr> <th>Referral Program Status:</th> <td><select name=usereferal class=inpts><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] == 1) {?>selected<?php }?>>Enabled</select> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Toggle the usage of a referral program. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> <tr> <th>Force an upline during the signup:</th> <td><select name=force_upline class=inpts onchange="update_force_upline()"><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['force_upline'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['force_upline'] == 1) {?>selected<?php }?>>Enabled</select> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Defines whether a user must have an upline to register. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> <tr id="get_rand_ref_tr"> <th>Set a random upline:<br><small>(requires &#39;Force an upline during the signup&#39; option enabled)</small></th> <td><select name=get_rand_ref class=inpts><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref'] == 1) {?>selected<?php }?>>Enabled</select> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 If &#39;Force an upline during the signup&#39; option is enabled and user does not have an upline the system will set a random one. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr>  <tr> <th>Show a user&#39;s traffic/registrations statistics:</th> <td><select name=show_refstat class=inpts><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_refstat'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_refstat'] == 1) {?>selected<?php }?>>Enabled</select> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Enable for your users to view their referral link traffic to your site and how many visitors became them referrals. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> <tr> <th>Show a user his referrals&#39; usernames and e-mails:</th> <td><select name=show_referals class=inpts><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_referals'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_referals'] == 1) {?>selected<?php }?>>Enabled</select> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Enable for your users to view their referrals&#39; nicknames and e-mails. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> <tr> <th>Pay fixed referral commision amount (<?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
):</th> <td> <table class="form nosize"> <tr> <td><select name=use_solid_referral_commission class=inpts onchange="update_solid_ref_comm()" style="margin:0;"><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_solid_referral_commission'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_solid_referral_commission'] == 1) {?>selected<?php }?>>Enabled</select></td> </tr><tr id="solid_ref_comm_amount_tr"> <td><input type=text name=solid_referral_commission_amount value="<?php echo amount_smarty_format($_smarty_tpl->tpl_vars['settings']->value['solid_referral_commission_amount']);?>
" class=inpts></td> </tr> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Enable if you wish your users receive fixed referral comission amount after first referral deposit only.<br> <b>If this option enabled - no percentages uses and no refferals for 2-10 levels.</b> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> <tr> <th>Pay referral commission to active users only:</th> <td><select name=pay_active_referal class=inpts><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['pay_active_referal'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['pay_active_referal'] == 1) {?>selected<?php }?>>Enabled</select> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Enable if you wish referral commision be paid to users who made a deposit only. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> <tr> <th>Use active users only:</th> <td><select name=use_active_referal class=inpts><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_active_referal'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_active_referal'] == 1) {?>selected<?php }?>>Enabled</select> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Enable if you wish referrals ranges counts from referrals who made a deposit only. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> <tr> <th>Don&#39;t add referral commission for deposits from account balance:</th> <td><select name=no_ref_on_respend class=inpts><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['no_ref_on_respend'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['no_ref_on_respend'] == 1) {?>selected<?php }?>>Enabled</select> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Enable if you do not want referral commission will be added to upline if user deposits from account balance made. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> <tr> <th>Allow users set Referral Commission Back automatically:</th> <td><select name=use_rcb class=inpts><option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_rcb'] == 0) {?>selected<?php }?>>Disabled<option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_rcb'] == 1) {?>selected<?php }?>>Enabled</select> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Enable if you do not want referral commission will be added to upline if user deposits from account balance made. Enable to allow automatic Referral Commissions Back for direct referrals. User can set RCB percent in his account settings (template should has code for this feature, check default template for it). <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 </td> </tr> </table> <?php echo '<script'; ?>
> update_force_upline(); update_solid_ref_comm(); <?php echo '</script'; ?>
>  <h3>1st level (Direct) Referrals Commission:</h3> <table class="list"> <tr> <th colspan=2 rowspan=2>Program name</th> <th colspan=2> <select name="ref_range_type" class=inpts> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['ref_range_type'] == 0) {?>selected<?php }?>>Referrals Range</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['ref_range_type'] == 1) {?>selected<?php }?>>Amounts Range</option> </select> </th> <th colspan=4 rowspan=2>Commission (%)</th> </tr> <tr> <th>From</th> <th>To</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['direct_ref_table']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><input type=checkbox name=active[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
] value=1 <?php if (!$_smarty_tpl->tpl_vars['r']->value['new']) {?>checked<?php }?> onClick="checkref(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
)"></td> <td><input type=text name=ref_name[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
] value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=15></td> <td align=center><input type=text name=ref_from[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
] class=inpts size=5 value="<?php echo $_smarty_tpl->tpl_vars['r']->value['from_value'];?>
" style="text-align: right"></td> <td align=center><input type=text name=ref_to[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
] class=inpts size=5 value="<?php if (!$_smarty_tpl->tpl_vars['r']->value['new']) {
if ($_smarty_tpl->tpl_vars['r']->value['to_value'] > 0) {
echo $_smarty_tpl->tpl_vars['r']->value['to_value'];
} else { ?>and more<?php }
}?>" style="text-align: right"></td> <td align=center><input type=text name=ref_percent[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
] class=inpts size=6 value="<?php echo $_smarty_tpl->tpl_vars['r']->value['percent'];?>
" style="text-align: right">%</td> </tr> <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?> </table> <?php echo '<script'; ?>
> for (i=0;i<31;i++) checkref(i); <?php echo '</script'; ?>
> <table class="form"> <tr> <th>Min deposit amount (<?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
):</th> <td><input type=text name=ref1_cms_minamount class=inpts size=6 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['ref1_cms_minamount'], ENT_QUOTES, 'UTF-8', true);?>
"></td> </tr> <tr> <th>Max referral commission amount (<?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
):</th> <td><input type=text name=ref1_cms_max_commission_amount class=inpts size=6 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['ref1_cms_max_commission_amount'], ENT_QUOTES, 'UTF-8', true);?>
"></td> </tr> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Min deposit amount limits minimal deposit amount with will provide referral comission. For ex. if you set it to $20 then all deposits less $20 will not provide any referral bonuses. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <br>  <h3>More Referral Levels (non direct 2 to 10 levels):</h3> <table class="list nosize"> <tr> <th>Level</th> <th>Commission (%)</th> <th>Min Deposit Amount (<?php echo amount_smarty_fiat_func(array(),$_smarty_tpl);?>
)</th> <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_ref_comm_deep_levels_active_users_limit']) {?> <th>Min Active Refs</th> <?php }?> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['more_ref_levels']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><?php echo $_smarty_tpl->tpl_vars['r']->value['i'];?>
 level</td> <td align=center><input type=text name=ref<?php echo $_smarty_tpl->tpl_vars['r']->value['i'];?>
_cms class=inpts size=8 style="text-align: right" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['percent'];?>
">%</td> <td align=center><input type=text name=ref<?php echo $_smarty_tpl->tpl_vars['r']->value['i'];?>
_cms_minamount class=inpts size=6 style="text-align: right" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['min_amount'];?>
"></td> <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_ref_comm_deep_levels_active_users_limit']) {?> <td align=center><input type=text name=ref<?php echo $_smarty_tpl->tpl_vars['r']->value['i'];?>
_1lev_limit class=inpts size=6 style="text-align: right;" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['limit'];?>
"></td> <?php }?> </tr> <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?> </table><br><br>  <center> <input type=submit value="Save" class="btn btn-success sbmt"> </center> </form> <br><br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Change the referral program rates here.<br> From and to - quantity of user&#39;s referrals.<br> Commission - the referral percent. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>