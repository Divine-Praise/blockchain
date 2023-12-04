<?php /* Smarty version 3.1.27, created on 2023-07-25 09:33:25
         compiled from "my:earning_holidays" */ ?>
<?php
/*%%SmartyHeaderCode:109208219264bf96e5ae6705_10096656%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13d6bd7a82d7df01e60ccf92b9810e7f63026fb0' => 
    array (
      0 => 'my:earning_holidays',
      1 => 1690277605,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '109208219264bf96e5ae6705_10096656',
  'variables' => 
  array (
    'frm' => 0,
    'holidays' => 0,
    'h' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64bf96e5b00fe5_78274212',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64bf96e5b00fe5_78274212')) {
function content_64bf96e5b00fe5_78274212 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '109208219264bf96e5ae6705_10096656';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Earning Holidays</h3> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "added") {?> <div class="alert alert-success">Holiday has been added.</div> <?php }?> <table class="list"> <tr> <th>Date</th> <th>Description</th> <th>Action</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['holidays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['h'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['h']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
$foreach_h_Sav = $_smarty_tpl->tpl_vars['h'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><?php echo $_smarty_tpl->tpl_vars['h']->value['fdate'];?>
</td> <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h']->value['hdescription'], ENT_QUOTES, 'UTF-8', true);?>
</td> <td><a href="?a=earning_holidays&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['h']->value['hd'];?>
&#csrf#" class="sbmt btn-sm btn-danger" onclick="return confirm('Are you sure to delete the holiday?');">delete</a></td> </tr> <?php
$_smarty_tpl->tpl_vars['h'] = $foreach_h_Sav;
}
if (!$_smarty_tpl->tpl_vars['h']->_loop) {
?> <tr> <td align=center colspan=3>No Holidays</td> </tr> <?php
}
?> </table> <br><br> <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_date']) {?> <div class="alert alert-danger">Invalid Date has been provided</div> <?php }?> <form method=post> <input type=hidden name=a value="earning_holidays"> <input type=hidden name=action value="add"> <table class=form> <tr> <th>Date:</th> <td><input type=date name=date value="<?php echo htmlspecialchars((($tmp = @'')===null||$tmp==='' ? "yyyy-mm-dd" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" class="inpts"></td> </tr> <tr> <th>Description:</th> <td><input type=text name=desc value="" class="inpts"></td> </tr> <tr> <th></th> <td><input type=submit value="Add" class="sbmt"></td> </tr> </table> </form> <br><br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Here you can set any future day as holiday. All <b>Daily</b> plans will not pay earnings on holidays.<br> Users will receive no earning with description: "no interest: holiday description".<br> <b>Attention:</b> if you use plan with duration 5 days, and one of this day will be holiday, user will receive 4 earnings only.<br> If you&#38;ll set date has passed as holiday, it will not be any affect on past earnings. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>