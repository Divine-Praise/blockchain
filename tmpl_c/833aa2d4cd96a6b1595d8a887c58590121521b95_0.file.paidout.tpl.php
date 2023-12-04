<?php /* Smarty version 3.1.27, created on 2023-07-07 12:58:33
         compiled from "/home/assetpin/public_html/tmpl/paidout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:207724573764a80bf93e8548_56384660%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '833aa2d4cd96a6b1595d8a887c58590121521b95' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/paidout.tpl',
      1 => 1643004898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207724573764a80bf93e8548_56384660',
  'variables' => 
  array (
    'paginator' => 0,
    'month' => 0,
    'frm' => 0,
    'year' => 0,
    'stats' => 0,
    's' => 0,
    'currency_sign' => 0,
    'total_withdraw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a80bf94082c2_29123953',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a80bf94082c2_29123953')) {
function content_64a80bf94082c2_29123953 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '207724573764a80bf93e8548_56384660';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php echo '<script'; ?>
 language=javascript>
function go(p)
{
  document.opts.page.value=p;
  document.opts.submit();
}
<?php echo '</script'; ?>
>


<form method=post name=opts>
<input type=hidden name=a value=paidout>
<input type=hidden name=page value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['paginator']->value['cur']);?>
">
<table cellspacing=0 cellpadding=0 border=0 width=100<?php echo '%>';?>
<tr>
 <td>
	<h3>Paid Out:</h3>
 </td>
 <td align=right>
<select name=month class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['name'] = 'month';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['month']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['month']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month']['index']]);?>

<?php endfor; endif; ?>
</select> &nbsp;
<select name=year class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['name'] = 'year';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year']['index']]);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year']['index']] == $_smarty_tpl->tpl_vars['frm']->value['year']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year']['index']]);?>

<?php endfor; endif; ?>
</select>
 </td>
 <td width=1% nowrap>
	&nbsp; <input type=submit value="Go" class=sbmt>
 </td>
</tr></table>
</form>
<br>

<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <td class=inheader>Username</td>
 <td class=inheader width=200>Date</td>
 <td class=inheader width=170>Amount</td>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['stats']->value;
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
 <td><b><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
</b></td>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['s']->value['dd']);?>
</b></td>
 <td align=right><b><?php echo smarty_modifier_myescape(amount_smarty_fiat($_smarty_tpl->tpl_vars['s']->value['actual_amount'],$_smarty_tpl->tpl_vars['s']->value['ec']));?>
</b></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
if (!$_smarty_tpl->tpl_vars['s']->_loop) {
?>
<tr>
 <td colspan=3 align=center>No transactions found</td>
</tr>
<?php
}
?>

<?php if ($_smarty_tpl->tpl_vars['stats']->value) {?>
<tr>
 <td colspan=2><b>TOTAL</b></td>
 <td align=right><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total_withdraw']->value);?>
</b></td>
</tr>
<?php }?>
</table>

<?php echo paginator(array('col'=>$_smarty_tpl->tpl_vars['paginator']->value['col'],'cur'=>$_smarty_tpl->tpl_vars['paginator']->value['cur'],'url'=>"javascript:go('%s')"),$_smarty_tpl);?>




<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>