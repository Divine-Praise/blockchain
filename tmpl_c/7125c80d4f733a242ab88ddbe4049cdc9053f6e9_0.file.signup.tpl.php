<?php /* Smarty version 3.1.27, created on 2023-10-10 03:15:00
         compiled from "/home/assetpin/public_html/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19488144576524c1b41145d4_57405845%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7125c80d4f733a242ab88ddbe4049cdc9053f6e9' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/signup.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19488144576524c1b41145d4_57405845',
  'variables' => 
  array (
    'settings' => 0,
    'deny_registration' => 0,
    'referer' => 0,
    'errors' => 0,
    'account_errors' => 0,
    'err' => 0,
    'frm' => 0,
    'countries' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6524c1b4225092_59405637',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6524c1b4225092_59405637')) {
function content_6524c1b4225092_59405637 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';
if (!is_callable('smarty_modifier_escape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.escape.php';

$_smarty_tpl->properties['nocache_hash'] = '19488144576524c1b41145d4_57405845';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="styles/img/Asset1@4x-8.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles/css/animate.css">
    
    <?php echo '<script'; ?>
>
        document.write("<link rel='stylesheet' type='text/css' href='styles/css/main.css?v=" + Date.now() + "'>")

    <?php echo '</script'; ?>
>
    

</head>

<body data-gr-c-s-loaded="true">
    <main>
        <section id="content-form" class="wibble all-center">
            <div class="container">
                <div class="row all-center all-center flex-column">
                    
                    <a href="/" class="mb-1">
                                            <img src="styles/img/logo.png" alt="Template Rex" width="180px" >

                    </a>
                    
                    <div class="col-11 col-md-8 col-lg-5 form-box mb-3">
                        <div class="inside d-flex flex-column">
                            <h2 class="text-center center-bottom-line">Sign up for <br>an account</h2>




                            <?php if ($_smarty_tpl->tpl_vars['deny_registration']->value) {?>
 We are closed for new registrations now.
<?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program'] && $_smarty_tpl->tpl_vars['settings']->value['force_upline'] && !$_smarty_tpl->tpl_vars['referer']->value && !$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>
 You  do not have a upline. Our system require a upline for each user.
<?php } else { ?>
 

 <?php echo '<script'; ?>
 language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location'] == 1) {?>
 
  if (document.regform.address.value == '') {
    alert("Please enter your address!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '') {
    alert("Please enter your city!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '') {
    alert("Please enter your state!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.regform.country.focus();
    return false;
  }
 
 <?php }?>
 
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
 
  if (document.regform.transaction_code.value == '') {
    alert("Please enter your transaction code!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.regform.transaction_code2.focus();
    return false;
  }
 
 <?php }?>
 
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 <?php echo '</script'; ?>
>
 
 
 <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
  <ul style="color:red">
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'full_name') {?>
    <li>Please enter your full name!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'address') {?>
    <li>Please enter your address!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'city') {?>
    <li>Please enter your city!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'state') {?>
    <li>Please enter your state!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'zip') {?>
    <li>Please enter your zip!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'country') {?>
    <li>Please choose your country!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username') {?>
    <li>Please enter valid username! It should contains English letters and digits only.
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username_exists') {?>
    <li>Sorry, such user already exists! Please try another username. 
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email_exists') {?>
    <li>Sorry, such email already exists! Please try another email. 
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?> 
    <li>Please enter a password!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
    <li>Please check your password!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
    <li>The password you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?> 
    <li>Please enter the Transaction Code!
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?> 
    <li>Please check your Transaction Code!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
    <li>The Transaction Code you provided is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 characters!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?> 
    <li>The Transaction Code should differ from the Password!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?> 
    <li>Please enter your e-mail!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email2') {?> 
    <li>Please check your email!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'agree') {?>
    <li>You have to agree with the Terms and Conditions!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
    <li>Enter the verification code as it is shown in the corresponding box.
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'no_upline') {?>
    <li>The system requires an upline to register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>You have to be agreed to random one or found a referral link in the net.<?php }?>
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'ip_exists_in_database') {?>
    <li>Your IP already exists in our database. Sorry, but registration impossible.
   <?php }?>

   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_account_format') {?>
    <?php
$_from = $_smarty_tpl->tpl_vars['account_errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['err'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['err']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
$foreach_err_Sav = $_smarty_tpl->tpl_vars['err'];
?>
    <li><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>

    <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
   <?php }?>

   <br> 
  <?php endfor; endif; ?>
  </ul>
 <?php }?> 


                            <form method=post onsubmit="return checkform()" name="regform">
                                <input type=hidden name=a value="signup">
                                <input type=hidden name=action value="signup">
                                <input type="hidden" name="agree" value="1" checked="">
                                <input type="hidden" name="email1" id="email1" value="">
                                <input type="hidden" name="password2" id="password2" value="">
                                <input type="hidden" name="rand_ref" value="1" checked="">



                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=username value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['username'], " quotes"));?>
" id="username" placeholder="Username" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>


                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=fullname value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['fullname'], " quotes"));?>
" id="fullname" placeholder="Enter Full Name" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-id-badge float2"></i>
                                </div>



                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']) {?>




                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=address value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['address'], " quotes"));?>
" placeholder="Your Address" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>



                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=city value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['city'], " quotes"));?>
" placeholder="Your City" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>


                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=state value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['state'], " quotes"));?>
" placeholder="Your State" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>

                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=zip value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['zip'], " quotes"));?>
" placeholder="Your Zip" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>


                                <div class="table-row d-flex align-items-center">
                                    <select name='country'>
                                        <option value=''>Please choose Your Country</option>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['countries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name'] == $_smarty_tpl->tpl_vars['frm']->value['country']) {?>selected<?php }?>><?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']));?>
 </option> <?php endfor; endif; ?> </select> <i class="fas fa-user-lock float2"></i>
                                </div>


                                <?php }?>


                                <div class="table-row d-flex align-items-center">
                                    <input type=password name=password value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['password'], " quotes"));?>
" id="password" minlength="6" placeholder="Password" onfocus="repass();" oninput="repass();" onblur="repass();" class="showhide" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-unlock-alt float2"></i>
                                </div>


                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>

                                <div class="table-row d-flex align-items-center">
                                    <input type=password name=transaction_code value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['transaction_code'], " quotes"));?>
" placeholder="Define Transaction Code" onfocus="repass();" oninput="repass();" onblur="repass();" class="showhide" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-unlock-alt float2"></i>
                                </div>

                                <div class="table-row d-flex align-items-center">
                                    <input type=password name=transaction_code2 value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['transaction_code2'], " quotes"));?>
" placeholder="Retype Transaction Code" onfocus="repass();" oninput="repass();" onblur="repass();" class="showhide" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-unlock-alt float2"></i>
                                </div>

                                <?php }?>


                          <?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>

<div class="table-row d-flex align-items-center">
<input type="text" name=pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
] value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));?>
" data-validate="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
" data-validate-<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate'][$_smarty_tpl->tpl_vars['ps']->value['validate']['func']]);?>
" data-validate-notice="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['validate']['notification'], ENT_QUOTES, 'UTF-8', true));?>
"  placeholder="Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 Account">	<i class="fas fa-wallet float2"></i>
</div>

<?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>



                                <?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>

                                <div class="table-row d-flex align-items-center">
                                    <input type=text name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));?>
" placeholder="Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
" onfocus="remail();" oninput="remail();" onblur="remail();" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-wallet float2"></i>
                                </div>

                                <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
                                <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>




                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=email value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['email'], " quotes"));?>
" id="email" placeholder="Email" onfocus="remail();" oninput="remail();" onblur="remail();" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-envelope float2"></i>
                                </div>



                                <div class="table-row d-flex align-items-center">
                                    <select name="sq">
                                        <option>Please choose Security Question</option>
                                        <option value="Who was your childhood hero?">Who was your childhood hero?</option>
                                        <option value="What is your mother's middle name?">What is your mother's middle name?</option>
                                        <option value="Where did you vacation last year?">Where did you vacation last year?</option>
                                        <option value="What is your oldest sibling’s birthday month and year? (e.g., January 1900)">What is your oldest sibling’s birthday month and year? (e.g., January 1900)</option>
                                        <option value="What school did you attend for sixth grade?">What school did you attend for sixth grade?</option>
                                        <option value="What is the name of the company of your first job?">What is the name of the company of your first job?</option>
                                        <option value="What time of the day were you born?">What time of the day were you born?</option>
                                        <option value="What month and day is your anniversary? (e.g., January 2)">What month and day is your anniversary? (e.g., January 2)</option>
                                        <option value="What is your preferred musical genre? ">What is your preferred musical genre?</option>
                                    </select> <i class="fas fa-user-lock float2"></i>
                                </div>


                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=sa value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['frm']->value['sa'], " quotes"));?>
" placeholder="Security Answer" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-key float2"></i>
                                </div>





                                <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['signup']) {?>
                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=validation_number placeholder="Enter your Code" autocomplete="off" autocorrect="off" autocapitalize="off" required=""><i id="icon-yeee" class="far fa-eye-slash float" style="color: #454456;"> <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></i>
                                    <i class="fas fa-unlock-alt float2"></i>
                                </div>
                                <?php }?>


                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['referer']->value) {?>
                                <div class="table-row d-flex align-items-center flex-column">
                                    <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">Your Upline: (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referer']->value['username']);?>
)</a>
                                    </p>
                                </div>
                                <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['force_upline']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']) {?>

                                <div class="table-row d-flex align-items-center flex-column">
                                    <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random one or find a referral link on the net.</a>
                                    </p>
                                </div>


                                <?php } else { ?>

                                <div class="table-row d-flex align-items-center flex-column">
                                    <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">You do not have an upline. Our system requires an upline for each user.</a>
                                    </p>
                                </div>
                                <?php }?>
                                <?php }?>
                                <?php }?>
                                <?php }?>



                                <div class="table-row d-flex align-items-center">
                                    <input type="submit" value="Sign Up" class="sbmt">
                                </div>

                                <div class="table-row d-flex align-items-center flex-column">
                                    <p class="mb-0" style="color:#AEBAC7;">Already have an account? <a href="?a=login">Log in</a>
                                    </p>
                                    <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">By clicking Sign Up, you agree to our <a target="blank" href="?a=rules" style="font-size:10px;padding:0 5px;">Terms and Conditions</a>and that you have read our <a target="blank" href="?a=cust&amp;page=privacy" style="font-size:10px;padding:0 5px;">Privacy Statement.</a>
                                    </p>
                                </div>

                            </form>
                            <?php }?>



                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php echo '<script'; ?>
 src="styles/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/js/tilt.jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/js/clipboard.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
                $("#header-main-menu").addClass("darkHeader");
            } else {
                $("#header-main-menu").removeClass("darkHeader");
            }
        });

    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        function remail() {
            var b = document.getElementById("email").value;
            document.getElementById("email1").value = b
        }

        function repass() {
            var c = document.getElementById("password").value;
            document.getElementById("password2").value = c
        }
        var inputPass2 = document.getElementById('password'),
            icon = document.getElementById('icon-yeee');
        icon.onclick = function() {
            if (inputPass2.className == 'active') {
                inputPass2.setAttribute('type', 'text');
                icon.className = 'fas fa-eye';
                inputPass2.className = '';
            } else {
                inputPass2.setAttribute('type', 'password');
                icon.className = 'far fa-eye-slash';
                inputPass2.className = 'active';
            }
        }

    <?php echo '</script'; ?>
>
    <iframe data-product="web_widget" title="No content" tabindex="-1" aria-hidden="true" src="about:blank" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
    
</body>

</html>
<?php }
}
?>