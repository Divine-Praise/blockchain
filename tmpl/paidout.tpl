<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$settings.site_name}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="styles/img/Asset1@4x-8.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles/css/animate.css">
    {literal}
    <script>
        document.write("<link rel='stylesheet' type='text/css' href='styles/css/main.css?v=" + Date.now() + "'>")

    </script>
    {/literal}
</head>


<body>

    <style>
        .selectpaidout select {
            flex: 1 !important;
            padding: .625rem .375rem;
            border: 0;
            background: none;
            outline: 0;
            font-size: 13px;
            color: #353448;
            line-height: 1;
            border-right: 1px solid #fff;
        }

        .selectpaidout {
            flex: 4;
            align-content: stretch;
            background: #ECEDF0;
            border-radius: 3px;
        }

        a.disabled {
            pointer-events: none;
            cursor: default;
        }

    </style>
    <header class="header fixed-top smalex" id="header-main-menu">
        <nav class="navbar navbar-expand-lg navbar-light main-nav">
            <div class="container-fluid">
                {literal}
                <a href="/" class="navbar-brand">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 466.6 136" height="36">
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
                {/literal}

                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#MainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="MainNav">
                    <ul class="navbar-nav mr-auto mt-sms-3">
                        <li class="nav-item">
                            <a class="nav-link text-center" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=invest">Invest</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=affiliate">Affiliate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=faq">FAQ</a>
                        </li>
                    </ul>

                    {if $userinfo.logged != 1}
                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex">
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=login" class="login nav-btn">Sign In</a>
                        </li>
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=signup" class="register nav-btn">Sign Up</a>
                        </li>
                    </ul>
                    {else}
                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex">
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=account" class="register nav-btn">Dashboard</a>
                        </li>
                    </ul>
                    {/if}


                </div>
            </div>
        </nav>

    </header>
    <main>


        <section id="hero" class="about-us-page">
            <div class="container ">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10 d-flex flex-column pb-2 pt-2 pb-md-5 pt-md-5">

                        {literal}
                        <script language=javascript>
                            function go(p) {
                                document.opts.page.value = p;
                                document.opts.submit();
                            }

                        </script>
                        {/literal}
                        <div class="allpaidouts p-4 d-flex flex-column">
                            <h4 class="text-left">Paidouts</h4>






                            <div id="proof-dates" class="d-flex mb-3">
                                <div class="sdate active">
                                    <form method=post name=opts>
                                        <input type=hidden name=a value=paidout>
                                        <input type=hidden name=page value={$current_page}>
                                        <div class="selectpaidout">
                                            <select name=month class=inpts onchange="document.opts.submit();">
                                                {section name=month loop=$month}
                                                <option value={$smarty.section.month.index+1} {if $smarty.section.month.index+1==$frm.month}selected{/if}>{$month[month]} {/section} </select> <select name=year class=inpts onchange="document.opts.submit();">
                                                    {section name=year loop=$year}
                                                <option value={$year[year]} {if $year[year]==$frm.year}selected{/if}>{$year[year]} {/section} </select> </div> </form> </div> </div> <div id="proof-data">

                                                    {if $stats}
                                                    {section name=s loop=$stats}
                                                    <div class="proof-top">
                                                        <div class="username">{$stats[s].username}</div>
                                                        <div class="date phone-nodisplay">{$stats[s].dd}</div>
                                                        <div class="amount">{$currency_sign}{$stats[s].actual_amount}</div>
                                                        <div class="pm">
                                                            <img src="styles/img/pm/{$stats[s].ec}.svg">
                                                        </div>
                                                        <div class="linkxa">{if $stats[s].batch != 0}<a class="typepm{$stats[s].ec}" base href="{$stats[s].batch}" target="_blank">Verify&nbsp;&nbsp;<i class="icon icon-vm-3-1-2"></i></a>{else}<a>Verify&nbsp;&nbsp;<i class="icon icon-vm-3-1-2"></i></a>{/if}</div>
                                                    </div>
                                                    {/section}
                                                    {else}
                                                    <div class="col-lg-12 table-list p-4 d-flex all-center">
                                                        <img src="styles/img/Not-Found-mob.svg" style="max-width:128px;">
                                                    </div>

                                                    {/if}
                                        </div>

                                </div>
                            </div>
                        </div>
        </section>
    </main>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center pb-5">
                    <div class="d-flex align-items-center pb-5 flex-fill" style="border-bottom:1px solid #2D2F3A;">
                        <h3 style="color:#fff;flex:1;" class="pr-5 m-0">{$settings.site_name} Global Ltd: New York 1735 Bingamon Branch Road</h3>
                        {if $userinfo.logged != 1}
                        <a class="btn" href="?a=signup" role="button"><span>Register </span></a>
                        {else}
                        <a class="btn" href="?a=deposit" role="button"><span>New Investment </span></a>
                        {/if}
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="footer-title">Company</h6>
                    <ul class="footer-list">
                        <li><a href="/">Home</a></li>
                        <li><a href="?a=cust&amp;page=aboutus">About</a></li>
                        <li><a href="?a=login">Login</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="footer-title">FEATURES</h6>
                    <ul class="footer-list">
                        <li><a href="?a=cust&amp;page=invest">Invest</a></li>
                        <li><a href="?a=cust&amp;page=affiliate">Affiliate</a></li>
                        <li><a href="?a=cust&amp;page=representatives">Representatives</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mt-4 mt-md-0">
                    <h6 class="footer-title">Help Center</h6>
                    <ul class="footer-list">
                        <li><a href="?a=cust&amp;page=faq">FAQ</a></li>

                        <li><a href="?a=rules">Terms and Conditions</a></li>
                        <li><a href="?a=cust&amp;page=privacy">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mt-4 mt-md-0">
                    <h6 class="footer-title">GET IN TOUCH</h6>
                    <ul class="footer-list">
                        <li>
                            <p>Feel free to get in touch with us via email</p>
                        </li>
                        <li><a href="mailto:{$settings.support_email}" class="mailto">{$settings.support_email}</a></li>
                        <li class="d-flex align-items-center">
                            <a href="https://www.facebook.com" class="social-btn d-flex all-center mr-1 mt-1 mr-lg-2 mt-lg-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com" class="social-btn d-flex all-center mr-1 mt-1 mr-lg-2 mt-lg-2"><i class="fab fa-twitter"></i></a>
                            <a href="https://t.me" class="social-btn d-flex all-center mr-1 mt-1 mr-lg-2 mt-lg-2"><i class="fab fa-telegram-plane"></i></a>
                            <a href="https://www.youtube.com" class="social-btn d-flex all-center mr-1 mt-1 mr-lg-2 mt-lg-2"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 pt-5">
                    <div class="row d-flex align-items-center pt-4 pb-4 flex-fill" style="border-top:1px solid #2D2F3A;">
                        {literal}
                        <a href="/" class="navbar-brand col-4 col-sm-2" style="margin:0;">

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 466.6 136" height="32">
                                <svg version="1.1" id="Template Rex" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 124 36" enable-background="new 0 0 124 36" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path fill="#FFFFFF" d="M3.7,23.6v-8.5H0.6V14H8v1.1H4.9v8.5H3.7z" />
                                            <path fill="#FFFFFF" d="M15.2,23.6H9.2V14h5.9v1.1h-4.7v3.1h4.5v1.1h-4.5v3.3h4.7V23.6z" />
                                            <path fill="#FFFFFF" d="M26.1,23.6H25v-7.4h0l-3,7.3h-1l-3-7.3h0v7.4h-1.1V14h1.4l3.3,8h0.1l3.3-8h1.4V23.6z" />
                                            <path fill="#FFFFFF" d="M31.6,14c1.8,0,3.1,1.3,3.1,3.1c0,1.8-1.3,3.1-3.1,3.1h-2.4v3.4H28V14H31.6z M29.2,19.1h2.1
			c1.4,0,2.1-0.7,2.1-2c0-1.3-0.8-2-2.1-2h-2.1V19.1z" />
                                            <path fill="#FFFFFF" d="M41.8,23.6H36V14h1.2v8.5h4.6V23.6z" />
                                            <path fill="#FFFFFF" d="M48.3,20.9h-3.8l-1,2.7h-1.2l3.5-9.5H47l3.5,9.5h-1.2L48.3,20.9z M44.9,19.8H48l-1.5-4.4h0L44.9,19.8z" />
                                            <path fill="#FFFFFF" d="M52.8,23.6v-8.5h-3.1V14h7.3v1.1H54v8.5H52.8z" />
                                            <path fill="#FFFFFF" d="M64.2,23.6h-5.9V14h5.9v1.1h-4.7v3.1H64v1.1h-4.5v3.3h4.7V23.6z" />
                                            <path fill="#FFFFFF" d="M70.9,23.6h-2.8V14h4.2c2.5,0,3.9,1.2,3.9,3.2c0,1.1-0.5,2.2-1.5,2.7l1.8,3.6h-3.1l-1.5-3.2h-0.9V23.6z
			 M70.9,18.5h1.2c0.8,0,1.3-0.5,1.3-1.2c0-0.7-0.5-1.2-1.3-1.2h-1.2V18.5z" />
                                            <path fill="#FFFFFF" d="M84.1,23.6h-6.7V14h6.7v2.2h-3.9v1.5h3.7v2h-3.7v1.5h3.9V23.6z" />
                                            <path fill="#FFFFFF" d="M87.8,18.8L87.8,18.8L85,14h3.3l1.5,3h0.1l1.5-3h3.1l-3,4.7v0.1l2.9,4.8h-3.1l-1.6-2.9h-0.1L88,23.6h-3
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
                        {/literal}
                        <p class="footer-copyright m-0 flex-fill col-8 col-sm-4 col-md-5 col-lg-5" style="line-height:1;">{$settings.site_name} Global Ltd Copyright © <span>{'Y'|date}</span>. All Rights Reserved.</p>
                        {literal}
                        <p class="footer-copyright m-0 d-flex align-items-center justify-content-between col-12 col-sm-6 col-md-5 col-lg-5" style="line-height:1;">
                            We Accept :
                            <svg viewBox="0 0 940 165" version="1.1" xmlns="http://www.w3.org/2000/svg" height="14" class="ml-2" style="padding-top:2px;">
                                <path fill="#FFFFFF" opacity="1.00" d=" M 263.55 0.00 L 265.46 0.00 C 271.02 0.53 277.81 1.88 280.49 7.43 C 282.61 11.31 279.34 16.58 274.95 16.51 C 271.23 16.89 269.22 13.32 266.74 11.25 C 263.31 7.91 258.12 5.96 253.42 7.54 C 248.50 9.19 245.19 13.84 243.96 18.72 C 240.73 30.33 240.43 42.65 241.41 54.56 C 248.87 55.25 256.40 54.18 263.83 55.05 C 264.54 57.32 264.81 61.27 261.93 62.09 C 255.10 62.69 248.21 61.79 241.38 62.43 C 240.47 75.90 241.28 89.49 240.99 103.01 C 241.20 107.42 240.22 112.37 242.75 116.29 C 246.18 118.30 250.41 117.75 254.21 118.31 C 254.07 119.80 253.91 121.28 253.76 122.77 C 241.55 122.07 229.28 121.94 217.08 122.74 C 216.95 121.49 216.89 120.23 216.88 118.98 C 219.64 116.97 224.18 118.53 226.48 115.56 C 227.79 113.32 227.79 110.60 227.95 108.08 C 227.59 95.73 227.79 83.36 227.76 71.00 C 227.66 68.21 228.31 65.31 227.45 62.59 C 225.00 61.86 222.42 62.40 219.92 62.19 C 217.91 62.71 217.36 60.46 217.91 59.01 C 220.80 56.55 225.64 56.25 227.52 52.81 C 228.39 39.17 229.60 24.48 238.24 13.24 C 243.96 5.06 253.66 0.33 263.55 0.00 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 21.04 10.24 C 30.94 8.88 40.97 9.08 50.94 8.74 C 64.13 8.86 78.38 8.69 89.88 16.13 C 99.08 22.76 103.97 34.76 102.24 45.95 C 101.50 52.80 98.25 59.51 92.66 63.69 C 86.98 67.71 80.83 71.31 73.99 72.94 C 60.56 76.23 46.52 76.73 32.81 75.09 C 21.76 73.92 10.96 71.22 0.00 69.45 L 0.00 69.23 C 19.62 70.52 39.37 72.70 59.00 70.45 C 66.71 69.56 74.79 67.12 80.04 61.07 C 86.57 53.80 87.54 43.20 85.71 33.96 C 84.39 26.99 79.95 20.50 73.44 17.45 C 67.12 14.39 59.87 14.12 52.99 14.64 C 50.71 14.58 49.89 17.01 50.02 18.89 C 49.96 35.17 50.03 51.46 49.99 67.75 C 45.33 67.75 40.67 67.75 36.01 67.75 C 35.87 52.79 36.37 37.80 35.47 22.85 C 35.45 19.97 33.95 16.93 31.05 16.02 C 27.83 15.05 24.43 14.99 21.13 14.54 C 21.08 13.11 21.06 11.68 21.04 10.24 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 501.82 13.15 C 501.40 11.58 501.46 8.34 503.94 8.94 C 512.83 9.40 521.75 9.42 530.65 8.91 C 530.62 17.27 534.20 24.93 537.52 32.41 C 545.76 50.01 555.11 67.09 563.20 84.76 C 565.66 89.94 568.28 95.05 570.86 100.17 C 576.66 91.09 580.62 81.02 585.52 71.46 C 591.72 58.42 598.54 45.69 604.62 32.59 C 608.26 24.97 612.37 17.35 613.38 8.83 C 622.88 9.57 632.43 9.29 641.94 8.89 C 642.04 10.30 642.13 11.70 642.20 13.11 C 637.19 13.83 630.36 13.29 627.60 18.51 C 625.52 24.10 626.46 30.19 626.25 36.02 C 625.93 55.34 627.19 74.63 627.59 93.94 C 628.09 100.26 627.54 106.73 628.93 112.95 C 630.68 117.93 636.73 117.72 641.04 118.18 C 643.58 118.39 641.96 121.25 642.02 122.80 C 628.01 121.98 613.93 121.93 599.93 122.83 C 599.69 121.42 598.83 119.91 599.55 118.51 C 603.21 117.28 607.61 118.37 610.91 115.92 C 613.55 113.79 613.10 110.01 613.27 106.99 C 613.09 82.05 613.01 57.12 612.70 32.19 C 607.72 40.14 604.02 48.77 600.11 57.26 C 591.15 76.66 580.26 95.10 571.76 114.71 C 569.97 117.69 569.53 121.53 567.02 124.01 C 566.56 123.98 565.64 123.91 565.19 123.87 C 563.12 120.39 562.39 116.24 560.54 112.62 C 551.06 92.36 541.47 72.16 532.05 51.88 C 528.88 45.25 526.47 38.28 523.16 31.71 C 521.51 56.80 520.17 81.95 520.17 107.10 C 520.63 110.33 520.59 114.41 523.51 116.52 C 526.98 118.28 531.05 117.75 534.81 118.31 C 535.05 119.66 535.79 122.34 533.89 122.66 C 521.64 122.13 509.31 121.89 497.06 122.80 C 496.72 121.30 496.47 119.78 496.72 118.25 C 500.60 117.73 504.88 117.63 508.17 115.21 C 510.81 112.60 510.90 108.59 511.45 105.13 C 513.92 78.82 515.45 52.43 516.28 26.01 C 516.24 22.50 516.30 18.12 513.08 15.88 C 509.60 14.11 505.65 13.58 501.82 13.15 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 412.38 42.61 C 413.46 43.13 415.45 42.64 415.89 43.99 C 416.17 47.51 415.77 51.07 416.38 54.58 C 423.70 54.90 431.03 54.76 438.35 54.67 C 440.04 57.00 439.51 59.94 438.20 62.31 C 431.02 62.07 423.83 62.55 416.67 61.99 C 416.00 63.58 415.39 65.24 415.49 67.00 C 415.51 77.35 415.49 87.70 415.51 98.05 C 415.67 102.51 415.93 107.14 417.79 111.28 C 419.97 115.72 425.42 117.47 430.05 116.89 C 432.71 116.16 435.02 114.60 437.38 113.23 C 438.09 114.40 439.72 115.91 438.23 117.19 C 433.51 122.48 426.09 124.90 419.12 124.61 C 414.79 124.20 409.87 123.55 406.86 120.03 C 403.83 116.82 402.82 112.30 402.75 108.01 C 402.66 93.41 402.90 78.80 402.65 64.20 C 402.35 60.92 398.12 62.61 395.97 62.21 C 393.41 62.89 393.62 60.00 393.81 58.36 C 397.93 57.03 402.20 55.51 405.41 52.48 C 408.26 49.61 410.35 46.09 412.38 42.61 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 181.69 50.71 C 182.60 50.23 184.47 49.23 184.58 51.01 C 184.97 54.85 184.64 58.71 184.79 62.56 C 189.69 58.83 194.38 54.28 200.50 52.68 C 203.97 51.64 208.13 52.54 210.50 55.39 C 213.15 59.37 211.03 66.13 206.04 67.01 C 200.81 68.59 197.20 62.32 191.91 63.33 C 186.50 64.17 184.92 70.45 184.82 75.10 C 184.65 86.71 184.79 98.33 184.74 109.95 C 184.72 112.60 185.22 115.95 188.06 117.03 C 191.41 118.12 195.03 117.70 198.44 118.56 C 198.27 119.95 198.09 121.34 197.89 122.73 C 185.90 122.28 173.82 121.67 161.85 122.87 C 161.55 121.40 161.33 119.92 161.18 118.43 C 165.18 117.85 171.41 117.42 171.41 111.99 C 171.64 98.31 171.41 84.62 171.52 70.94 C 171.47 68.88 171.69 66.44 170.02 64.91 C 168.06 63.04 164.69 62.10 164.74 58.86 C 170.39 56.14 176.19 53.72 181.69 50.71 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 732.72 52.68 C 734.77 51.58 736.70 50.15 739.07 49.79 C 739.38 53.37 739.04 56.97 739.43 60.54 C 739.69 60.63 740.19 60.80 740.45 60.89 C 746.66 57.40 753.02 53.73 760.18 52.66 C 766.16 51.67 772.87 52.46 777.77 56.27 C 782.31 60.10 784.66 66.12 784.75 71.98 C 784.82 83.96 784.61 95.95 784.84 107.94 C 785.14 110.68 784.66 114.02 786.80 116.15 C 789.35 118.06 792.76 117.74 795.75 118.36 C 795.96 119.92 795.74 121.44 795.09 122.86 C 784.11 121.87 773.02 122.02 762.04 122.77 C 761.68 121.28 761.47 119.76 761.82 118.26 C 765.18 117.66 770.50 117.87 771.36 113.56 C 772.57 104.43 771.77 95.17 772.00 85.99 C 771.83 79.63 772.82 72.60 769.20 66.96 C 766.27 62.20 760.28 60.70 755.04 60.75 C 750.53 60.92 745.86 62.33 742.55 65.51 C 740.33 67.72 739.22 70.90 739.24 74.00 C 739.24 85.67 739.27 97.35 739.23 109.02 C 739.26 111.45 739.27 114.22 741.00 116.14 C 743.34 117.81 746.37 117.76 749.10 118.29 C 749.11 119.78 749.00 121.27 748.80 122.76 C 737.86 122.03 726.83 121.89 715.90 122.83 C 715.68 121.31 715.57 119.77 715.56 118.23 C 718.74 117.64 723.03 118.22 724.98 115.00 C 726.04 112.16 725.94 109.03 726.02 106.03 C 725.93 93.67 726.10 81.30 725.94 68.94 C 726.15 64.89 722.12 62.94 719.31 60.97 C 719.51 60.33 719.90 59.05 720.10 58.40 C 724.29 56.47 728.64 54.87 732.72 52.68 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 114.89 57.89 C 122.39 52.91 132.00 50.92 140.77 53.23 C 147.00 54.60 152.44 58.88 155.57 64.39 C 157.90 68.46 157.93 73.42 156.91 77.88 C 152.32 78.80 147.64 78.46 143.00 78.50 C 133.30 78.50 123.61 78.50 113.92 78.49 C 112.79 78.54 110.73 78.39 110.86 80.13 C 110.28 86.57 111.50 93.16 114.06 99.09 C 117.35 106.68 124.37 112.70 132.58 114.18 C 137.35 114.98 142.58 115.37 146.96 112.94 C 150.27 111.52 152.35 108.49 154.95 106.16 C 156.30 106.21 157.20 107.24 158.14 108.05 C 155.27 113.85 150.67 118.94 144.61 121.45 C 131.04 128.13 112.05 124.27 104.13 110.79 C 98.63 101.96 97.98 90.96 99.92 80.96 C 101.71 71.73 107.16 63.25 114.89 57.89 M 121.65 60.63 C 117.21 63.36 112.75 67.47 112.38 73.00 C 121.31 72.93 130.26 73.27 139.17 72.48 C 140.64 72.33 142.15 72.17 143.51 71.53 C 145.42 67.56 143.91 62.15 139.95 60.03 C 134.42 56.59 127.04 57.20 121.65 60.63 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 274.69 61.63 C 282.49 53.95 294.33 50.44 305.00 53.19 C 315.74 55.34 324.97 66.78 321.30 77.92 C 316.92 78.77 312.44 78.47 308.01 78.50 C 298.34 78.50 288.66 78.50 278.98 78.49 C 277.59 78.62 275.50 78.12 275.27 80.06 C 274.75 86.43 275.89 92.95 278.38 98.84 C 281.62 106.46 288.58 112.62 296.82 114.11 C 301.34 114.91 306.25 115.36 310.55 113.36 C 314.21 111.92 316.83 108.87 319.35 105.98 C 320.51 106.41 322.82 107.15 322.13 108.80 C 316.58 120.43 302.51 126.33 290.12 124.23 C 281.61 123.20 273.29 118.64 268.79 111.19 C 263.72 103.19 262.51 93.28 263.84 84.04 C 264.93 75.68 268.52 67.48 274.69 61.63 M 276.63 72.92 C 287.05 72.94 297.56 73.52 307.89 71.85 C 309.85 67.68 308.32 61.91 304.05 59.84 C 293.69 53.89 278.93 61.53 276.63 72.92 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 351.72 54.81 C 362.02 51.64 373.63 50.90 383.67 55.38 C 386.84 58.11 387.03 63.48 384.86 66.89 C 383.87 68.77 380.92 69.06 379.79 67.15 C 375.29 62.13 368.98 58.06 361.99 58.48 C 354.41 58.58 347.44 63.11 343.47 69.42 C 336.77 81.21 338.49 97.22 348.06 106.97 C 354.45 114.04 364.99 116.23 374.00 113.86 C 379.24 112.54 382.97 108.28 386.02 104.09 C 387.05 104.98 388.97 105.43 389.00 107.08 C 386.10 114.64 379.17 119.82 371.87 122.74 C 360.21 126.85 346.21 124.49 336.98 116.13 C 327.16 106.68 325.12 91.44 328.75 78.76 C 331.76 67.60 340.94 58.58 351.72 54.81 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 672.59 52.78 C 682.91 51.10 694.22 53.75 702.09 60.82 C 712.52 70.24 715.69 85.87 711.92 99.12 C 709.41 109.04 702.27 117.84 692.71 121.72 C 682.59 125.72 670.85 125.60 660.89 121.13 C 652.46 117.22 646.14 109.38 643.56 100.50 C 639.96 87.27 642.77 71.69 653.12 62.14 C 658.45 57.12 665.40 53.98 672.59 52.78 M 671.42 58.60 C 668.04 59.70 665.15 62.02 663.13 64.90 C 657.60 72.33 656.64 82.05 657.09 91.02 C 657.97 100.11 660.80 109.89 668.30 115.75 C 675.46 121.05 687.41 120.30 692.49 112.45 C 697.98 104.57 699.09 94.46 698.34 85.11 C 697.48 77.08 694.93 68.77 689.11 62.92 C 684.74 58.16 677.48 56.59 671.42 58.60 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 808.70 62.66 C 816.58 54.35 828.98 50.25 840.17 53.22 C 849.91 55.19 858.26 64.88 857.04 75.04 C 857.01 77.74 854.13 78.60 851.90 78.49 C 839.26 78.53 826.62 78.49 813.98 78.49 C 812.54 78.58 810.61 78.20 810.09 79.98 C 809.35 90.72 812.71 102.59 821.56 109.37 C 827.19 113.93 834.79 115.38 841.85 114.56 C 846.97 113.63 851.09 110.06 854.13 106.00 C 855.41 106.46 858.12 107.06 857.09 109.03 C 851.15 120.77 836.68 126.67 824.03 124.07 C 815.12 122.88 806.98 117.31 802.76 109.36 C 795.02 94.57 797.29 74.97 808.70 62.66 M 811.77 72.93 C 821.13 73.00 830.52 73.29 839.84 72.34 C 841.16 72.04 843.11 72.20 843.46 70.50 C 844.59 66.76 843.11 62.31 839.68 60.29 C 829.40 53.52 813.99 61.28 811.77 72.93 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 862.19 54.42 C 872.48 54.72 882.78 55.03 893.07 54.38 C 895.53 54.00 894.84 56.98 895.02 58.50 C 892.13 59.17 889.13 59.61 886.45 60.95 C 886.74 65.48 888.63 69.70 889.98 73.98 C 893.92 84.45 896.76 95.35 901.59 105.47 C 905.56 97.88 908.94 90.01 912.24 82.12 C 915.03 75.41 917.98 68.72 919.85 61.67 C 916.75 59.46 912.89 59.20 909.28 58.47 C 909.44 57.06 909.64 55.65 909.86 54.24 C 918.27 54.84 926.73 54.98 935.16 54.50 C 936.76 54.41 938.40 54.49 940.00 54.79 L 940.00 58.21 C 936.83 59.06 933.39 59.68 930.94 62.03 C 928.12 64.70 926.37 68.25 924.51 71.60 C 910.07 99.88 897.17 128.90 883.58 157.59 C 881.43 162.76 875.57 166.11 870.08 164.20 C 864.27 162.96 863.61 154.19 868.37 151.30 C 871.67 149.28 876.01 151.25 879.30 149.22 C 882.09 146.58 883.74 142.99 885.62 139.69 C 888.21 134.48 891.35 129.39 892.37 123.57 C 893.18 119.65 892.18 115.65 890.86 111.96 C 885.47 97.41 879.96 82.90 874.72 68.29 C 873.61 65.61 872.48 62.61 869.89 61.01 C 867.33 59.54 864.31 59.26 861.50 58.59 C 861.70 57.21 861.21 55.58 862.19 54.42 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 36.00 79.72 C 40.64 80.29 45.32 80.71 50.00 80.37 C 50.02 88.58 49.96 96.79 50.02 104.99 C 50.19 108.86 50.45 113.62 54.06 115.95 C 57.64 118.06 61.99 117.47 65.91 118.30 C 67.15 119.48 66.11 121.32 66.15 122.78 C 51.38 122.15 36.56 121.79 21.80 122.87 C 21.62 121.39 20.42 119.30 22.05 118.28 C 25.56 117.49 29.58 117.87 32.51 115.42 C 34.97 113.86 35.06 110.70 35.41 108.12 C 36.09 98.67 36.01 89.19 36.00 79.72 Z" />
                            </svg>

                            <svg viewBox="0 0 332 74" version="1.1" xmlns="http://www.w3.org/2000/svg" height="8" class="ml-2">
                                <path fill="#FFFFFF" opacity="1.00" d=" M 0.00 0.00 L 25.18 0.00 C 32.66 0.88 41.07 2.71 45.86 9.07 C 49.97 15.49 50.31 23.63 49.22 30.98 C 48.36 37.45 44.65 43.75 38.63 46.61 C 31.14 50.42 22.52 49.93 14.37 49.91 C 14.38 57.94 14.34 65.97 14.40 74.00 L 0.00 74.00 L 0.00 0.00 M 14.40 12.01 C 14.41 20.51 14.39 29.00 14.41 37.50 C 18.88 37.51 23.59 38.08 27.80 36.16 C 31.69 34.35 33.42 29.78 33.27 25.70 C 33.56 21.63 32.94 17.03 29.54 14.32 C 25.22 11.01 19.44 12.23 14.40 12.01 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 71.33 0.00 L 84.95 0.00 C 93.44 24.66 101.91 49.33 110.37 74.00 L 96.09 74.00 C 94.20 68.86 92.36 63.70 90.58 58.52 C 82.31 58.19 74.07 59.06 65.80 58.92 C 64.10 63.94 62.46 68.98 60.75 74.00 L 46.55 74.00 C 54.82 49.34 63.19 24.71 71.33 0.00 M 77.64 23.75 C 75.06 31.22 72.70 38.77 70.01 46.20 C 75.56 46.17 81.12 46.25 86.67 46.15 C 83.88 38.37 81.14 30.56 78.48 22.73 C 78.27 22.99 77.85 23.50 77.64 23.75 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 106.68 0.00 L 122.32 0.00 C 126.70 9.01 130.78 18.18 135.05 27.25 C 139.36 18.18 143.55 9.06 147.88 0.00 L 163.48 0.00 C 156.56 14.64 149.93 29.41 143.00 44.05 C 142.19 45.56 142.08 47.29 142.11 48.97 C 142.16 57.32 142.13 65.66 142.14 74.00 L 127.90 74.00 C 127.89 65.32 127.89 56.64 127.91 47.97 C 128.07 46.03 127.16 44.29 126.37 42.59 C 119.72 28.43 113.45 14.10 106.68 0.00 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 172.68 0.00 L 213.34 0.00 C 213.56 4.00 213.43 8.00 213.44 12.00 C 204.63 12.01 195.82 11.99 187.00 12.01 C 187.00 17.98 186.99 23.95 187.01 29.92 C 194.47 29.92 201.93 29.91 209.39 29.92 C 209.39 34.16 209.38 38.40 209.43 42.65 C 201.96 42.65 194.48 42.64 187.01 42.65 C 187.00 49.27 186.98 55.90 187.02 62.53 C 197.05 62.50 207.09 62.56 217.12 62.49 C 217.07 66.33 217.07 70.16 217.12 74.00 L 172.69 74.00 C 172.66 49.33 172.69 24.67 172.68 0.00 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 226.00 0.00 L 267.05 0.00 C 267.04 4.00 267.05 7.99 267.04 11.99 C 258.13 12.02 249.23 11.97 240.32 12.02 C 240.33 17.98 240.33 23.94 240.33 29.90 C 247.88 29.95 255.44 29.90 262.99 29.92 C 263.01 34.17 263.01 38.41 262.98 42.65 C 255.44 42.64 247.89 42.65 240.35 42.64 C 240.31 49.27 240.33 55.89 240.34 62.52 C 250.42 62.51 260.50 62.54 270.58 62.50 C 270.56 66.33 270.56 70.17 270.58 74.00 L 226.01 74.00 C 226.01 49.33 226.02 24.67 226.00 0.00 Z" />
                                <path fill="#FFFFFF" opacity="1.00" d=" M 279.24 0.00 L 308.43 0.00 C 313.52 0.47 318.95 1.59 322.81 5.18 C 328.89 11.55 330.43 21.37 327.82 29.62 C 325.68 35.67 320.18 39.85 314.55 42.49 C 320.22 52.83 326.04 63.09 332.00 73.27 L 332.00 74.00 L 316.05 74.00 C 310.22 64.12 304.76 54.01 299.12 44.02 C 297.12 44.06 295.13 44.09 293.13 44.11 C 293.12 54.07 293.13 64.04 293.13 74.00 L 279.27 74.00 C 279.23 49.33 279.29 24.67 279.24 0.00 M 293.13 12.01 C 293.13 18.67 293.13 25.33 293.13 32.00 C 297.12 31.94 301.12 32.19 305.10 31.87 C 308.80 31.59 312.46 28.95 312.88 25.08 C 313.09 21.54 313.64 17.10 310.66 14.49 C 305.51 10.94 298.98 12.23 293.13 12.01 Z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000" width="16" height="16" class="ml-2">
                                <path d="M1970,1242c-133.48,535.66-676.18,861.68-1212,728S-103.69,1293.89,30,758.18,706.12-103.7,1241.82,30,2103.69,706.16,1970,1242h0Z" fill="#2D2F3A"></path>
                                <path d="M1441,857.53c19.88-133.07-81.44-204.61-220-252.33l45-180.25-109.76-27.34-43.84,175.51c-28.82-7.18-58.44-14-87.88-20.68l44-176.67L958.87,348.43,914,528.61,692.68,473.79,663.48,591s81.42,18.66,79.7,19.82c44.44,11.1,52.5,40.5,51.14,63.82l-123.14,493.8c-5.44,13.5-19.22,33.74-50.28,26,1.1,1.6-79.76-20-79.76-20l-54.48,125.79,221,55.8-45.42,182.35,109.6,27.34,45-180.39c30,8.12,59,15.62,87.42,22.68l-44.82,179.55,109.74,27.34,45.42-182c187.13,35.4,327.85,21.12,387-148,47.72-136.25-2.34-214.85-100.8-266.13,71.7-16.6,125.7-63.74,140.11-161.17m-250.71,351.52c-34,136.25-263.35,62.62-337.77,44.12l60.26-241.55c74.38,18.56,312.89,55.32,277.55,197.41m34-353.5c-30.94,124-221.91,61-283.89,45.54L994.91,682c62,15.48,261.51,44.3,229.25,173.59" fill="white"></path>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0.847 0.876 329.254 329.256" class="ml-2">
                                <path d="M330.102 165.503c0 90.922-73.705 164.629-164.626 164.629C74.554 330.132.848 256.425.848 165.503.848 74.582 74.554.876 165.476.876c90.92 0 164.626 73.706 164.626 164.627" fill="#2D2F3A"></path>
                                <path d="M155.854 209.482l10.693-40.264 25.316-9.249 6.297-23.663-.215-.587-24.92 9.104 17.955-67.608h-50.921l-23.481 88.23-19.605 7.162-6.478 24.395 19.59-7.156-13.839 51.998h135.521l8.688-32.362h-84.601" fill="white"></path>
                            </svg>

                            <svg width="16" height="16" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" class="ml-2">
                                <path fill="#2D2F3A" opacity="1.00" d=" M 497.70 0.00 L 526.26 0.00 C 541.19 1.50 556.26 1.41 571.13 3.64 C 621.31 9.47 670.64 22.70 716.91 43.02 C 780.69 70.90 838.56 112.09 885.98 163.02 C 931.19 211.44 966.87 268.76 990.28 330.74 C 1009.82 382.35 1020.72 437.16 1022.88 492.28 C 1023.15 503.19 1022.93 514.11 1023.00 525.03 C 1020.64 626.57 986.85 727.10 927.40 809.47 C 907.56 837.46 884.42 862.96 859.48 886.48 C 832.50 911.44 802.88 933.60 771.18 952.22 C 690.90 999.79 597.27 1024.36 504.00 1022.74 C 448.66 1021.99 393.47 1011.97 341.30 993.53 C 278.96 971.54 221.16 937.05 171.80 893.12 C 158.77 881.52 146.69 868.92 134.54 856.41 C 120.28 840.24 106.39 823.68 94.12 805.93 C 32.55 719.09 -0.76 612.48 1.00 506.00 C 0.93 470.99 5.36 436.06 12.64 401.85 C 26.70 337.52 53.40 276.00 90.81 221.80 C 132.98 160.50 188.69 108.53 252.83 70.81 C 317.56 32.41 391.01 9.08 465.92 2.24 C 476.48 1.08 487.16 1.26 497.70 0.00 Z"></path>
                                <path fill="white" opacity="1.00" d=" M 511.17 111.81 C 512.93 113.18 513.80 115.28 514.90 117.16 C 520.73 126.66 526.34 136.30 532.16 145.81 C 534.53 149.70 536.75 153.69 539.24 157.51 C 540.55 159.60 541.81 161.72 543.11 163.82 C 544.30 165.97 545.69 168.01 546.88 170.17 C 552.70 179.68 558.33 189.31 564.14 198.82 C 565.34 200.97 566.71 203.02 567.92 205.17 C 569.00 206.97 570.05 208.80 571.23 210.55 C 579.47 224.33 587.86 238.02 596.10 251.80 C 606.64 269.54 617.42 287.12 628.07 304.78 C 635.05 316.48 642.06 328.16 649.10 339.82 C 652.73 345.82 656.44 351.78 660.05 357.81 C 667.02 369.49 674.01 381.16 681.06 392.79 C 683.58 397.04 686.10 401.30 688.73 405.48 C 693.17 412.66 697.42 419.95 701.82 427.16 C 705.51 433.40 709.29 439.60 713.03 445.82 C 719.96 457.27 726.68 468.83 733.78 480.17 C 740.77 491.85 747.79 503.51 754.81 515.17 C 755.67 516.67 756.74 518.08 757.18 519.80 C 745.32 526.16 733.94 533.46 722.25 540.15 C 716.58 543.50 710.94 546.90 705.23 550.18 C 696.93 555.25 688.41 559.94 680.16 565.08 C 668.08 571.97 656.18 579.16 644.22 586.25 C 630.17 594.44 616.19 602.80 602.17 611.05 C 596.55 614.49 590.78 617.65 585.17 621.09 C 578.83 624.74 572.53 628.44 566.28 632.24 C 550.98 641.20 535.72 650.24 520.48 659.30 C 517.65 660.79 515.02 662.61 512.26 664.21 C 508.60 663.99 505.88 660.67 502.52 659.29 C 488.78 651.13 475.03 642.99 461.24 634.92 C 455.56 631.55 449.91 628.13 444.18 624.85 C 442.03 623.65 439.99 622.29 437.86 621.10 C 432.22 617.68 426.46 614.48 420.83 611.05 C 418.97 609.96 417.11 608.89 415.35 607.66 C 396.70 597.08 378.46 585.76 359.84 575.11 C 354.18 571.75 348.65 568.14 342.82 565.07 C 328.88 556.62 314.74 548.51 300.75 540.15 C 289.18 533.42 277.75 526.43 266.12 519.80 C 265.71 518.21 267.16 517.09 267.81 515.84 C 285.49 486.21 303.51 456.80 321.18 427.16 C 328.06 415.68 335.00 404.23 341.94 392.79 C 348.98 381.16 355.96 369.50 362.94 357.84 C 366.64 351.85 370.12 345.73 373.90 339.81 C 380.95 328.17 387.92 316.49 394.92 304.83 C 404.25 289.22 413.77 273.76 423.12 258.17 C 424.30 256.02 425.70 253.99 426.88 251.83 C 436.25 236.26 445.62 220.69 455.08 205.17 C 456.28 203.02 457.67 200.98 458.85 198.82 C 464.68 189.32 470.30 179.68 476.12 170.17 C 477.31 168.01 478.69 165.97 479.89 163.81 C 481.19 161.72 482.44 159.59 483.76 157.50 C 486.25 153.69 488.46 149.69 490.85 145.80 C 496.65 136.28 502.29 126.66 508.10 117.14 C 509.12 115.36 510.19 113.61 511.17 111.81 Z M 269.13 570.77 C 268.30 569.40 266.75 568.37 266.68 566.65 C 272.07 569.12 276.84 572.75 282.09 575.49 C 295.78 583.62 309.50 591.70 323.22 599.79 C 341.36 610.63 359.70 621.15 377.78 632.09 C 385.72 636.43 393.33 641.35 401.20 645.81 C 419.35 656.60 437.59 667.26 455.73 678.08 C 461.40 681.48 467.18 684.68 472.83 688.14 C 474.97 689.33 477.02 690.69 479.16 691.90 C 484.89 695.15 490.51 698.59 496.18 701.94 C 501.41 704.93 506.58 708.02 511.74 711.13 C 514.42 708.88 517.65 707.44 520.58 705.54 C 528.42 701.15 536.01 696.32 543.84 691.91 C 545.97 690.69 548.02 689.32 550.18 688.14 C 574.02 673.99 597.98 660.04 621.78 645.82 C 647.81 630.55 673.81 615.21 699.77 599.82 C 707.65 595.37 715.30 590.54 723.19 586.09 C 733.76 579.46 744.91 573.74 755.30 566.85 C 755.61 567.08 756.24 567.54 756.55 567.77 C 753.09 571.35 750.74 575.82 747.68 579.73 C 744.48 584.49 740.90 588.98 737.74 593.77 C 730.45 603.85 723.31 614.02 716.15 624.19 C 714.94 625.64 713.80 627.15 712.84 628.79 C 708.19 635.20 703.66 641.71 699.10 648.18 C 696.42 651.83 693.71 655.48 691.22 659.27 C 689.98 660.69 688.86 662.21 687.89 663.82 C 680.81 674.06 673.35 684.05 666.28 694.29 C 652.37 713.73 638.62 733.27 624.68 752.69 C 610.76 772.40 596.78 792.10 582.73 811.71 C 581.39 813.99 579.72 816.06 578.14 818.19 C 574.87 823.17 571.07 827.79 567.91 832.85 C 565.53 835.87 563.48 839.14 561.12 842.18 C 558.60 845.94 555.91 849.58 553.22 853.22 C 550.53 857.41 547.57 861.44 544.57 865.42 C 541.97 869.48 539.00 873.29 536.21 877.22 C 529.82 886.44 523.24 895.53 516.76 904.69 C 514.67 907.01 513.51 910.05 511.15 912.14 C 503.65 900.11 494.64 889.06 486.82 877.23 C 484.00 873.30 481.03 869.48 478.42 865.41 C 475.43 861.43 472.46 857.42 469.79 853.22 C 467.08 849.59 464.40 845.93 461.88 842.18 C 456.09 834.25 450.50 826.18 444.84 818.16 C 436.45 806.55 428.23 794.82 419.93 783.15 C 412.73 772.97 405.39 762.88 398.29 752.65 C 379.47 726.17 360.53 699.78 341.91 673.17 C 339.51 670.15 337.47 666.88 335.11 663.84 C 334.14 662.21 333.01 660.69 331.80 659.25 C 311.08 629.64 289.99 600.29 269.13 570.77 Z"></path>
                            </svg>

                            <svg width="16" height="16" viewBox="0 0 1243 1243" version="1.1" xmlns="http://www.w3.org/2000/svg" class="ml-2">
                                <path fill="#2D2F3A" opacity="1.00" d=" M 614.71 0.00 L 628.02 0.00 C 666.58 0.68 705.15 4.35 742.98 11.97 C 820.46 27.26 894.89 57.69 960.95 100.96 C 1036.38 150.20 1100.90 216.05 1148.61 292.46 C 1192.43 362.46 1222.02 441.33 1234.92 522.90 C 1250.00 617.80 1243.09 716.21 1214.20 807.90 C 1191.42 880.61 1154.91 948.95 1107.39 1008.50 C 1059.87 1068.12 1001.33 1118.94 935.56 1157.52 C 863.21 1200.06 782.11 1227.63 698.81 1237.87 C 605.75 1249.44 510.04 1240.03 421.24 1209.72 C 343.39 1183.35 271.00 1141.10 209.50 1086.57 C 172.46 1053.75 139.33 1016.52 111.08 975.89 C 68.92 915.41 37.67 847.33 19.46 775.88 C 8.06 731.48 1.73 685.79 0.37 639.97 C 0.09 635.08 0.47 630.17 0.00 625.29 L 0.00 617.59 C 0.50 612.06 0.06 606.51 0.44 600.98 C 2.14 547.14 10.84 493.51 26.39 441.93 C 48.60 367.97 84.93 298.31 132.69 237.63 C 174.11 184.95 224.04 138.96 280.04 102.13 C 342.64 60.82 412.83 31.05 486.07 14.84 C 528.28 5.38 571.49 0.72 614.71 0.00 Z"></path>
                                <path fill="white" opacity="1.00" d=" M 472.15 349.21 C 551.08 349.30 630.00 349.22 708.93 349.25 C 754.13 349.25 800.33 352.65 842.86 369.13 C 872.32 380.45 899.46 399.46 917.18 425.89 C 934.99 451.77 943.29 483.02 946.02 514.01 C 948.87 546.52 946.19 579.25 941.26 611.43 C 934.85 653.31 924.23 694.81 906.49 733.40 C 890.96 767.31 869.75 798.96 842.21 824.29 C 816.14 848.66 784.22 866.19 750.49 877.47 C 725.53 885.91 699.24 889.64 673.04 891.48 C 645.41 893.56 617.70 892.90 590.02 893.00 C 518.82 893.00 447.63 893.00 376.44 893.00 C 383.19 855.25 389.94 817.50 396.72 779.76 C 440.82 779.82 484.92 779.54 529.00 780.00 C 555.33 780.00 581.66 780.00 607.98 780.00 C 639.94 779.95 672.40 777.30 702.78 766.73 C 717.49 761.57 731.62 754.46 743.95 744.85 C 756.33 735.30 766.78 723.30 774.72 709.84 C 783.22 695.61 789.10 679.97 793.69 664.08 C 798.99 645.31 803.43 626.30 806.88 607.11 C 809.48 591.92 811.74 576.55 811.39 561.11 C 811.02 543.00 807.76 524.39 798.23 508.72 C 789.91 494.86 776.72 484.45 762.11 477.84 C 742.74 469.00 721.44 465.53 700.38 463.83 C 677.29 462.13 654.14 462.94 631.02 462.75 C 598.34 462.75 565.67 462.75 533.00 462.75 C 505.98 462.39 478.95 462.53 451.92 462.50 C 458.58 424.72 465.41 386.97 472.15 349.21 Z"></path>
                                <path fill="white" opacity="1.00" d=" M 343.14 566.70 C 356.21 563.72 369.66 564.62 382.95 564.50 C 460.90 564.50 538.86 564.48 616.82 564.51 C 614.02 578.42 610.71 592.23 607.46 606.04 C 603.93 621.07 600.45 636.62 591.56 649.55 C 583.75 661.35 571.41 669.73 557.90 673.63 C 546.62 677.06 534.75 677.86 523.02 677.76 C 441.09 677.74 359.17 677.78 277.24 677.73 C 280.16 663.92 283.32 650.16 286.60 636.43 C 290.43 620.16 294.18 603.09 304.71 589.63 C 313.92 577.33 328.26 569.70 343.14 566.70 Z"></path>
                            </svg>

                            <svg width="24" height="16" viewBox="0 0 1471 907" version="1.1" xmlns="http://www.w3.org/2000/svg" class="ml-2">
                                <path fill="#2D2F3A" opacity="1.00" d=" M 0.00 0.00 L 413.78 0.00 C 409.93 3.47 405.68 6.43 401.53 9.52 C 387.97 19.47 375.04 30.26 362.58 41.54 C 354.94 47.88 348.34 55.33 341.21 62.22 C 334.82 68.83 327.90 74.96 321.99 82.03 C 291.99 115.07 266.50 152.08 245.27 191.30 C 237.37 206.89 229.37 222.44 222.81 238.66 C 215.64 256.59 208.70 274.66 203.48 293.27 C 198.36 309.75 194.86 326.67 191.30 343.54 C 185.79 372.36 181.90 401.60 181.50 430.95 C 180.14 441.25 180.63 451.67 180.78 462.03 C 182.23 470.74 181.07 479.59 182.30 488.32 C 184.00 515.41 188.10 542.33 193.91 568.84 C 197.54 587.32 202.73 605.49 208.87 623.29 C 232.74 696.30 272.90 763.70 324.38 820.59 C 329.64 826.66 335.64 832.02 341.22 837.79 C 348.00 844.34 354.28 851.45 361.58 857.46 C 374.54 869.25 388.13 880.36 402.17 890.83 C 406.24 893.62 410.20 896.57 413.76 900.00 L 0.00 900.00 L 0.00 0.00 Z M 699.74 0.00 L 758.27 0.00 C 761.76 0.80 765.34 1.07 768.91 1.29 C 821.35 5.70 873.00 19.61 920.46 42.37 C 926.20 44.80 931.86 47.45 937.20 50.68 C 1007.86 87.25 1068.06 143.41 1110.16 210.87 C 1115.79 219.18 1120.10 228.27 1125.13 236.94 C 1134.96 255.16 1143.29 274.17 1150.62 293.53 C 1158.04 312.56 1163.15 332.39 1167.85 352.24 C 1173.56 378.48 1176.74 405.21 1178.18 432.00 C 1178.13 444.00 1178.13 456.00 1178.18 468.00 C 1176.73 493.92 1173.88 519.83 1168.31 545.21 C 1160.02 584.08 1146.43 621.80 1128.20 657.11 C 1123.82 665.12 1119.48 673.16 1115.03 681.13 C 1098.44 707.82 1079.88 733.40 1058.34 756.34 C 1046.22 767.88 1035.22 780.61 1022.23 791.20 C 992.93 816.77 960.14 838.34 925.11 855.23 C 886.04 874.78 843.79 887.62 800.73 894.71 C 791.51 895.95 782.34 897.55 773.05 898.10 C 771.44 898.05 770.31 899.28 769.03 900.00 L 688.96 900.00 C 687.97 899.22 686.91 898.62 685.79 898.21 C 635.46 893.76 585.95 880.36 540.17 859.02 C 523.41 851.71 507.65 842.35 491.92 833.08 C 436.75 798.55 388.90 752.22 353.34 697.65 C 347.74 690.31 343.88 681.88 338.87 674.16 C 333.94 666.40 330.28 657.95 326.08 649.79 C 321.10 640.14 316.71 630.20 312.75 620.09 C 292.52 571.64 281.79 519.40 279.82 466.99 C 279.99 453.98 279.72 440.97 279.93 427.96 C 280.65 421.23 280.83 414.45 281.47 407.72 C 285.51 363.33 296.02 319.49 313.17 278.33 C 325.26 249.13 340.11 221.06 358.00 194.99 C 373.80 172.51 390.96 150.86 410.70 131.69 C 416.30 126.28 421.44 120.37 427.50 115.45 C 467.36 79.33 513.79 50.49 563.78 30.63 C 603.51 14.91 645.57 5.20 688.10 1.25 C 691.99 1.05 695.93 0.94 699.74 0.00 Z  M 1044.17 0.00 L 1460.00 0.00 L 1460.00 900.00 L 1043.25 900.00 C 1048.30 895.00 1054.56 891.52 1060.03 887.04 C 1074.70 875.83 1088.74 863.81 1102.32 851.31 C 1108.62 844.95 1114.97 838.63 1121.29 832.30 C 1133.89 820.16 1145.11 806.69 1156.16 793.15 C 1181.26 761.82 1202.88 727.72 1220.78 691.79 C 1229.71 674.13 1237.08 655.71 1244.04 637.19 C 1251.51 616.05 1258.55 594.68 1262.89 572.65 C 1265.73 561.67 1267.58 550.48 1269.58 539.34 C 1273.27 515.41 1276.28 491.27 1276.50 467.05 C 1277.95 455.10 1277.65 442.99 1276.40 431.05 C 1276.65 420.60 1275.44 410.22 1274.62 399.83 C 1272.44 375.97 1268.73 352.24 1263.35 328.88 C 1250.76 270.50 1227.36 214.66 1196.32 163.72 C 1175.73 130.53 1152.15 99.10 1124.92 71.06 C 1117.16 61.17 1107.01 53.66 1098.29 44.71 C 1085.64 33.27 1072.53 22.34 1058.94 12.03 C 1054.07 7.95 1048.19 5.04 1044.17 0.00 Z"></path>
                                <path fill="white" opacity="1.00" d=" M 670.69 172.92 C 686.56 168.48 702.39 163.67 718.66 160.87 C 726.88 187.27 732.18 214.45 739.79 241.02 C 769.92 238.95 801.34 233.54 830.68 243.39 C 847.44 248.95 862.32 260.49 870.95 276.03 C 885.35 298.80 893.70 328.46 882.39 354.29 C 878.21 367.34 868.21 377.03 860.22 387.72 C 879.40 389.62 899.51 392.20 916.01 402.99 C 929.74 411.24 939.53 424.59 945.96 439.03 C 953.78 456.90 957.93 476.43 957.78 495.95 C 956.28 526.00 942.00 555.53 917.98 573.98 C 893.14 593.29 862.68 602.50 833.84 613.98 C 838.24 641.48 846.60 668.09 853.17 695.09 C 837.25 700.44 820.88 704.47 804.31 707.15 C 796.55 681.25 791.30 654.68 783.83 628.71 C 770.36 628.79 757.62 633.43 744.66 636.39 C 748.42 664.07 758.82 690.34 763.22 717.91 C 747.44 722.56 731.13 725.05 715.39 729.88 C 707.40 703.13 701.43 675.84 694.75 648.76 C 661.20 654.77 628.27 663.80 595.26 672.20 C 592.96 652.06 592.27 631.77 589.95 611.64 C 601.19 607.51 613.23 606.91 624.68 603.66 C 630.56 601.32 637.70 598.15 639.38 591.36 C 642.43 572.15 633.93 554.03 629.24 535.87 C 614.57 477.71 600.48 419.41 585.64 361.31 C 583.22 353.36 577.84 345.47 569.19 343.72 C 550.72 340.28 533.72 349.49 516.18 353.33 C 510.46 336.17 507.53 318.25 501.98 301.05 C 534.95 292.00 568.31 284.48 601.45 276.06 C 596.31 248.75 587.69 222.24 581.69 195.12 C 597.84 190.42 614.31 186.91 630.65 182.92 C 637.30 209.01 643.88 235.12 650.00 261.34 C 662.94 258.84 675.59 255.13 688.30 251.66 C 685.56 224.78 675.07 199.49 670.69 172.92 M 666.85 319.29 C 667.45 323.84 668.07 328.42 669.02 332.93 C 675.60 361.55 682.91 390.00 690.93 418.25 C 714.69 415.51 737.70 407.72 759.01 396.99 C 772.52 389.62 785.88 380.07 793.07 366.05 C 801.25 350.81 795.14 331.83 784.54 319.45 C 774.20 308.35 758.76 303.99 743.99 304.10 C 717.55 304.28 692.07 312.14 666.85 319.29 M 702.75 468.17 C 704.01 476.32 706.66 484.14 708.85 492.07 C 716.63 520.25 722.14 549.01 730.08 577.15 C 762.94 568.04 798.02 562.92 827.38 544.41 C 837.00 539.03 844.66 530.65 850.26 521.25 C 857.89 508.27 859.01 491.84 853.02 478.00 C 845.77 462.09 828.73 452.17 811.69 450.41 C 774.44 447.16 738.15 458.12 702.75 468.17 Z"></path>
                            </svg>

                            <svg width="16" height="16" viewBox="0 0 602 602" version="1.1" xmlns="http://www.w3.org/2000/svg" class="ml-2">
                                <path fill="#2D2F3A" opacity="1.00" d=" M 286.35 1.34 C 329.53 -0.72 373.20 6.45 413.29 22.70 C 484.93 51.40 544.40 108.95 575.40 179.62 C 591.66 216.17 600.23 256.03 600.99 296.00 C 601.56 335.50 594.45 375.14 579.81 411.86 C 556.69 470.29 514.55 520.91 461.45 554.49 C 429.56 574.76 393.77 588.89 356.62 595.79 C 284.00 609.73 206.38 595.50 143.59 556.41 C 89.70 523.26 46.75 472.66 23.00 414.01 C 8.35 378.26 1.03 339.61 0.98 301.00 C 0.95 249.40 14.32 197.80 39.97 152.99 C 69.46 100.90 114.92 58.02 168.66 31.66 C 205.24 13.54 245.60 3.34 286.35 1.34 Z"></path>
                                <path fill="white" opacity="1.00" d=" M 204.29 139.07 C 206.18 138.85 208.07 138.67 209.98 138.67 C 232.99 138.77 255.99 138.69 279.00 138.72 C 294.66 138.81 310.36 138.26 325.97 139.86 C 359.95 143.14 394.29 154.79 419.62 178.37 C 438.69 195.71 451.41 219.17 458.14 243.87 C 463.39 263.09 465.64 283.09 465.37 303.00 C 465.77 337.22 459.57 372.72 441.07 402.04 C 426.60 425.27 403.97 442.90 378.43 452.48 C 357.01 460.66 333.87 463.97 311.01 463.15 C 283.67 463.09 256.33 463.15 229.00 463.13 C 220.76 462.94 212.50 463.55 204.29 462.81 C 204.12 424.54 204.28 386.27 204.22 348.00 C 204.04 338.30 204.59 328.59 203.98 318.91 C 191.41 318.17 178.80 318.92 166.22 318.62 C 165.34 312.78 165.90 306.87 165.79 301.00 C 165.90 295.11 165.39 289.20 166.13 283.34 C 178.74 282.95 191.38 283.76 203.97 283.00 C 204.08 281.67 204.17 280.33 204.23 279.01 C 204.25 232.36 204.12 185.71 204.29 139.07 M 265.36 199.10 C 265.30 227.01 265.29 254.94 265.36 282.86 C 266.88 283.05 268.41 283.24 269.96 283.29 C 290.85 283.33 311.75 283.13 332.64 283.36 C 332.78 295.10 332.82 306.86 332.61 318.60 C 314.74 318.68 296.87 318.58 279.00 318.63 C 274.45 318.71 269.86 318.17 265.36 319.06 C 265.30 346.97 265.29 374.89 265.36 402.80 C 278.87 403.69 292.46 402.90 306.00 403.19 C 327.17 403.53 349.18 399.91 367.19 388.18 C 380.66 379.67 390.96 366.61 396.84 351.87 C 404.08 333.92 405.72 314.22 404.67 295.05 C 403.79 278.84 400.41 262.54 393.02 247.99 C 386.77 235.64 377.60 224.72 366.21 216.81 C 347.39 203.46 323.85 197.93 300.99 198.66 C 289.12 198.99 277.18 198.06 265.36 199.10 Z"></path>
                            </svg>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {/literal}
    <a href="?a=paidout" class="float-paidout-button d-flex align-items-center"> <i class="icon icon-star3 mr-2"></i>Payments</a>



    <a href="https://t.me/" target="_blank" class="float-telegram-button d-flex align-items-center"><svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="30" height="30" viewBox="0 0 210 297" version="1.1" id="svg5126" sodipodi:docname="whitelogo.svg" inkscape:version="0.92.1 r15371">
            <defs id="defs5120">
                <linearGradient inkscape:collect="always" id="linearGradient5801">
                    <stop style="stop-color:#ececec;stop-opacity:1;" offset="0" id="stop5797" />
                    <stop style="stop-color:#ececec;stop-opacity:0;" offset="1" id="stop5799" />
                </linearGradient>
                <linearGradient inkscape:collect="always" xlink:href="#linearGradient5801" id="linearGradient5803" x1="2.7698312" y1="146.83657" x2="208.91979" y2="146.83657" gradientUnits="userSpaceOnUse" />
            </defs>
            <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="0.24748737" inkscape:cx="2034.7107" inkscape:cy="958.93239" inkscape:document-units="mm" inkscape:current-layer="g5907" showgrid="false" inkscape:window-width="1920" inkscape:window-height="1017" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:snap-others="false" inkscape:object-nodes="false" inkscape:snap-nodes="false" />
            <metadata id="metadata5123">
                <rdf:RDF>
                    <cc:Work rdf:about="">
                        <dc:format>image/svg+xml</dc:format>
                        <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                        <dc:title></dc:title>
                    </cc:Work>
                </rdf:RDF>
            </metadata>
            <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1">
                <g id="g5699">
                    <g id="g5907" />
                    <path style="fill:#c0c0c0;fill-opacity:1;stroke:none;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="M 56.505542,218.59157 90.554781,184.9979 59.764786,167.97928 49.015005,186.42282 Z" id="path5713" inkscape:connector-curvature="0" />
                    <path style="opacity:1;fill:#f4f4f4;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:67.09999847;stroke-linecap:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:stroke fill markers" d="M 208.91979,69.365984 122.78055,224.30716 2.7698312,148.68959 Z" id="path5715" inkscape:connector-curvature="0" sodipodi:nodetypes="cccc" />
                    <path sodipodi:nodetypes="cccc" inkscape:connector-curvature="0" id="path5717" d="M 96.597631,159.46524 122.78055,224.30716 2.5151726,148.89386 Z" style="opacity:1;fill:#efefef;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:67.09999847;stroke-linecap:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:stroke fill markers" />
                    <path inkscape:connector-curvature="0" style="opacity:1;fill:#d5d5d5;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:67.09999847;stroke-linecap:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:stroke fill markers" d="M 208.91983,69.366032 37.659875,170.51919 l -0.213209,-0.13703 0.08235,0.2143 -0.07832,0.0463 0.127154,0.0804 18.645847,48.46099 7.500285,-31.91315 z" id="path5719" />
                </g>
            </g>
        </svg></a>



    {literal}
    <script src="styles/js/jquery-3.4.1.min.js"></script>
    <script src="styles/js/bootstrap.bundle.min.js"></script>
    <script src="styles/js/owl.carousel.min.js"></script>
    <script src="styles/js/tilt.jquery.min.js"></script>
    <script src="styles/js/clipboard.min.js"></script>
    <script>
        document.write("<script type='text/javascript' src='styles/js/payments.js?v=" + Date.now() + "'><\/script>");

    </script>

    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
                $("#header-main-menu").addClass("darkHeader");
            } else {
                $("#header-main-menu").removeClass("darkHeader");
            }
        });

    </script>
    {/literal}

</body>

</html>








{literal}
<script>
    $(document).ready(function() {
        $('.affece.owl-carousel').owlCarousel({
            loop: false,
            margin: 0,
            responsiveClass: true,
            autoplay: true,
            mouseDrag: true,
            touchDrag: true,
            center: false,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    autoplay: true,
                    mouseDrag: true,
                    touchDrag: true,
                },
                768: {
                    items: 2,
                    autoplay: false,
                    mouseDrag: false,
                    touchDrag: false,
                },
            }
        });
    });

</script>
<script type="text/javascript">
    function correctemail() {
        var a = document.getElementById("country321").value;
        var b = document.getElementById("telegram321").value;
        var c = document.getElementById("forfull321").value;
        document.getElementById("fullmes321").value = "<b>Country:</b>" + a + "<br><b>Telegram:</b>" + b + "<br><b>Email:</b><br>" + c;
    }

</script>
{/literal}
