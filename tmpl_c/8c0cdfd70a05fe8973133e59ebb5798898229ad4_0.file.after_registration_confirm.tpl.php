<?php /* Smarty version 3.1.27, created on 2023-10-04 01:21:47
         compiled from "/home/assetpin/public_html/tmpl/after_registration_confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1317673923651cbe2b77d4b2_90236027%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c0cdfd70a05fe8973133e59ebb5798898229ad4' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/after_registration_confirm.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1317673923651cbe2b77d4b2_90236027',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651cbe2b7a4d16_78423778',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651cbe2b7a4d16_78423778')) {
function content_651cbe2b7a4d16_78423778 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1317673923651cbe2b77d4b2_90236027';
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
							<h4 class="text-center center-bottom-line">Confirm Your Account</h4>
							<p>Kindly verify your account by clicking the link sent to your mail address.
							</p>
							<div class="status-box success p-3 mb-3 flex-column all-center">	<i class="fas fa-check-circle mb-2" style="font-size:2rem;"></i>
								<h6 class="m-0 text-center">Thank you for registering <br>with <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
!</h6>
							</div>
							<div class="table-row d-flex align-items-center flex-column">
								<p class="mb-0" style="color:#AEBAC7;">Already have an account? <a href="?a=login">Log in</a>
								</p>
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
		$(window).scroll(function() {        var scroll = $(window).scrollTop();    if (scroll >= 50) {        $("#header-main-menu").addClass("darkHeader");    } else {        $("#header-main-menu").removeClass("darkHeader");    }});
	<?php echo '</script'; ?>
>
	<iframe data-product="web_widget" title="No content" tabindex="-1" aria-hidden="true" src="about:blank" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
	
</body>

</html>
<?php }
}
?>