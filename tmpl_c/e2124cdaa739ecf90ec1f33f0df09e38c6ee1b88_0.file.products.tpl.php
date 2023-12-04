<?php /* Smarty version 3.1.27, created on 2023-10-10 21:59:34
         compiled from "/home/assetpin/public_html/tmpl/products.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6820242466525c946562c81_87528833%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2124cdaa739ecf90ec1f33f0df09e38c6ee1b88' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/products.tpl',
      1 => 1696023896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6820242466525c946562c81_87528833',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6525c94656c409_92310760',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6525c94656c409_92310760')) {
function content_6525c94656c409_92310760 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '6820242466525c946562c81_87528833';
?>
 <!-- start page title section -->
        <section class="page-title-section2 bg-img cover-background" data-overlay-dark="7" data-background="img/bg/bg9.jpg">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h1>Investment Products</h1>
                    </div>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start service detail section -->
        <section>
            <div class="container">
                <div class="row">

                    <!-- start left side section -->
                    <div class="col-lg-4 col-md-12 padding-50px-right md-padding-30px-right sm-padding-15px-right order-2 order-lg-1">

                        <!-- start services -->
                        <div class="services-single-left-box">
                            <h6 class="font-weight-700 font-size16 sm-font-size14 text-uppercase left-title margin-20px-bottom">Investment Products</h6>
                           
                        </div>
                        <!-- end services -->

                        <!-- start testimonial -->
                        <div class="bg-light-gray padding-25px-all md-padding-20px-all border-radius-5 margin-30px-bottom sm-margin-25px-bottom">
                            <div class="testimonial-style7 owl-carousel owl-theme">
                                <div class="testmonial-single center-col width-85 md-width-80">
                                    <p>This company remains the best in terms of customer service and prompt payment of profits. Kudos!.</p>
                                    <img src="img/testmonials/t-1.jpg" class="rounded-circle" alt="" />
                                    <div class="d-block vertical-align-middle text-center">
                                        <h4>Stephanie Andrews</h4>
                                        <h6>Investor</h6>
                                    </div>
                                </div>
                                <div class="testmonial-single center-col width-85 md-width-80">
                                    <p>My first experience with investing was with <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
, and I am glad I took that step.</p>
                                    <img src="img/testmonials/t-2.jpg" class="rounded-circle" alt="" />
                                    <div class="d-block vertical-align-middle text-center">
                                        <h4>Annie Hoffman</h4>
                                        <h6>Single Mom</h6>
                                    </div>
                                </div>
                                <div class="testmonial-single center-col width-85 md-width-80">
                                    <p>My wife's colleague at work kept advising us to put some money aside for the future, so we asked our broker and she recommended <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
.</p>
                                    <img src="img/testmonials/t-3.jpg" class="rounded-circle" alt="" />
                                    <div class="d-block vertical-align-middle text-center">
                                        <h4>Patrick C.</h4>
                                        <h6>Computer Engineer</h6>
                                    </div>
                                </div>
                                <div class="testmonial-single center-col width-85 md-width-80">
                                    <p>I've been an investor since my teenage years, so I know how to spot a good investment. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 is ahead of many others.</p>
                                    <img src="img/testmonials/t-4.jpg" class="rounded-circle" alt="" />
                                    <div class="d-block vertical-align-middle text-center">
                                        <h4>Ahmed Hakeem</h4>
                                        <h6>Banker</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start testimonial -->

                        <!-- start help -->
                        <div class="bg-img cover-background theme-overlay border-radius-5 margin-30px-bottom sm-margin-25px-bottom" data-overlay-dark="8" data-background="img/bg/bg-2.jpg">
                            <div class="position-relative z-index-9 text-center padding-50px-tb md-padding-40px-tb sm-padding-30px-tb padding-30px-lr">
                                <i class="fas fa-headset font-size50 md-font-size46 sm-font-size42 text-white margin-15px-bottom"></i>
                                <h5 class="text-white font-weight-600 margin-5px-bottom">How can we help?</h5>
                                <p class="text-white font-weight-500">Let’s get in touch!</p>
                                <div class="bg-white separator-line-horrizontal-full opacity3 margin-20px-bottom sm-margin-15px-bottom"></div>
                                <ul class="text-center no-padding no-margin">
                                    <li class="text-white margin-5px-bottom"><i class="fa fa-phone font-size16 text-white margin-15px-right"></i><a href="tel:447537169267" class="text-white">(+44) 753 716 9267</a></li>
                                    <li class="text-white"><i class="fa fa-envelope-open font-size16 text-white margin-15px-right"></i><a href="admin@<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
" class="text-white">info@<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end help -->

                        <!-- start download -->
                        <h6 class="font-weight-700 font-size16 sm-font-size14 text-uppercase left-title margin-20px-bottom">Downloads</h6>
                        <ul class="downloads no-margin-bottom">
                            <li class="margin-10px-bottom"><a href="documentation/presentation.pdf"><i class="far fa-file-pdf font-size24"></i><span class="label font-weight-600">Company Presentation</span></a></li>
                            <li><a href="documentation/incorporation.pdf"><i class="far fa-file-pdf font-size24"></i><span class="label font-weight-600">Business Certificate</span></a></li>
                        </ul>
                        <!-- end download -->

                    </div>
                    <!-- end left side section --><?php }
}
?>