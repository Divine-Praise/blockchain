<?php /* Smarty version 3.1.27, created on 2023-10-04 01:22:27
         compiled from "/home/assetpin/public_html/tmpl/logo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:881020302651cbe53019147_13028819%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b49fe327d5a2cfd767eb9d26a36691dc5ec4457' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/logo.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '881020302651cbe53019147_13028819',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651cbe53020348_73440517',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651cbe53020348_73440517')) {
function content_651cbe53020348_73440517 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '881020302651cbe53019147_13028819';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="styles/img/Asset1@4x-8.png" type="image/x-icon" />
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










<body>
    <header class="header-dashboard" style="position:relative;z-index:999;">
        <nav class="navbar navbar-expand-lg navbar-light main-nav">
            <div class="container-fluid">
                <div class="navbar-brand d-flex align-items-center">
                    <a href="/" class="d-flex">
                        
                        <img src="styles/img/logo.png" alt="Template Rex" width="130px" >
                    </a>


                    <span class="d-flex align-items-center header-switch pl-2">
                        <p class="pl-2 pr-2">Dashboard</p>


                        <button class="small-button d-flex align-items-center" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg width="16" height="16" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486">
                                <path d="M243,0C108.8,0,0,108.8,0,243s108.8,243,243,243s243-108.8,243-243S377.2,0,243,0z M312.8,338.8 c-10.6,12.9-24.4,21.6-40.5,26c-7,1.9-10.2,5.6-9.8,12.9c0.3,7.2,0,14.3-0.1,21.5c0,6.4-3.3,9.8-9.6,10
									c-4.1,0.1-8.2,0.2-12.3,0.2c-3.6,0-7.2,0-10.8-0.1c-6.8-0.1-10-4-10-10.6c-0.1-5.2-0.1-10.5-0.1-15.7c-0.1-11.6-0.5-12-11.6-13.8
									c-14.2-2.3-28.2-5.5-41.2-11.8c-10.2-5-11.3-7.5-8.4-18.3c2.2-8,4.4-16,6.9-23.9c1.8-5.8,3.5-8.4,6.6-8.4c1.8,0,4.1,0.9,7.2,2.5
									c14.4,7.5,29.7,11.7,45.8,13.7c2.7,0.3,5.4,0.5,8.1,0.5c7.5,0,14.8-1.4,21.9-4.5c17.9-7.8,20.7-28.5,5.6-40.9
									c-5.1-4.2-11-7.3-17.1-10c-15.7-6.9-32-12.1-46.8-21c-24-14.4-39.2-34.1-37.4-63.3c2-33,20.7-53.6,51-64.6
									c12.5-4.5,12.6-4.4,12.6-17.4c0-4.4-0.1-8.8,0.1-13.3c0.3-9.8,1.9-11.5,11.7-11.8c1.1,0,2.3,0,3.4,0c1.9,0,3.8,0,5.7,0
									c0.8,0,1.6,0,2.3,0c18.6,0,18.6,0.8,18.7,20.9c0.1,14.8,0.1,14.8,14.8,17.1c11.3,1.8,22,5.1,32.4,9.7c5.7,2.5,7.9,6.5,6.1,12.6
									c-2.6,9-5.1,18.1-7.9,27c-1.8,5.4-3.5,7.9-6.7,7.9c-1.8,0-4-0.7-6.8-2.1c-14.4-7-29.5-10.4-45.3-10.4c-2,0-4.1,0.1-6.1,0.2
									c-4.7,0.3-9.3,0.9-13.7,2.8c-15.6,6.8-18.1,24-4.8,34.6c6.7,5.4,14.4,9.2,22.3,12.5c13.8,5.7,27.6,11.2,40.7,18.4
									C330.9,250.9,342.1,303.2,312.8,338.8z" fill="#F8AC4A" />
                            </svg>
                            <label class="m-0 ml-2 mr-1">USD Dollar</label>
                        </button>
                        


                    </span>


                </div>
                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#MainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse accountMenu" id="MainNav">
                    <ul class="navbar-nav mr-auto mt-sms-3">
                        <li class="nav-item">
                            <a class="nav-link text-center" href="?a=account"><i class="icon icon-sidebar "></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=deposit"><i class="icon icon-organize "></i> Deposit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=withdraw"><i class="icon icon-ads "></i>Withdraw</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=deposit_list"><i class="icon icon-todo "></i>Deposit List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=deposit_history"><i class="icon icon-seo "></i>History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=referals"><i class="icon icon-widget "></i>Referrals</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex flex-nowrap shadow-left">
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=edit_account"><i class="icon icon-toggle "></i>Settings</a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_tfa']) {?>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=security"><i class="icon icon-security "></i>2FA</a>
                        </li>
                        <?php }?>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=logout"><i class="icon icon-vm-1-3 rotate"></i></a>
                        </li>
                    </ul>



                </div>
            </div>
        </nav>

    </header>


    <main>

        <section id="dashboard" class="btc-background">
            <div class="container full-height ">



                <div class="row mt-xl-5">
                    <div class="col-xl-12" style="padding-bottom: 150px;">
                        <div class="wbox">
                            <div class="row m-0">
                                <div class="col-12 p-0 depboxHome d-flex flex-column">

                                    <div class="d-flex align-items-center title p-3 pr-4 pl-4">
<?php }
}
?>