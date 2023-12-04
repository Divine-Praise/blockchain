<?php /* Smarty version 3.1.27, created on 2023-10-10 02:59:14
         compiled from "/home/assetpin/public_html/tmpl/login_redirect.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16475231416524be021941b0_70870046%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b35663d2643ed8c1c0425a2b822808a3abfd5249' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/login_redirect.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16475231416524be021941b0_70870046',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6524be021c3747_85377231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6524be021c3747_85377231')) {
function content_6524be021c3747_85377231 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '16475231416524be021941b0_70870046';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
    <META HTTP-EQUIV=Refresh CONTENT="2; URL=<?php echo smarty_modifier_myescape(encurl(" ?a=account"));?>
">
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
                <div class="row all-center flex-column">
                    <div class="col-11 col-md-8 col-lg-5 form-box">
                        <div class="inside d-flex flex-column deposit-redirect">
                            <div class="d-flex all-center flex-column">
                                <p class="m-0">You are now redirecting to Dashboard.</p> <i class="fas fa-spinner fa-spin p-4"></i>
                                <p class="m-0">Please wait !</p>
                            </div>
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