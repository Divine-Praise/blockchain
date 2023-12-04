<?php /* Smarty version 3.1.27, created on 2023-07-07 22:08:28
         compiled from "/home/assetpin/public_html/tmpl/index_last_deposits.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:173163912964a88cdcde22a0_56930965%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4f3f6ae492557653db5ba8d33f599bad984591b' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/index_last_deposits.tpl',
      1 => 1643004898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173163912964a88cdcde22a0_56930965',
  'variables' => 
  array (
    'settings' => 0,
    'last_deposits' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a88cdcde7ee3_19712566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a88cdcde7ee3_19712566')) {
function content_64a88cdcde7ee3_19712566 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '173163912964a88cdcde22a0_56930965';
if ($_smarty_tpl->tpl_vars['settings']->value['index_last_deposits']) {?>
<?php echo loaddata_smarty(array('name'=>"transactions",'limit'=>$_smarty_tpl->tpl_vars['settings']->value['index_last_deposits'],'type'=>"deposit",'var'=>"last_deposits"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['last_deposits']->value) {?>
<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <th colspan=4><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
  <th colspan=4 class=title>Last Deposits</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['last_deposits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
<tr>
 <td class=menutxt><img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['ec']);?>
.gif"></td>
 <td class=menutxt><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['amount'],$_smarty_tpl->tpl_vars['s']->value['ec']));?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['date']);?>
</td>
 <td class=menutxt><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['username']);?>
</td>
 </td>
</tr>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
</table>
<?php }

}
}
?>