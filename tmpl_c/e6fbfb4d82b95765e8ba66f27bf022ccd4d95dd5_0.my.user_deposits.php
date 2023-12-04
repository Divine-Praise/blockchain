<?php /* Smarty version 3.1.27, created on 2023-09-04 11:17:29
         compiled from "my:user_deposits" */ ?>
<?php
/*%%SmartyHeaderCode:165705337264f5bcc9a30371_94797773%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6fbfb4d82b95765e8ba66f27bf022ccd4d95dd5' => 
    array (
      0 => 'my:user_deposits',
      1 => 1693826249,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '165705337264f5bcc9a30371_94797773',
  'variables' => 
  array (
    'frm' => 0,
    'user' => 0,
    'deposits' => 0,
    'd' => 0,
    'p' => 0,
    'permits' => 0,
    'types' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64f5bcc9a5f0e6_30402191',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64f5bcc9a5f0e6_30402191')) {
function content_64f5bcc9a5f0e6_30402191 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '165705337264f5bcc9a30371_94797773';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>User&#39;s Deposits:</h3>  <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "done") {?> <div class="alert alert-success">User information saved<br></div> <?php }?> <form method=post> <input type=hidden name=a value=user_deposits> <input type=hidden name=action value=save> <input type=hidden name=id value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"> <table class="list"> <tr> <th>Info</th> <th>Actions</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['deposits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?> <tr id="deposit_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td valign=top> <table width=100% class="list sub"> <tr><td colspan=2>Plan: <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['type_name'], ENT_QUOTES, 'UTF-8', true);?>
</b> <?php if ($_smarty_tpl->tpl_vars['d']->value['bonus_flag']) {?><span class="badge badge-danger">Bonus</span><?php }?></td></tr> <tr><td colspan=2>Since: <i><?php echo $_smarty_tpl->tpl_vars['d']->value['deposit_date'];?>
</i></td></tr> <tr><td>Amount:</td><td><b style="color:darkgreen"><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['d']->value['actual_amount'],$_smarty_tpl->tpl_vars['d']->value['ec']);?>
</b> <img src="/images/<?php echo $_smarty_tpl->tpl_vars['d']->value['ec'];?>
.gif" height=17 width=44 align=absmiddle></td></tr> <tr><td>Earned:</td><td><b style="color:purple"><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['d']->value['earned_amount'],$_smarty_tpl->tpl_vars['d']->value['ec']);?>
</b> (<?php if ($_smarty_tpl->tpl_vars['d']->value['profit'] >= 100) {?><b style="color:red"><?php echo $_smarty_tpl->tpl_vars['d']->value['profit'];?>
%</b><?php } else { ?><b style="color:gray"><?php echo $_smarty_tpl->tpl_vars['d']->value['profit'];?>
%</b><?php }?>)</td></tr> <?php if ($_smarty_tpl->tpl_vars['d']->value['compound_percents']) {?> <tr><td>Compounded:</td><td><?php if ($_smarty_tpl->tpl_vars['d']->value['compound_amount'] > 0) {?><b style="color:darkorange"><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['d']->value['compound_amount'],$_smarty_tpl->tpl_vars['d']->value['ec']);?>
</b><?php } else {
echo amount_smarty_fiat(0,$_smarty_tpl->tpl_vars['d']->value['ec']);
}?></td></tr> <?php }?> <tr><td style="width:30%">Mature:</td><td><b style="color:gray"><?php echo $_smarty_tpl->tpl_vars['d']->value['duration'];?>
</b></td></tr> <tr><td>Expires:</td><td><b style="color:darkred"><?php if ($_smarty_tpl->tpl_vars['d']->value['q_days'] == 0) {?>Never<?php } else {
echo $_smarty_tpl->tpl_vars['d']->value['expires'];
}?></b></td></tr> <?php if ($_smarty_tpl->tpl_vars['d']->value['init_amonut'] != $_smarty_tpl->tpl_vars['d']->value['amount'] && $_smarty_tpl->tpl_vars['d']->value['init_amonut'] != 0) {?> <tr><td>Initial:</td><td><b style="color:navy"><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['d']->value['init_amonut'],$_smarty_tpl->tpl_vars['d']->value['ec']);?>
</b></td></tr> <?php }?> </table> </td> <td valign=top> <table width=100% class="list sub"> <?php if ($_smarty_tpl->tpl_vars['d']->value['compound_percents']) {?> <tr><td>Compound:</td><td> <select name="compound[<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
]" class=inpts> <?php
$_from = $_smarty_tpl->tpl_vars['d']->value['compound_percents'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pp']->_loop = false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value => $_smarty_tpl->tpl_vars['pp']->value) {
$_smarty_tpl->tpl_vars['pp']->_loop = true;
$foreach_pp_Sav = $_smarty_tpl->tpl_vars['pp'];
?> <option value=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['d']->value['compound'] == $_smarty_tpl->tpl_vars['p']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option> <?php
$_smarty_tpl->tpl_vars['pp'] = $foreach_pp_Sav;
}
?> </select>% </td></tr> <?php }?> <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <tr><td>Change Plan:</td><td> <select name="type_id[<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
]" class=inpts> <?php
$_from = $_smarty_tpl->tpl_vars['types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?> <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['t']->value['id'] == $_smarty_tpl->tpl_vars['d']->value['type_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
</option> <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?> </select> </td></tr> <?php }?> <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <tr><td>Release Amount:</td><td><input type=text name="release[<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
]" value="" class=inpts size=20 style="text-align: right"></td></tr> <tr><td>Release Fee:</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['release_fee'];?>
%</td></tr> <?php }?> <?php if ($_smarty_tpl->tpl_vars['d']->value['released_amount'] > 0) {?> <tr><td>Already Released:</td><td><b><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['d']->value['released_amount'],$_smarty_tpl->tpl_vars['d']->value['ec']);?>
</b></td></tr> <?php }?> </table> </td> </tr> <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
if (!$_smarty_tpl->tpl_vars['d']->_loop) {
?> <tr> <td colspan=3 align=center>No deposits found</td> </tr> <?php
}
?> </table><br> <?php if ($_smarty_tpl->tpl_vars['deposits']->value) {?> <center> <input type=submit value="Update" class="sbmt btn btn-danger"> </center> <?php }?> </form> <br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Manage deposits:<br> A member can ask you to clear his deposit and return his funds.<br> This screen helps you to release user&#39;s deposit if you need. Funds will return to the member&#39;s account and the member can withdraw these funds. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>