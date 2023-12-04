<?php /* Smarty version 3.1.27, created on 2023-10-04 09:29:45
         compiled from "/home/assetpin/public_html/tmpl/security.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1987276478651d3089ea7df2_59976278%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbe161847c23cc41adce697db0429c2333eed5fc' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/security.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987276478651d3089ea7df2_59976278',
  'variables' => 
  array (
    'settings' => 0,
    'tfa_enabled' => 0,
    'errors' => 0,
    'tfa_settings' => 0,
    'tfa_secret' => 0,
    'tfa_secret_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651d3089ecf802_52879412',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651d3089ecf802_52879412')) {
function content_651d3089ecf802_52879412 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1987276478651d3089ea7df2_59976278';
echo $_smarty_tpl->getSubTemplate ("logomain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<style>
    .custom-control-input:checked~.custom-control-label::before {
        color: #fff;
        border-color: #FFC059;
        background-color: #FFC059;
    }

</style>
<main>
    <section id="dashboard" class="btc-background">
        <div class="container full-height " style="padding-bottom: 190px;>
                <div class=" row mt-xl-5">
            <div class="col-xl-12">
                <div class="wbox">
                    <div class="row m-0">
                        <div class="col-12 p-0 depboxHome d-flex flex-column">
                            <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-security"></i>
                                <h6 class="m-0 ml-3">Two-Factor Authentication</h6>
                            </div>


                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_tfa']) {?>

                            <?php if ($_smarty_tpl->tpl_vars['tfa_enabled']->value) {?>
                            <div class="p-4 d-flex title" style="padding-top: 0px!important;">
                                <div class="row flex-fill">

                                    <div class="p-3 d-flex title" style="border-bottom: initial;">

                                        <div class="row flex-fill">
                                            <div class="col-md-12">
                                                <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
                                                <div class="status-box errors p-3" style="background:#FFEBCB;">
                                                    <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                        Invalid code</p>
                                                </div><br>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_secret']) {?>
                                                <div class="status-box errors p-3" style="background:#FFEBCB;">
                                                    <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                        Invalid Secret.</p>
                                                </div><br>
                                                <?php }?>

                                                <div class="nav nav-tabs tfa_setting_nav d-flex" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link d-flex all-center active" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">2FA Settings</a>
                                                    <a class="nav-item nav-link d-flex all-center" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Remove 2FA</a>
                                                </div>



                                                <div class="tab-content mt-3" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">

                                                        <form method=post name=mainform id="save2FA" style="flex:1;">
                                                            <input type=hidden name=a value="security">
                                                            <input type=hidden name=action value="tfa_save">
                                                            <input type=hidden name=time id="tfa_time">
                                                            <?php echo '<script'; ?>
 language="javascript">
                                                                document.getElementById('tfa_time').value = (new Date()).getTime();

                                                            <?php echo '</script'; ?>
>
                                                            <div class="row flex-fill">
                                                                <div class="col-md-12 pb-4 mb-2">
                                                                    <div class="status-box success p-3 mb-4" style="background:#94E5BC;">
                                                                        <p><i class="fas fa-check-circle"></i>You have <b>enable</b> Two-Factor authentication. Now your account is secured!</p>
                                                                    </div>
                                                                    <p class="m-0">
                                                                        - Two factor authentication (Authy security) help you to prevent hacker by having another security layer.
                                                                    </p>
                                                                </div>

                                                                <div class="col-md-4 pb-1 pt-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="tfa_on_login" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['login']) {?>checked<?php }?> class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1">Enable on Login</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4 pb-1 pt-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="tfa_on_edit_account" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['edit_account']) {?>checked<?php }?> class="custom-control-input" id="customCheck2">
                                                                        <label class="custom-control-label" for="customCheck2">Enable on Edit Account</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4 pb-1 pt-1">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="tfa_on_withdraw" value=1 <?php if ($_smarty_tpl->tpl_vars['tfa_settings']->value['withdraw']) {?>checked<?php }?> class="custom-control-input" id="customCheck3">
                                                                        <label class="custom-control-label" for="customCheck3">Enable on Withdraw</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 pt-4 mt-2">
                                                                    <p class="m-1" style="font-size:11px;">
                                                                        Enter the Google Authenticator code to confirm setting
                                                                    </p>
                                                                    <div class="d-flex align-items-stretch flex-wrap TFA">
                                                                        <p class="m-0 d-flex align-items-center">
                                                                            <i class="icon icon-security pr-2" style="color:#F8AC4A;background:none;box-shadow:none;height:auto;width:auto;"></i>
                                                                            <span style="font-size:12px;">2FA Code</span>
                                                                            <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                                        </p>
                                                                        <input type="text" name="code" style="font-size:14px;" value="">
                                                                        <a nohref="" onclick="document.getElementById('save2FA').submit();" class="d-flex ml-3 align-items-center deposit-small-btn">
                                                                            <span class="d-flex all-center">Save</span>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">

                                                        <form method=post name=mainform id="save2FA2" class="d-flex flex-column" style="flex:1;">
                                                            <input type=hidden name=a value="security">
                                                            <input type=hidden name=action value="tfa_save">
                                                            <input type=hidden name=time id="tfa_time2">
                                                            <?php echo '<script'; ?>
 language="javascript">
                                                                document.getElementById('tfa_time2').value = (new Date()).getTime();

                                                            <?php echo '</script'; ?>
>
                                                            <div class="row flex-fill">
                                                                <div class="col-md-12 pb-4 mb-2">
                                                                    <p class="pb-4 mb-2">
                                                                        - For security reason for your account, you need to confirm your request to disable two-factor authentication .
                                                                    </p>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" name="tfa_disable" value=1 id="tfa_disable" class="custom-control-input">
                                                                        <label class="custom-control-label red" for="tfa_disable">I want to remove my Two Factor Authentication</label>
                                                                    </div>
                                                                </div>


                                                                <div class="col-12">
                                                                    <p class="m-1" style="font-size:11px;">
                                                                        Enter the Google Authenticator code to confirm setting
                                                                    </p>
                                                                    <div class="d-flex align-items-stretch flex-wrap TFA">
                                                                        <p class="m-0 d-flex align-items-center">
                                                                            <i class="icon icon-security pr-2" style="color:#F8AC4A;background:none;box-shadow:none;height:auto;width:auto;"></i>
                                                                            <span style="font-size:12px;">2FA Code</span>
                                                                            <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                                        </p>
                                                                        <input type="text" name="code" style="font-size:14px;" value="">
                                                                        <a nohref="" onclick="document.getElementById('save2FA2').submit();" class="d-flex ml-3 align-items-center deposit-small-btn">
                                                                            <span class="d-flex all-center">Save</span>
                                                                        </a>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php } else { ?>

                            <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_code']) {?>
                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;margin-left: 25px;margin-right: 25px;">
                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                    Invalid code</p>
                            </div><br>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_tfa_secret']) {?>
                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;margin-left: 25px;margin-right: 25px;">
                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                    Invalid Secret.</p>
                            </div><br>
                            <?php }?>

                            <form method=post name=mainform id="save2FA3">
                                <input type=hidden name=a value="security">
                                <input type=hidden name=action value="tfa_save">
                                <input type=hidden name=time id="tfa_time3">
                                <?php echo '<script'; ?>
 language="javascript">
                                    document.getElementById('tfa_time3').value = (new Date()).getTime();

                                <?php echo '</script'; ?>
>
                                <div class="p-4 d-flex title">
                                    <div class="row flex-fill">
                                        <div class="col-md-6">
                                            <h6>1. Install <a href="http://m.google.com/authenticator" targe="_blank" style="color:#353448;font-weight:500;">Google Authenticator</a> on your mobile device.</h6>
                                            <p class="m-0">Google Authenticator generates 2-Step Verification codes on your phone. 2-Step Verification provides stronger security for your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 account by requiring a second step of verification when you sign in, edit account or collect your earnings.</p>
                                        </div>
                                        <div class="col-md-6 pt-2 pt-md-0 d-flex align-items-start">
                                            <div class="d-flex flex-column">
                                                <h6>Download Google Authenticator</h6>
                                                <div class="d-flex align-items-center mt-2">
                                                    <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank" class="mr-3">
                                                        <img src="styles/img/android-download.png" style="height:40px;">
                                                    </a>
                                                    <a href="https://apps.apple.com/app/google-authenticator/id388497605" target="_blank">
                                                        <img src="styles/img/apple-download.png" style="height:40px;">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 d-flex title">
                                    <div class="row flex-fill">
                                        <div class="col-md-6">
                                            <h6>2. Your Secret Code is : </h6>
                                            <p>Open the Google Authenticator app on your phone and follow the on-screen instructions.</p>
                                            <p class="d-flex"><b style="flex:1;background:#F3F4F6;width:100%;border-radius:5px;padding:.5rem;" class="d-flex all-center"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
</b>
                                            </p>
                                            <input type=hidden name="tfa_secret" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret']->value);?>
">
                                        </div>
                                        <div class="col-md-6 pt-2 pt-md-0 d-flex align-items-start">
                                            <div class="d-flex flex-column">
                                                <h6>Screen QR code</h6>
                                                <p>Open the Google Authenticator app on your phone and follow the on-screen instructions.</p>
                                                <div class="d-flex align-items-center mt-2">
                                                    <img src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tfa_secret_url']->value);?>
">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 d-flex title">
                                    <div class="row flex-fill">
                                        <div class="col-12">
                                            <h6>3. Enter the Google Authenticator code</h6>
                                            <p>Please enter two factor token from Google Authenticator to verify correct setup</p>
                                            <div class="d-flex align-items-stretch pt-2 pb-2 flex-wrap TFA">
                                                <p class="m-0 d-flex align-items-center"> <i class="icon icon-security pr-2" style="color:#F8AC4A;background:none;box-shadow:none;height:auto;width:auto;"></i>
                                                    <span style="font-size:12px;">2FA Code</span>
                                                    <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                </p>
                                                <input type="text" name="code" style="font-size:14px;">
                                                <a nohref="" onclick="document.getElementById('save2FA3').submit();" class="d-flex ml-3 align-items-center deposit-small-btn"> <span class="d-flex all-center">Save</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php }?>
                            <?php }?>



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