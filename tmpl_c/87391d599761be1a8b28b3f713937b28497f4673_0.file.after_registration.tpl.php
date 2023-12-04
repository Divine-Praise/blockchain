<?php /* Smarty version 3.1.27, created on 2023-07-08 09:39:35
         compiled from "/home/assetpin/public_html/tmpl/after_registration.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:126388168564a92ed704a649_62116209%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87391d599761be1a8b28b3f713937b28497f4673' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/after_registration.tpl',
      1 => 1597956906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126388168564a92ed704a649_62116209',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64a92ed705c5c9_29969626',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64a92ed705c5c9_29969626')) {
function content_64a92ed705c5c9_29969626 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '126388168564a92ed704a649_62116209';
echo $_smarty_tpl->getSubTemplate ("header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


        <!-- start page title section -->
        <section class="page-title-section2 bg-img cover-background" data-overlay-dark="7" data-background="img/bg/about6.jpg">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h1>Registration Completed!</h1>
                    </div>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start about us section -->
        <section class="padding-40px-bottom sm-padding-20px-bottom">

            <div class="container">


Thank you for joining our program.<br>
You are now an official member of this program. You can login to your account to start investing with us and use all the services that are available for our members.
<br>
<br>

<b>Important:</b> Do not provide your login and password to anyone!

</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate ("footer2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>