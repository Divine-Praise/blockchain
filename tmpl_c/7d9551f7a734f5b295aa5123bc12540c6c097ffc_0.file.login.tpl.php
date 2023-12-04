<?php /* Smarty version 3.1.27, created on 2023-10-10 22:11:47
         compiled from "/home/assetpin/public_html/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6277360386525cc2338e5f1_12260669%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d9551f7a734f5b295aa5123bc12540c6c097ffc' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/login.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6277360386525cc2338e5f1_12260669',
  'variables' => 
  array (
    'settings' => 0,
    'frm' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6525cc233b7eb7_35413935',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6525cc233b7eb7_35413935')) {
function content_6525cc233b7eb7_35413935 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '6277360386525cc2338e5f1_12260669';
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
                            <h2 class="text-center center-bottom-line">Log in to <br>your account</h2>




                            
                            <?php echo '<script'; ?>
 language=javascript>
                                function checkform() {
                                    if (document.mainform.username.value == '') {
                                        alert("Please type your username!");
                                        document.mainform.username.focus();
                                        return false;
                                    }
                                    if (document.mainform.password.value == '') {
                                        alert("Please type your password!");
                                        document.mainform.password.focus();
                                        return false;
                                    }
                                    return true;
                                }

                            <?php echo '</script'; ?>
>
                            

                            <?php if ($_smarty_tpl->tpl_vars['frm']->value['say'] == 'invalid_login') {?>
                            <div class="status-box errors p-3" style="background:#FFEBCB;">
                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                    Your login or password or turing image code is wrong. Please check this information.
                                </p>
                            </div>

                            <?php }?>

                            <br>
                            <form method=post name=mainform onsubmit="return checkform()">
                                <input type=hidden name=a value='do_login'>
                                <input type=hidden name=follow value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow']);?>
'>
                                <input type=hidden name=follow_id value='<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['frm']->value['follow_id']);?>
'>


                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=username value='<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true));?>
' autofocus="autofocus" placeholder="Enter your Username" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>

                                <div class="table-row d-flex align-items-center">
                                    <input type=password name=password value='' id="password" placeholder="Enter your Password" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i id="icon-yeee" class="far fa-eye-slash float"></i>
                                    <i class="fas fa-unlock-alt float2"></i>
                                </div>



                                <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['login']) {?>
                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=validation_number placeholder="Enter your Code" autocomplete="off" autocorrect="off" autocapitalize="off" required=""><i id="icon-yeee" class="far fa-eye-slash float" style="color: #454456;"> <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></i>
                                    <i class="fas fa-unlock-alt float2"></i>
                                </div>
                                <?php }?>




                                <div class="table-row d-flex align-items-center">
                                    <input type="submit" value="Log in" class="sbmt">
                                </div>
                                <div class="table-row d-flex all-center flex-column">
                                    <p class="mb-0"> <a href="<?php echo smarty_modifier_myescape(encurl(" ?a=forgot_password"));?>
">Forgot password?</a>
                                    </p>
                                    <p class="mb-0">Need a <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 account? <a href="?a=signup">Create an account</a>
                                    </p>
                                </div>

                            </form>


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
        var inputPass2 = document.getElementById('password'),
            icon = document.getElementById('icon-yeee');
        icon.onclick = function() {
            if (inputPass2.className == 'active') {
                inputPass2.setAttribute('type', 'text');
                icon.className = 'fas fa-eye float';
                inputPass2.className = '';
            } else {
                inputPass2.setAttribute('type', 'password');
                icon.className = 'far fa-eye-slash float';
                inputPass2.className = 'active';
            }
        }

    <?php echo '</script'; ?>
>
    
</body>

</html>
<?php }
}
?>