<?php /* Smarty version 3.1.27, created on 2023-07-14 01:20:34
         compiled from "my:withdrawal_requests_prepare_payout" */ ?>
<?php
/*%%SmartyHeaderCode:172070608264b0a2e26f5a39_23908008%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9898ff349025e59208ddec86a3a0887ebb8a5d3d' => 
    array (
      0 => 'my:withdrawal_requests_prepare_payout',
      1 => 1689297634,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '172070608264b0a2e26f5a39_23908008',
  'variables' => 
  array (
    'ids' => 0,
    'i' => 0,
    'ps' => 0,
    'p' => 0,
    't' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64b0a2e27201b5_33677096',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64b0a2e27201b5_33677096')) {
function content_64b0a2e27201b5_33677096 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '172070608264b0a2e26f5a39_23908008';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Mass Payment:</h3>  <form method=post name=payform onsubmit="return disactive_submit_button()"> <input type=hidden name=a value=withdrawal_requests> <input type=hidden name=action2 value=pay> <input type=hidden name=do value=masspay> <?php
$_from = $_smarty_tpl->tpl_vars['ids']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?> <input type=hidden name=trn[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
] value=1> <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>   <?php echo '<script'; ?>
 language=javascript> function disactive_submit_button() { document.payform.submit_button.disabled = true; document.payform.cancel_button.disabled = true; return true; } function en_it() { for (id = 0; id < 200; id++) { if (document.payform["datasource_"+id]) { var flag = document.payform["datasource_"+id][0].checked; document.getElementById("data_"+id).style.display = (flag ? "none" : ""); } } } <?php echo '</script'; ?>
>  <?php
$_from = $_smarty_tpl->tpl_vars['ps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?> <div class="alert alert-danger"> <h4><img src="images/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
.gif" align=absmiddle> <?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
 (<b><?php echo amount_smarty_fiat($_smarty_tpl->tpl_vars['p']->value['prepared'],$_smarty_tpl->tpl_vars['t']->value['ec']);?>
</b>)</h4> <input type=radio name="datasource_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" value=0 onClick="en_it();" checked> Pay from the saved account (<a href="?a=processings&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" target=_blank>settings</a>)<br> <input type=radio name="datasource_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" value=1 onClick="en_it();"> Enter payment info now:<br> <table class="form" id="data_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"> <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['withdraw']['fields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['f']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
$foreach_f_Sav = $_smarty_tpl->tpl_vars['f'];
?> <tr> <th><?php echo $_smarty_tpl->tpl_vars['f']->value['title'];?>
:</th> <td><?php echo $_smarty_tpl->tpl_vars['f']->value['input'];?>
</td> </tr> <?php
$_smarty_tpl->tpl_vars['f'] = $foreach_f_Sav;
}
?> <?php echo $_smarty_tpl->tpl_vars['p']->value['withdraw']['form_html'];?>
 </table> <br> </div> <br> <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?> <center> <input type=submit name=submit_button value="Pay" class="btn btn-danger sbmt"> <input type=button name=cancel_button value="Cancel" class="btn btn-info sbmt" onclick="window.history.go(-1);"> </center> </form> <?php echo '<script'; ?>
 language=javascript>en_it();<?php echo '</script'; ?>
> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>