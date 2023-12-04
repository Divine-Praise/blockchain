<?php /* Smarty version 3.1.27, created on 2023-10-05 15:23:05
         compiled from "/home/assetpin/public_html/tmpl/edit_account.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:146505090651ed4d9964838_96325601%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd03e97ac0f956fe26d4db74b54df0447273807ac' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/edit_account.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146505090651ed4d9964838_96325601',
  'variables' => 
  array (
    'userinfo' => 0,
    'frm' => 0,
    'errors' => 0,
    'settings' => 0,
    'account_errors' => 0,
    'err' => 0,
    'pay_accounts' => 0,
    'ps' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
    'countries' => 0,
    'ti' => 0,
    'tfa_enabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651ed4d9a30753_24687203',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651ed4d9a30753_24687203')) {
function content_651ed4d9a30753_24687203 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';
if (!is_callable('smarty_modifier_escape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.escape.php';

$_smarty_tpl->properties['nocache_hash'] = '146505090651ed4d9964838_96325601';
echo $_smarty_tpl->getSubTemplate ("logomain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
	
	
	<style>
        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #FFC059;
            background-color: #FFC059;
        }

    </style>
    


    <?php echo '<script'; ?>
 language=javascript>
        function IsNumeric(sText) {
            var ValidChars = "0123456789.";
            var IsNumber = true;
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

        function checkform() {
            if (document.editform.fullname.value == '') {
                alert("Please type your full name!");
                document.editform.fullname.focus();
                return false;
            } {
                /literal} {
                if $settings.use_user_location == 1
            } {
                literal
            }
            if (document.editform.address.value == '') {
                alert("Please enter your address!");
                document.editform.address.focus();
                return false;
            }
            if (document.editform.city.value == '') {
                alert("Please enter your city!");
                document.editform.city.focus();
                return false;
            }
            if (document.editform.state.value == '') {
                alert("Please enter your state!");
                document.editform.state.focus();
                return false;
            }
            if (document.editform.zip.value == '') {
                alert("Please enter your ZIP!");
                document.editform.zip.focus();
                return false;
            }
            if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
                alert("Please choose your country!");
                document.editform.country.focus();
                return false;
            } {
                /literal} { /
                if
            } {
                literal
            }
            if (document.editform.password.value != document.editform.password2.value) {
                alert("Please check your password!");
                document.editform.fullname.focus();
                return false;
            } {
                /literal} {
                if $settings.use_transaction_code
            } {
                literal
            }
            if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
                alert("Please check your transaction code!");
                document.editform.transaction_code2.focus();
                return false;
            } {
                /literal} { /
                if
            } {
                literal
            } {
                /literal} {
                if $settings.usercanchangeemail == 1
            } {
                literal
            }
            if (document.editform.email.value == '') {
                alert("Please enter your e-mail address!");
                document.editform.email.focus();
                return false;
            } {
                /literal} { /
                if
            } {
                literal
            }

            for (i in document.editform.elements) {
                f = document.editform.elements[i];
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
                        alert('Invalid account format. Expected ' + notice);
                        f.focus();
                        return false;
                    }
                }
            }

            return true;
        }

    <?php echo '</script'; ?>
>
    
    <main>
        <section id="dashboard" class="btc-background">
            <div class="container full-height ">
                <div class="row mt-xl-5">
                    <div class="col-xl-12">
                        <div class="wbox column deposit-form">
                            <div class="row m-0">
                                <div class="col-xl-4 p-0 depboxHome border-right">
                                    <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-reviews"></i>
                                        <h6 class="m-0 ml-3">Profile</h6>
                                    </div>
                                    <div class="changeType ybg d-flex align-items-center p-4" style="position:relative;"> <i class="fas fa-id-badge ixc" style="font-size:32px;"></i>
                                        <div class="ml-3" style="flex:1;">
                                            <h6 class="m-0" style="color:#fff;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</h6>
                                            <p class="m-0" style="color:rgba(255,255,255,.6);"><?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['email']));?>
</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column p-4">
                                        <div class="d-flex align-items-center">
                                            <p class="m-0 d-flex align-items-center" style="flex:1;"><i class="fas fa-minus pr-2" style="font-size:7px;color:#FFC059;"></i> Full Name :</p><b style="font-size:13px;"><?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['name']));?>
</b>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="m-0 d-flex align-items-center" style="flex:1;"><i class="fas fa-minus pr-2" style="font-size:7px;color:#FFC059;"></i> Registration Date :</p><b style="font-size:13px;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['date_register']);?>
</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 p-0 depboxHome">
                                    <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-sidebar"></i>
                                        <h6 class="m-0 ml-3">Update your profile</h6>
                                    </div>



                                    <form action="" method=post onsubmit="return checkform()" name=editform id="saveAccount" style="flex:1;" class="d-flex flex-column">
                                        <input type=hidden name=a value=edit_account>
                                        <input type=hidden name=action value=edit_account>
                                        <input type=hidden name=say value="">


                                        <div class="d-flex flex-column p-4" style="border-bottom:1px solid #F3F3F4;background:#F9F9F9;box-shadow:inset -5px 0 0 #F8AC4A;">
                                            <div class="status-box errors p-3" style="background:#FFEBCB;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    <b>Please</b>, Please save your wallet address to receive withdrawals!</p>
                                            </div>




                                            <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'changed') {?>

                                            <div class="status-box errors p-3" style="background:#E8F1EB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-check-circle aniview d6"></i>
                                                    Your account data has been updated successfully.</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>

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
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your Full Name!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'address') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your address!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'city') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your city!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'state') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your state!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'zip') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your zip!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'country') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please choose your country!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'username') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your username!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter a password!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_confirm') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please check your password!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'password_too_small') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Password is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 chars!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter the Transaction Code! </p>
                                            </div>

                                            <?php }?>

                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_confirm') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please check your Transaction Code!</p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_too_small') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Transaction Code is too small, please enter at least <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length']);?>
 chars! </p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'wrong_current_password') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    You entered wrong current password </p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'transaction_code_vs_password') {?>

                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Transaction Code should be different then the Password! </p>
                                            </div>

                                            <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'invalid_transaction_code') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    You have provided invalid Current Transaction Code! </p>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'email') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your e-mail!</p>
                                            </div>


                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'turing_image') {?>
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Enter the verification code as it is shown in the corresponding box.</p>
                                            </div>




                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']] == 'tfa_code') {?>

                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Invalid 2FA code</p>
                                            </div>

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

                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['err']->value);?>
</p>
                                            </div>


                                            <?php
$_smarty_tpl->tpl_vars['err'] = $foreach_err_Sav;
}
?>
                                            <?php }?>

                                            <?php endfor; endif; ?>

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
                                            <div class="d-flex align-items-stretch p-0 TFA mt-4" style="border-radius:5px;background:#fff;">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-wallet pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
 Address</span>
                                                    <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                </p>

                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['account'] != '') {?>
												<input type=text style="font-size:14px;" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));?>
" disabled readonly >
												<?php } else { ?>
												<input type=text style="font-size:14px;" name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['id']);?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['ps']->value['id']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ps']->value['account'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
" data-validate="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
" data-validate-<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate']['func']);?>
="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['validate'][$_smarty_tpl->tpl_vars['ps']->value['validate']['func']]);?>
" data-validate-notice="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['validate']['notification'], ENT_QUOTES, 'UTF-8', true));?>
" required><?php }?>

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

                                            <div class="d-flex align-items-stretch p-0 TFA mt-4" style="border-radius:5px;background:#fff;">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-wallet pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['name']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value['name']);?>
</span>
                                                    <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                </p>

                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc'] == 0 && $_smarty_tpl->tpl_vars['ps']->value['value'] != '') {?>
												<input type=text style="font-size:14px;" value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));?>
" disabled readonly >
												<?php } else { ?><input style="font-size:12px;" type=text name="pay_account[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['p']->value['id']);?>
][<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
]" value="<?php echo smarty_modifier_myescape(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['frm']->value['pay_account'][$_smarty_tpl->tpl_vars['p']->value['id']][$_smarty_tpl->tpl_vars['ps']->value['name']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['ps']->value['value'] : $tmp), ENT_QUOTES, 'UTF-8', true));?>
"><?php }?>

                                            </div>
                                            <?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
                                            <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>



                                        </div>





                                        <div class="d-flex flex-column p-4">









                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Full Name</span>
                                                </p>
                                                <input type=text name=fullname value='<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['name']));?>
' style="font-size:14px;">
                                            </div>

                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']) {?>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your Address</span>
                                                </p>
                                                <input type=text name=address value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['address'], " quotes"));?>
" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your City</span>
                                                </p>
                                                <input type=text name=city value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['city'], " quotes"));?>
" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your State</span>
                                                </p>
                                                <input type=text name=state value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['state'], " quotes"));?>
" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your Zip</span>
                                                </p>
                                                <input type=text name=zip value="<?php echo smarty_modifier_myescape(smarty_modifier_escape($_smarty_tpl->tpl_vars['userinfo']->value['zip'], " quotes"));?>
" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your Country</span>
                                                </p>
                                                <select style="font-size:14px;padding: .25rem .75rem;
    border: 1px solid #ECEDF0;
    min-width: 50px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    flex: 1;" name='country'>
                                                    <option style="font-size:14px;" value=''>--SELECT--</option>
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
                                                    <option style="font-size:14px;" <?php if ($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name'] == $_smarty_tpl->tpl_vars['userinfo']->value['country']) {?>selected<?php }?>><?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']));?>
 </option> <?php endfor; endif; ?> </select> </div> <?php }?> <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                        <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-envelope pr-2" style="color:#F8AC4A;"></i>
                                                            <span style="font-size:12px;">E-mail</span>
                                                            <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                        </p>
                                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail'] == 1) {?><input type=text name=email value='<?php echo smarty_modifier_myescape(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['email']));?>
' style="font-size:14px;" required><?php } else { ?><input type=text name=email style="font-size:14px;" value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
' disabled="disabled" readonly="readonly"><?php }?>
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">New Password</span>
                                                </p>
                                                <input type=password name=password value="" style="font-size:14px;" minlength="6">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Retype Password</span>
                                                </p>
                                                <input type=password name=password2 value="" style="font-size:14px;" minlength="6">
                                            </div>


                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] != 1) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['transaction_code'] != '') {?>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Current Transaction Code</span>
                                                </p>
                                                <input type=password name=transaction_code_current value="" style="font-size:14px;">
                                            </div>


                                            <?php }?>
                                            <?php }?>
                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">New Transaction Code</span>
                                                </p>
                                                <input type=password name=transaction_code value="" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Retype Transaction Code</span>
                                                </p>
                                                <input type=password name=transaction_code2 value="" style="font-size:14px;">
                                            </div>
                                            <?php }?>

                                           




                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code_edit_account'] == 1) {?>
                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Current Transaction Code</span>
                                                </p>
                                                <input type=password name=transaction_code_current value="" style="font-size:14px;">
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['tfa_settings']['edit_account']) {?>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="icon icon-security pr-2" style="color:#F8AC4A;background:none;box-shadow:none;height:auto;width:auto;"></i>
                                                    <span style="font-size:12px;">2FA Code</span>
                                                    <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                </p>
                                                <input type="text" name="tfa_code" style="font-size:14px;">
                                                <input type="hidden" name="tfa_time" id="tfa_time">
                                            </div>

                                            
                                            <?php echo '<script'; ?>
 language=javascript>
                                                document.getElementById('tfa_time').value = (new Date()).getTime();

                                            <?php echo '</script'; ?>
>
                                            
                                            <?php }?>

                                            <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['edit_account']) {?>
                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;"> <img src="?a=show_validation_image&<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ti']->value['session']['name']);?>
=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ti']->value['session']['id']);?>
&rand=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ti']->value['session']['rand']);?>
"></span>
                                                </p>
                                                <input placeholder="Enter your Code" type=text name=validation_number style="font-size:14px;">
                                            </div>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['admin_auto_pay_earning'] == 1) {?>
                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <div class="custom-control custom-checkbox">
                                                    <input type=checkbox name=user_auto_pay_earning value=1 <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['user_auto_pay_earning'] == 1) {?>checked<?php }?> class="custom-control-input" id="customCheck2z">
                                                    <label class="custom-control-label" for="customCheck2z">Receive earnings directly to e-currency account</label>
                                                </div>
                                            </div>
                                            <?php }?>










                                        </div>

                                        
                                        <div class="d-flex align-items-center p-4" style="border-bottom:1px solid #F3F3F4;border-top:1px solid #F3F3F4;background:#F9F9F9;box-shadow:inset -5px 0 0 #F8AC4A;">
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['tfa_enabled']->value) {?>
                                            <div class="status-box errors p-0 mr-4" style="flex:1;background:none;">
                                                <p style="font-size:11px;"> <a href="?a=security" style="font-size:11px;color:#353448;"><b>Enable</b> Google 2fa for optimal security! </a>
                                                </p>
                                            </div>
                                            <?php } else { ?>
                                            <?php }?>
                                            
                                            <a nohref="" onclick="document.getElementById('saveAccount').submit();" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Save</span>
                                            </a>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
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
    

</body>

</html>
<?php }
}
?>