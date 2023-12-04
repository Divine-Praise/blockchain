<?php /* Smarty version 3.1.27, created on 2023-07-12 10:52:28
         compiled from "my:news" */ ?>
<?php
/*%%SmartyHeaderCode:60042642264ae85ecd71d30_34117785%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973d291f6f5d7d374482e8daf7a3ac0088b3fdae' => 
    array (
      0 => 'my:news',
      1 => 1689159148,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '60042642264ae85ecd71d30_34117785',
  'variables' => 
  array (
    'permits' => 0,
    'setts' => 0,
    'news' => 0,
    'n' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64ae85ecd8d0f1_23521310',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64ae85ecd8d0f1_23521310')) {
function content_64ae85ecd8d0f1_23521310 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '60042642264ae85ecd71d30_34117785';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  <?php if ($_smarty_tpl->tpl_vars['permits']->value['settings']) {?> <form name=filters method=get> <input type=hidden name=a value=news> <input type=hidden name=action value="settings"> <table class="form"> <tr> <th>News Box</th> <td> <select name="show_news_box" class="inpts"> <option value="0" <?php if ($_smarty_tpl->tpl_vars['setts']->value['show_news_box'] == 0) {?>selected<?php }?>>Hide</option> <option value="1" <?php if ($_smarty_tpl->tpl_vars['setts']->value['show_news_box'] == 1) {?>selected<?php }?>>Show</option> </select> </td> <td rowspan=2> <input type="submit" value="Save" class="sbmt"> </td> </tr> <tr> <th>News Box Items Number</th> <td><input type="text" name="last_news_count" value="<?php echo intval($_smarty_tpl->tpl_vars['setts']->value['last_news_count']);?>
" class="inpts"></td> </tr> </table> </form> <?php }?>  <?php echo '<script'; ?>
 language=javascript> function go(p) { document.filters.p.value = p; document.filters.submit(); } <?php echo '</script'; ?>
>  <h3>News: <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <a href="?a=news&action=edit" class="sbmt btn-sm btn-success">Add News</a> <?php }?> </h3> <?php if ($_smarty_tpl->tpl_vars['news']->value) {?> <form name=filters method=get> <input type=hidden name=a value=news> <input type=hidden name=p> <table class=list> <tr> <th>Title</th> <th>Date</th> <th>Action</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$foreach_n_Sav = $_smarty_tpl->tpl_vars['n'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><b><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</b><br> <td><?php echo $_smarty_tpl->tpl_vars['n']->value['d'];?>
</td> <td> <?php if ($_smarty_tpl->tpl_vars['permits']->value['manage']) {?> <a href="?a=news&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['pages']->value['cur'];?>
" class="sbmt btn-sm btn-success">edit</a> <a href="?a=news&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
&p=<?php echo $_smarty_tpl->tpl_vars['pages']->value['cur'];?>
&#csrf#" onclick="return confirm('Do you really want to delete news?')" class="sbmt btn-sm btn-danger">delete</a> <?php }?> </td> </tr> <tr> <td colspan=3 style="padding:0 0 20px 0;"><div class="alert alert-warning" style="margin:0;border-top:0;"><?php if ($_smarty_tpl->tpl_vars['n']->value['image_url']) {?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['image_url'], ENT_QUOTES, 'UTF-8', true);?>
" width=50 height=50 align=left> <?php }
echo $_smarty_tpl->tpl_vars['n']->value['small_text'];?>
</div></td> </tr> <?php
$_smarty_tpl->tpl_vars['n'] = $foreach_n_Sav;
}
?> </table> </form> <center> <?php echo paginator(array('col'=>$_smarty_tpl->tpl_vars['pages']->value['col'],'cur'=>$_smarty_tpl->tpl_vars['pages']->value['cur'],'url'=>"javascript:go(%s)"),$_smarty_tpl);?>
 </center> <br> <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Here you can manage your program news.<br> Your newly added news will appear on your site index page (if you have enabled &quote;Show news box in InfoBox Settings section&quote;)<br> Small text will appear on Index page. If you omit Small Text then the system will show first 100-120 characters of your Full Text.<br> If you omit Full Text than the system will show Small Text on all the news page. <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>