<?php /* Smarty version 3.1.27, created on 2023-09-30 02:09:20
         compiled from "my:info_box_settings" */ ?>
<?php
/*%%SmartyHeaderCode:55145910165178350aee712_79939328%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '180331377d54f1f7dfffbae0e5d1756e955213fa' => 
    array (
      0 => 'my:info_box_settings',
      1 => 1696039760,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '55145910165178350aee712_79939328',
  'variables' => 
  array (
    'frm' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65178350b3b8e5_37079381',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65178350b3b8e5_37079381')) {
function content_65178350b3b8e5_37079381 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '55145910165178350aee712_79939328';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Info Box Settings:</h3>  <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "saved") {?> <div class="alert alert-success">Settings have been updated.</div> <?php }?> <form method=post name=menuf> <input type=hidden name=a value=info_box_settings> <input type=hidden name=action value=save> <table class="form"> <tr> <th>Show Info Box:</th> <td> <select name="show_info_box" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Start Date:</th> <td> <select name="show_info_box_started" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_started'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_started'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Running days:</th> <td> <select name="show_info_box_running_days" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_running_days'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_running_days'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Total Accounts:</th> <td> <select name="show_info_box_total_accounts" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_total_accounts'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_total_accounts'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>VIP Accounts:</th> <td> <select name="show_info_box_vip_accounts" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_vip_accounts'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_vip_accounts'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>VIP Account Min Deposit:</th> <td> <input type="text" name="vip_users_deposit_amount" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['vip_users_deposit_amount'];?>
" class=inpts> </td> </tr> <tr> <th>Total Deposits:</th> <td> <select name="show_info_box_deposit_funds" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_deposit_funds'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_deposit_funds'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Today Deposits:</th> <td> <select name="show_info_box_today_deposit_funds" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_today_deposit_funds'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_today_deposit_funds'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Total Withdrawals:</th> <td> <select name="show_info_box_total_withdraw" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_total_withdraw'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_total_withdraw'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Today Withdrawals:</th> <td> <select name="show_info_box_today_withdraw_funds" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_today_withdraw_funds'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_today_withdraw_funds'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Visitors Online:</th> <td> <select name="show_info_box_visitor_online" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_visitor_online'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_visitor_online'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Members Online:</th> <td> <select name="show_info_box_members_online" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_members_online'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_members_online'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>The Newest Member:</th> <td> <select name="show_info_box_newest_member" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_newest_member'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_newest_member'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Last Withdrawal:</th> <td> <select name="show_info_box_lastwithdrawal" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastwithdrawal'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastwithdrawal'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Last Deposit:</th> <td> <select name="show_info_box_lastdeposit" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastdeposit'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastdeposit'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Last Topup:</th> <td> <select name="show_info_box_lastaddfunds" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastaddfunds'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastaddfunds'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Last Update Date:</th> <td> <select name="show_info_box_last_update" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_last_update'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_last_update'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 These info avaliable an every page. Please note: each option takes time to be generated, do not enable ones you do not use. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <br> <table class="form"> <tr> <th colspan=2>Last &amp; Tops:</th> </tr> <tr> <th>Number of Last Topups:</th> <td><input type=text name=index_last_add_funds value="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['index_last_add_funds']);?>
" class=inpts></td> </tr> <tr> <th>Number of Last Deposits:</th> <td><input type=text name=index_last_deposits value="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['index_last_deposits']);?>
" class=inpts></td> </tr> <tr> <th>Number of Last Withdrawals:</th> <td><input type=text name=index_last_withdrawals value="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['index_last_withdrawals']);?>
" class=inpts></td> </tr> <tr> <th>Number of Top Referrals:</th> <td><input type=text name=index_top_referrals value="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['index_top_referrals']);?>
" class=inpts></td> </tr> <tr> <th>Number of Top Investors:</th> <td><input type=text name=index_top_investors value="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['index_top_investors']);?>
" class=inpts></td> </tr> <tr> <th>Number of Last Members:</th> <td><input type=text name=index_last_members value="<?php echo intval($_smarty_tpl->tpl_vars['settings']->value['index_last_members']);?>
" class=inpts></td> </tr> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 These info avaliable an every page. Please note: each option takes time to be generated, do not enable ones you do not use. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <br> <table class="form"> <tr> <th colspan=2>Stats Pages:</th> </tr> <tr> <th>Show Stats Links Box:</th> <td> <select name="show_stats_box" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_stats_box'] == 0) {?>selected<?php }?>>Hide</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_stats_box'] == 1) {?>selected<?php }?>>Show</option> </select> </td> </tr> <tr> <th>Investors Page:</th> <td> <select name="show_members_stats" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_members_stats'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_members_stats'] == 1) {?>selected<?php }?>>Enable</option> </select> </td> </tr> <tr> <th>Paidouts Page:</th> <td> <select name="show_paidout_stats" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_paidout_stats'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_paidout_stats'] == 1) {?>selected<?php }?>>Enable</option> </select> </td> </tr> <tr> <th>Top Investors Page:</th> <td> <select name="show_top10_stats" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_top10_stats'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_top10_stats'] == 1) {?>selected<?php }?>>Enable</option> </select> </td> </tr> <tr> <th>Last Investors Page:</th> <td> <select name="show_last10_stats" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_last10_stats'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_last10_stats'] == 1) {?>selected<?php }?>>Enable</option> </select> </td> </tr> <tr> <th>Top Referrers Page:</th> <td> <select name="show_refs10_stats" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_refs10_stats'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_refs10_stats'] == 1) {?>selected<?php }?>>Enable</option> </select> </td> </tr> <tr> <th>Top Referrers Page:</th> <td> <select name="show_refs10_stats" class="inpts"> <option value=0 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_refs10_stats'] == 0) {?>selected<?php }?>>Disable</option> <option value=1 <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_refs10_stats'] == 1) {?>selected<?php }?>>Enable</option> </select> <table class=form"> <tr> <th>Users number on the page:</th> <td><input type=text name=refs10_qusers value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['refs10_qusers'];?>
" class=inpts></td> </tr> <tr> <th>Reset date:<br><i>yyyy-mm-dd</i></th> <td><input type=text name=refs10_start_date value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['refs10_start_date'];?>
" class=inpts></td> </tr> </table> </td> </tr> </table> <br><br> <center> <input type="submit" class="sbmt btn-success" value="Save"> </center> </form> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>