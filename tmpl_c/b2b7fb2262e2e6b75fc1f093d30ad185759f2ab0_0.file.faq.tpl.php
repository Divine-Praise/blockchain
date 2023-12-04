<?php /* Smarty version 3.1.27, created on 2023-07-07 12:57:34
         compiled from "/home/assetpin/public_html/tmpl/faq.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:56966422764a80bbe247e84_87251316%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2b7fb2262e2e6b75fc1f093d30ad185759f2ab0' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/faq.tpl',
      1 => 1643004898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56966422764a80bbe247e84_87251316',
  'variables' => 
  array (
    'site_name' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a80bbe260b77_38500069',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a80bbe260b77_38500069')) {
function content_64a80bbe260b77_38500069 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '56966422764a80bbe247e84_87251316';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta_title'=>"F.A.Q."), 0);
?>

<h3>FAQ.</h3><br>
<p align=justify> <b>How can I invest with <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 ?</b><br>
  To make a investment you must first become a member of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 hyip. Once 
  you are signed up, you can make your first deposit. All deposits must be made 
  through the Members Area. You can login using the member username and password 
  you receive when signup. <br>
  <br>
  <b>I wish to invest with <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 but I don't have an any ecurrency account. What 
  should I do?</b><br>
  You can open a free PM account here: <a href="http://www.perfectmoney.is/">www.perfectmoney.is</a><br>
  <br>
  <br>
  <b>How do I open my <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 HYIP Account?</b><br>
  It's quite easy and convenient. Follow this <a href="<?php echo smarty_modifier_myescape(encurl("?a=signup"));?>
">link</a>, fill 
  in the registration form and then press "Register". <br>
  <br>
  <b>Which e-currencies do you accept?</b><br>
  We accept
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_evowallet']) {?>EvoWallet, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_ecumoney']) {?>Ecumoney, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_solidtrustpay']) {?>SolidTrustPay, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_strictpay']) {?>StrictPay, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_webmoney']) {?>Webmoney, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_perfectmoney']) {?>PerfectMoney, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_altergold']) {?>AlterGold, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_alertpay']) {?>Alertpay, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_pecunix']) {?>Pecunix, <?php }?>
   
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_evocash']) {?>Evocash, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_stormpay']) {?>StormPay, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_paypal']) {?>PayPal, <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_goldmoney']) {?>GoldMoney, <?php }?>
   e-currencies. <br>
  <br>
  <b>How can I withdraw funds?</b><br>
  Login to your account using your username and password and check the Withdraw 
  section. <br>
  <br>
  <b>How long does it take for my deposit to be added to my account?</b><br>
  Your account will be updated as fast, as you deposit. <br>
  <br>
  <b>How can I change my e-mail address or password?</b><br>
  Log into your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 account and click on the "Account Information". You 
  can change your e-mail address and password there. <br>
  <br>
  <b>What if I can't log into my account because I forgot my password?</b><br>
  Click <a href="<?php echo smarty_modifier_myescape(encurl("?a=forgot_password"));?>
">forgot password</a> link, type your username 
  or e-mail and you'll receive your account information. <br>
  <br>
  <b>Does a daily profit paid directly to my currency account?</b><br>
  No, profits are gathered on your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 account and you can withdraw them 
  anytime. <br>
  <br>
  <b>How do you calculate the interest on my account?</b><br>
  Depending on each plan. Interest on your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 HYIP account is acquired 
  Daily, Weekly, Bi-Weekly, Monthly and Yearly and credited to your available 
  balance at the end of each day. <br>
  <br>
  <b>Can I do a direct deposit from my account balance?</b><br>
  Yes! To make a deposit from your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 HYIP account balance. Simply login 
  into your members account and click on Make Deposit ans select the Deposit from 
  Account Balance Radio button. <br>
  <br>
  <b>Can I make an additional deposit to <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 HYIP account once it has 
  been opened?</b><br>
  Yes, you can but all transactions are handled separately. <br>
  <br>
  <b>After I make a withdrawal request, when will the funds be available on my 
  ecurrency account?</b><br>
  Funds are usually available within 12 business hours. <br>
  <br>
  <b>How can I change my password?</b><br>
  You can change your password directly from your members area by editing it in 
  your personal profile. <br>
  <br>
  <b>Can I lose money?</b><br>
  There is a risk involved with investing in all high yield investment programs. However, 
  there are a few simple ways that can help you to reduce the risk of losing more than 
  you can afford to. First, align your investments with your financial goals, 
  in other words, keep the money you may need for the short-term out of more aggressive 
  investments, reserving those investment funds for the money you intend to raise 
  over the long-term. It's very important for you to know that we are real traders 
  and that we invest members' funds on major investments. <br>
  <br>
  <b>How can I check my account balances?</b><br>
  You can access the account information 24 hours, seven days a week over the Internet. 
  <br>
  <br>
  <b>May I open several accounts in your program?</b><br>
  No. If we find that one member has more than one account, the entire funds will 
  be frozen. <br>
  <br>
  <b>How can I make a spend?</b><br>
  To make a spend you must first become a member of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 HYIP. Once you 
  are signed up, you can make your first spend. All spends must be made through 
  the Member Area. You can login using the member username and password you received 
  when signup. <br>
  <br>
  <b>Who manages the funds?</b><br>
  These funds are managed by a team of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['site_name']->value);?>
 HYIP investment experts. <br>
  <br>
</p>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>