<?php /* Smarty version 3.1.27, created on 2023-09-30 02:04:20
         compiled from "my:exchange_rates" */ ?>
<?php
/*%%SmartyHeaderCode:5716046886517822443d366_44854068%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42ad470e336e49151b78560a79512924f17d19cc' => 
    array (
      0 => 'my:exchange_rates',
      1 => 1696039460,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '5716046886517822443d366_44854068',
  'variables' => 
  array (
    'frm' => 0,
    'exchange_status' => 0,
    'ec' => 0,
    'to' => 0,
    'from' => 0,
    'rates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65178224470058_57213878',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65178224470058_57213878')) {
function content_65178224470058_57213878 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5716046886517822443d366_44854068';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  <?php echo '<script'; ?>
 language=javascript> function to_all() { d = document.main; for (i = 0; i < d.elements.length; i++) { if (d.elements[i].name.match(/^exch/)) { d.elements[i].value = d.toall.value; } } } function set_rc() { d = document.main; for (i = 0; i < d.elements.length; i++) { if (str = d.elements[i].name.match(/^set_row_(\d+)$/)) { id = str[1]; val = d.elements[i].value; if (val != "") { re = new RegExp("^exch\\["+id+"\\]",""); for (j = 0; j < d.elements.length; j++) { if (d.elements[j].name.match(re)) { d.elements[j].value = val; } } } } if (str = d.elements[i].name.match(/^set_col_(\d+)$/)) { id = str[1]; val = d.elements[i].value; if (val != "") { re = new RegExp("^exch\\[\\d+\\]\\["+id+"\\]",""); for (j = 0; j < d.elements.length; j++) { if (d.elements[j].name.match(re)) { d.elements[j].value = val; } } } } } } <?php echo '</script'; ?>
> <style> .form.nosize th{ text-align:center; } .form.nosize td{ text-align:center; } td.highlite.row1 { background: #FCE7CA; } td.highlite.row2 { background: #FFB85A; } th.highlite.row1 { background: #FFC982; } th.highlite.row2 { background: #FFB85A; } </style>   <h3>Exchange Rates:</h3> <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == "saved") {?> <div class="alert alert-success">Changes has been successfully made.</div> <?php }?> <form method=post name=main> <input type=hidden name=a value=exchange_rates> <input type=hidden name=action value=save> <input type=hidden name=say value=""> <table class=form> <tr> <th>Status</th> <td><select name=enable_exchange class=inpts><option value=0 <?php if ($_smarty_tpl->tpl_vars['exchange_status']->value == 0) {?>selected<?php }?>>Disabled</option><option value=1 <?php if ($_smarty_tpl->tpl_vars['exchange_status']->value == 1) {?>selected<?php }?>>Enabled</option></select></td> </tr> </table> <br> <table class="form nosize"> <tr> <th nowrap>From / To</th> <?php
$_from = $_smarty_tpl->tpl_vars['ec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['to'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['to']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['to']->value) {
$_smarty_tpl->tpl_vars['to']->_loop = true;
$foreach_to_Sav = $_smarty_tpl->tpl_vars['to'];
?> <th class="highlite" data-to=<?php echo $_smarty_tpl->tpl_vars['to']->value['id'];?>
><img src=images/<?php echo $_smarty_tpl->tpl_vars['to']->value['id'];?>
.gif alt="<?php echo $_smarty_tpl->tpl_vars['to']->value['name'];?>
" height=17></th> <?php
$_smarty_tpl->tpl_vars['to'] = $foreach_to_Sav;
}
?> <th>Set Row</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['ec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['from'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['from']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['from']->value) {
$_smarty_tpl->tpl_vars['from']->_loop = true;
$foreach_from_Sav = $_smarty_tpl->tpl_vars['from'];
?> <tr> <th class="highlite" data-from=<?php echo $_smarty_tpl->tpl_vars['from']->value['id'];?>
><img src=images/<?php echo $_smarty_tpl->tpl_vars['from']->value['id'];?>
.gif alt="<?php echo $_smarty_tpl->tpl_vars['from']->value['name'];?>
" height=17></th> <?php
$_from = $_smarty_tpl->tpl_vars['ec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['to'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['to']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['to']->value) {
$_smarty_tpl->tpl_vars['to']->_loop = true;
$foreach_to_Sav = $_smarty_tpl->tpl_vars['to'];
?> <td class="highlite" data-from=<?php echo $_smarty_tpl->tpl_vars['from']->value['id'];?>
 data-to=<?php echo $_smarty_tpl->tpl_vars['to']->value['id'];?>
><?php if ($_smarty_tpl->tpl_vars['from']->value['id'] != $_smarty_tpl->tpl_vars['to']->value['id']) {?><input type="text" name="exch[<?php echo $_smarty_tpl->tpl_vars['from']->value['id'];?>
][<?php echo $_smarty_tpl->tpl_vars['to']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['from']->value['id']][$_smarty_tpl->tpl_vars['to']->value['id']];?>
" size=5 class=inpts><?php } else { ?>N/A<?php }?></td> <?php
$_smarty_tpl->tpl_vars['to'] = $foreach_to_Sav;
}
?> <th class="highlite" data-from=<?php echo $_smarty_tpl->tpl_vars['from']->value['id'];?>
><input type="text" name="set_row_<?php echo $_smarty_tpl->tpl_vars['from']->value['id'];?>
" value="" size=5 class=inpts></th> </tr> <?php
$_smarty_tpl->tpl_vars['from'] = $foreach_from_Sav;
}
?> <tr> <th nowrap>Set Col</th> <?php
$_from = $_smarty_tpl->tpl_vars['ec']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['to'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['to']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['to']->value) {
$_smarty_tpl->tpl_vars['to']->_loop = true;
$foreach_to_Sav = $_smarty_tpl->tpl_vars['to'];
?> <th class="highlite" data-to=<?php echo $_smarty_tpl->tpl_vars['to']->value['id'];?>
><input type="text" name="set_col_<?php echo $_smarty_tpl->tpl_vars['to']->value['id'];?>
" value="" size=5 class=inpts></th> <?php
$_smarty_tpl->tpl_vars['to'] = $foreach_to_Sav;
}
?> <th><input type=button value="Set" onclick="set_rc()" class=sbmt></th> </tr> </table> <br> <input type=text name="toall" value="1.00" size=5 class=inpts> <input type="button" value="Set to All" onclick="to_all()" class=sbmt> <br> <br> <center> <input type=submit value="Update" class="sbmt btn btn-success"> </center> </form> <br><br> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Exchange Rates:<br><br> Figures are the percents of an exchange rates.<br> Vertical column is FROM currency.<br> Horizontal row is TO currency.<br> <br> Ex: To set a percent for Payeer to Perfect Money exchange you should edit the field in the vertical column with the Payeer icon and in the row with the PM one.<br> <br> To disable an exchange set its percentage to 100. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  <?php echo '<script'; ?>
> var cells = document.querySelectorAll(".highlite"); for (var cell of cells) { cell.addEventListener("mouseover", marker); cell.addEventListener("mouseout", marker2); } function marker() { var dto = this.getAttribute("data-to"); var dfrom = this.getAttribute("data-from"); // var hcells = document.querySelectorAll(".highlite"); 
// for (var cell of hcells) { 
// cell.className = "highlite row1"; 
// } 
 var hcells = document.querySelectorAll(".highlite[data-to='"+dto+"'], .highlite[data-from='"+dfrom+"']"); for (var cell of hcells) { cell.className = "highlite row2"; } } function marker2() { var hcells = document.querySelectorAll(".highlite"); for (var cell of hcells) { cell.className = "highlite row1"; } } <?php echo '</script'; ?>
>  <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>