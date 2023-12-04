<?php /* Smarty version 3.1.27, created on 2023-10-10 13:20:06
         compiled from "/home/assetpin/public_html/tmpl/forgot_password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:214171007365254f866bd287_03760214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e09d15ce037bfdf021497343688c1e4c2bacdb7' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/forgot_password.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214171007365254f866bd287_03760214',
  'variables' => 
  array (
    'settings' => 0,
    'errors' => 0,
    'found_records' => 0,
    'frm' => 0,
    'ti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65254f866f0159_98863778',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65254f866f0159_98863778')) {
function content_65254f866f0159_98863778 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '214171007365254f866bd287_03760214';
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
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 466.6 136" height="52">
                            <svg version="1.1" id="Template Rex" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 124 36" enable-background="new 0 0 124 36" xml:space="preserve">
                                <g>
                                    <g>
                                        <path fill="#353448" d="M3.7,23.6v-8.5H0.6V14H8v1.1H4.9v8.5H3.7z" />
                                        <path fill="#353448" d="M15.2,23.6H9.2V14h5.9v1.1h-4.7v3.1h4.5v1.1h-4.5v3.3h4.7V23.6z" />
                                        <path fill="#353448" d="M26.1,23.6H25v-7.4h0l-3,7.3h-1l-3-7.3h0v7.4h-1.1V14h1.4l3.3,8h0.1l3.3-8h1.4V23.6z" />
                                        <path fill="#353448" d="M31.6,14c1.8,0,3.1,1.3,3.1,3.1c0,1.8-1.3,3.1-3.1,3.1h-2.4v3.4H28V14H31.6z M29.2,19.1h2.1
			c1.4,0,2.1-0.7,2.1-2c0-1.3-0.8-2-2.1-2h-2.1V19.1z" />
                                        <path fill="#353448" d="M41.8,23.6H36V14h1.2v8.5h4.6V23.6z" />
                                        <path fill="#353448" d="M48.3,20.9h-3.8l-1,2.7h-1.2l3.5-9.5H47l3.5,9.5h-1.2L48.3,20.9z M44.9,19.8H48l-1.5-4.4h0L44.9,19.8z" />
                                        <path fill="#353448" d="M52.8,23.6v-8.5h-3.1V14h7.3v1.1H54v8.5H52.8z" />
                                        <path fill="#353448" d="M64.2,23.6h-5.9V14h5.9v1.1h-4.7v3.1H64v1.1h-4.5v3.3h4.7V23.6z" />
                                        <path fill="#353448" d="M70.9,23.6h-2.8V14h4.2c2.5,0,3.9,1.2,3.9,3.2c0,1.1-0.5,2.2-1.5,2.7l1.8,3.6h-3.1l-1.5-3.2h-0.9V23.6z
			 M70.9,18.5h1.2c0.8,0,1.3-0.5,1.3-1.2c0-0.7-0.5-1.2-1.3-1.2h-1.2V18.5z" />
                                        <path fill="#353448" d="M84.1,23.6h-6.7V14h6.7v2.2h-3.9v1.5h3.7v2h-3.7v1.5h3.9V23.6z" />
                                        <path fill="#353448" d="M87.8,18.8L87.8,18.8L85,14h3.3l1.5,3h0.1l1.5-3h3.1l-3,4.7v0.1l2.9,4.8h-3.1l-1.6-2.9h-0.1L88,23.6h-3
			L87.8,18.8z" />
                                    </g>
                                    <g>
                                        <g>
                                            <polygon fill="#353448" points="97.2,22.9 97.2,14.1 100.1,12.6 100.1,9.4 104.9,6.8 107.6,8.3 113,5.2 123.2,11.1 123.2,22.9 
				110.3,30.4 			" />
                                            <path fill="#353448" d="M110.3,30.5L97.1,23v-9l2.9-1.5V9.4l4.9-2.8l2.7,1.6L113,5l10.3,6.1V23L110.3,30.5z M97.4,22.9l12.9,7.4
				l12.8-7.4V11.2L113,5.3l-5.4,3.2l-2.7-1.6l-4.6,2.6v3.2l-2.9,1.5V22.9z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FF9300" points="110.3,28.2 121.3,21.8 121.3,18.6 115.8,15.5 107.6,20.3 104.7,18.7 115.8,12.2 121.3,15.1 
				121.3,12.2 113,7.3 107.6,10.5 104.9,8.9 102,10.5 102,13.7 99.1,15.3 99.1,21.9 			" />
                                            <path fill="#353448" d="M110.3,28.4L99,21.9v-6.8l2.9-1.5v-3.2l3-1.7l2.7,1.6l5.4-3.2l8.5,5v3.2l-5.7-3l-10.8,6.3l2.7,1.5
				l8.2-4.8l5.7,3.1v3.4L110.3,28.4z M99.2,21.8l11,6.3l10.9-6.3v-3.1l-5.4-3l-8.2,4.8l-3.2-1.8l11.4-6.6l5.4,2.8v-2.6L113,7.5
				l-5.4,3.2l-2.7-1.6l-2.8,1.6v3.2l-2.9,1.5V21.8z" />
                                        </g>
                                        <g>

                                            <rect x="103.7" y="12.1" transform="matrix(0.9443 0.329 -0.329 0.9443 10.3901 -33.9505)" fill="#353448" width="3.6" height="3.3" />
                                        </g>
                                        <g>
                                            <polygon fill="#353448" points="104.8,25.2 104.7,24.9 115.7,18.5 115.7,15.5 115.9,15.5 116,18.6 			" />
                                        </g>
                                        <g>
                                            <line fill="#353448" x1="121.3" y1="21.8" x2="115.8" y2="18.6" />

                                            <rect x="118.4" y="17" transform="matrix(0.507 -0.8619 0.8619 0.507 41.0525 112.1587)" fill="#353448" width="0.3" height="6.4" />
                                        </g>
                                        <g>
                                            <line fill="#353448" x1="115.8" y1="9" x2="115.8" y2="12.2" />

                                            <rect x="114.2" y="10.5" transform="matrix(9.765159e-03 -1 1 9.765159e-03 104.0877 126.2767)" fill="#353448" width="3.2" height="0.3" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="104.7,18.7 107.8,16.9 107.9,20.2 107.6,20.3 			" />
                                            <path fill="#353448" d="M107.6,20.5l-3.2-1.8l3.5-2l0.1,3.6L107.6,20.5z M104.9,18.7l2.7,1.5l0.1-0.1l-0.1-3L104.9,18.7z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="108,16.8 110.5,18.6 107.9,20.2 107.8,16.9 108,16.7 			" />
                                            <path fill="#353448" d="M107.8,20.4l-0.1-3.6l0.4-0.2l0.1,0.1l2.6,2L107.8,20.4z M107.9,16.9l0.1,3l2.2-1.3L107.9,16.9
				L107.9,16.9z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="110.4,15.3 110.6,18.6 110.5,18.6 108,16.7 			" />
                                            <path fill="#353448" d="M110.5,18.8l-2.7-2.1l2.8-1.6l0.2,3.5L110.5,18.8z M108.2,16.7l2.2,1.7l-0.1-2.9L108.2,16.7z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="110.6,15.2 113.1,17.1 110.6,18.6 110.4,15.3 			" />
                                            <path fill="#353448" d="M110.5,18.8l-0.2-3.5l0.4-0.2l2.7,2.1L110.5,18.8z M110.6,15.4l0.1,3l2.1-1.3L110.6,15.4L110.6,15.4z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="113.2,13.7 113.4,16.9 113.1,17.1 110.6,15.2 			" />
                                            <path fill="#353448" d="M113.1,17.2l-2.7-2.1l2.9-1.7l0.2,3.5L113.1,17.2z M110.9,15.2l2.2,1.7l0.2-0.1l-0.2-2.9L110.9,15.2z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="113.4,13.6 115.8,15.5 113.4,16.9 113.2,13.7 			" />
                                            <path fill="#353448" d="M113.3,17.1l-0.2-3.5l0.4-0.2l2.6,2.1L113.3,17.1z M113.3,13.8l0.2,2.9l2.1-1.2L113.3,13.8L113.3,13.8z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="115.7,12.2 115.8,12.3 115.8,15.5 115.7,15.5 113.4,13.6 			" />
                                            <path fill="#353448" d="M115.7,15.7l-2.5-2.1l2.6-1.5l0.2,0.3v3.3L115.7,15.7z M113.6,13.6l2,1.7v-2.9L113.6,13.6z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="118.4,13.6 115.9,15.5 115.8,15.5 115.8,12.3 			" />
                                            <path fill="#353448" d="M115.9,15.7l-0.2-0.1v-3.4l3,1.5L115.9,15.7z M115.9,12.6v2.8l2.2-1.7L115.9,12.6z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="118.5,13.7 118.7,13.8 118.6,17.1 115.9,15.5 			" />
                                            <path fill="#353448" d="M118.7,17.3l-3.1-1.7l2.8-2l0.4,0.2L118.7,17.3z M116.1,15.5l2.4,1.3l0.1-3l-0.1,0L116.1,15.5z" />
                                        </g>
                                        <g>
                                            <polygon fill="#FFFFFF" points="120.9,15 118.7,17.1 118.6,17.1 118.7,13.8 			" />
                                            <path fill="#353448" d="M118.8,17.3l-0.3-0.2l0.1-3.6l2.6,1.4L118.8,17.3z M118.8,14l-0.1,3l1.9-2L118.8,14z" />
                                        </g>
                                        <g>
                                            <path fill="#FFFFFF" d="M121.3,15.1c0,1.1,0,2.3,0,3.4l-2.6-1.4c0.7-0.7,1.4-1.5,2.2-2.2C121,15,121.2,15.1,121.3,15.1z" />
                                            <path fill="#353448" d="M121.5,18.8l-2.9-1.6l2.3-2.4l0.6,0.3V18.8z M119,17.1l2.2,1.2v-3.1l-0.3-0.1L119,17.1z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </svg>
                    </a>
                    
                    <div class="col-11 col-md-8 col-lg-5 form-box mb-3">
                        <div class="inside d-flex flex-column">
                            <h2 class="text-center center-bottom-line">Password reset</h2>
                            <p class="mb-0">Recover your password via email</p>



                            
                            <?php echo '<script'; ?>
 language=javascript>
                                function checkform() {
                                    if (document.forgotform.email.value == '') {
                                        alert("Please type your username or email!");
                                        document.forgotform.email.focus();
                                        return false;
                                    }
                                    return true;
                                }

                            <?php echo '</script'; ?>
>
                            


                            <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image']) {?>
                            <br>
                            <div class="status-box errors p-3" style="background:#FFEBCB;">
                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                    Invalid turing image
                                </p>
                            </div>
                            <br>
                            <?php }?>


                            <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 2) {?>
                            <br>
                            <div class="status-box" style="padding: initial;">
                                <p class="m-0" style="color: rgba(0,0,0,0.5);background:#E8F1EB;padding:.375rem .75rem;border-radius:5px;"><i class="fas fa-check-circle aniview d6" data-av-animation="zoomInUp"></i>Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.</p>
                            </div>
                            <br>
                            <?php } else { ?>

                            <?php if ($_smarty_tpl->tpl_vars['found_records']->value == 0) {?>

                            <br>
                            <div class="status-box errors p-3" style="background:#FFEBCB;">
                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                    No accounts found for provided info.
                                </p>
                            </div>
                            <br>
                            <?php } elseif ($_smarty_tpl->tpl_vars['found_records']->value == 1) {?>
                            <br>
                            <div class="status-box" style="padding: initial;">
                                <p class="m-0" style="color: rgba(0,0,0,0.5);background:#E8F1EB;padding:.375rem .75rem;border-radius:5px;"><i class="fas fa-check-circle aniview d6" data-av-animation="zoomInUp"></i>Request was confirmed. Login and password was sent to your email address.</p>
                            </div>
                            <br>
                            <?php }?>

                            <form method=post name=forgotform onsubmit="return checkform();">
                                <input type=hidden name=a value="forgot_password">
                                <input type=hidden name=action value="forgot_password">



                                <div class="table-row d-flex align-items-center">
                                    <input type=text name='email' value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" autofocus="autofocus" placeholder="Type your username or e-mail" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-envelope float2"></i>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['ti']->value['check']['forgot_password']) {?>
                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=validation_number placeholder="Enter your Code" autocomplete="off" autocorrect="off" autocapitalize="off" required=""><i id="icon-yeee" class="far fa-eye-slash float" style="color: #454456;"> <img src="<?php echo smarty_modifier_myescape(encurl(" ?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['name'])."=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['id'])."&rand=".((string)$_smarty_tpl->tpl_vars['ti']->value['session']['rand'])));?>
"></i>
                                    <i class="fas fa-unlock-alt float2"></i>
                                </div>
                                <?php }?>


                                <div class="table-row d-flex align-items-center">
                                    <input type="submit" value="Send Reset Email" class="sbmt">
                                </div>
                                <div class="table-row d-flex align-items-center flex-column">
                                    <p class="mb-0" style="color:#AEBAC7;">Already have an account? <a href="?a=login">Log in</a>
                                    </p>
                                    <p class="mb-0" style="color:#AEBAC7;">Don't have an account? <a href="?a=signup">Sign up</a>
                                    </p>
                                </div>

                            </form><br><br>
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
    <iframe data-product="web_widget" title="No content" tabindex="-1" aria-hidden="true" src="about:blank" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
    
</body>

</html>
<?php }
}
?>