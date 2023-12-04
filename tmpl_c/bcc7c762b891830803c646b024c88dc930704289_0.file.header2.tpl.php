<?php /* Smarty version 3.1.27, created on 2023-10-10 21:59:34
         compiled from "/home/assetpin/public_html/tmpl/header2.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17116433526525c946559600_63189973%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcc7c762b891830803c646b024c88dc930704289' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/header2.tpl',
      1 => 1696383077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17116433526525c946559600_63189973',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6525c946560e07_30993966',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6525c946560e07_30993966')) {
function content_6525c946560e07_30993966 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17116433526525c946559600_63189973';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="designer" content="https://uniquehyips.com" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- title  -->
    <title>Asset-pinnacle</title>
    
    <!--Start of Tawk.to Script-->
    <?php echo '<script'; ?>
 type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/64aff8c4cc26a871b0282f53/1h57m7gtu';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    <?php echo '</script'; ?>
>
    <!--End of Tawk.to Script-->
    
    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/favicon.png">
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png">

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css" />

    <!-- custom css -->
    <link href="css/styles-2.css" rel="stylesheet" id="colors">
    <link rel="stylesheet" href="mycss.css" type="text/css">
    <link rel="stylesheet" href="css/lang-style.css" type="text/css">

   
    <!-- start translate -->
    <?php echo '<script'; ?>
 type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element_id');
        }

    <?php echo '</script'; ?>
>
    <!-- end translate -->

</head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
    <div class="main-wrapper">

        <!-- start header section -->

    
        <header class="header-style1 menu_area-light">
            <div class="navbar-default border-color-light-white">

                <div class="container"> 
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light no-padding">

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="/" class="navbar-brand logo2"><img id="logo" src="img/logos/logo-2-light.png" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <!-- menu area -->
                                    <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                        <li><a href="/">Home</a></li>
                                           <li><a href="/?a=cust&page=company">About us</a></li>
                                            <li><a href="/?a=cust&page=pricing">Plans </a></li>
                                        <li><a href="javascript:void(0)">Investment Services </a>
                                            <ul>
                                                <li><a href="/?a=cust&page=cryptos">Cryptocurrencies</a></li>
                                                <li><a href="/?a=cust&page=forex">Forex</a></li>
                                                <li><a href="/?a=cust&page=stocks">Stocks & ETFs</a></li>
                                                <li><a href="/?a=cust&page=options">Options</a></li>
                                                <li><a href="/?a=cust&page=metals">Metals</a></li>
                                                <li><a href="/?a=cust&page=futures">Futures</a></li>
                                                <li><a href="/?a=cust&page=tesla">Tesla Investment </a></li>
                                                
                                                
                                            </ul>
                                        </li>

                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
                            <li class="menu-item"><a href="?a=login">Investor Login</a></li>
                            <li class="menu-item"><a href="?a=signup">Register Account</a></li>
                            
                            <?php } else { ?>
                           <li> <a href='/?a=logout' class='butn theme11'><span><strong>Logout</strong></span></a></li>
                          <li>  <a href='/?a=account' class='butn theme'><span><strong>Dashboard</strong></span></a></li>
                            <?php }?>
                      <div id="ytWidget"></div><?php echo '<script'; ?>
 src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=dark&autoMode=false" type="text/javascript"><?php echo '</script'; ?>
></a>
                                    </ul>
                                    <!-- end menu area -->

                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </header>
        <!-- end header section --><?php }
}
?>