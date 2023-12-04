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
    <header class="header fixed-top smalex" id="header-main-menu">
        <nav class="navbar navbar-expand-lg navbar-light main-nav">
            <div class="container-fluid">
                {literal}
                <a href="/" class="navbar-brand">
                                        <img src="styles/img/logo.png" alt="Template Rex" width="130px" >

                </a>
                {/literal}
                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#MainNav"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="MainNav">
                    <ul class="navbar-nav mr-auto mt-sms-3">
                        <li class="nav-item">
                            <a class="nav-link text-center" href="/">Homepage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=invest">Invest With Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=affiliate">Earn Passively</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="https://paxful.com">Buy Cryptocurrency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=faq">Questions Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=support">Contact Us</a>
                        </li>
                    </ul>

                    {if $userinfo.logged != 1}
                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex">
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=login" class="login nav-btn">Access Your Account</a>
                        </li>
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=signup" class="register nav-btn">Register</a>
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
                    <div class="col-md-7 text-center d-flex flex-column pt-0 pt-md-3 pt-lg-5 pb-0 pb-md-3 pb-lg-5">
                        <div> <i class="icon icon-star color-yellow"></i>
                            <i class="icon icon-star color-yellow"></i>
                            <i class="icon icon-star color-yellow"></i>
                            <i class="icon icon-star color-yellow"></i>
                            <i class="icon icon-star color-yellow"></i>
                        </div>
                        <h1 style="font-size:2.75rem;line-height:1;padding-top:1rem;">It Takes Friends</h1>
                        <h1 style="font-size:2.75rem;line-height:1;padding-top:0.5rem;"><b>To Earn Even More!</b></h1>
                        <h6 class="pb-0 pt-2">Earn up to 10% commission every time your friends invest.</h6>
                    </div>
                    <div class="col-lg-8 pb-sm-5 pt-5">
                        <div class="row">

                                <div class="ref-box common-ref d-flex flex-column text-center align-items-center">
                                    <h6 class="mb-0">Standard Commission</h6>
                                    <div class="daf d-flex pb-4 pt-4 flex-column all-center">
                                        <svg id="Layer_35" viewBox="0 0 64 64" height="72" width="72" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m25.649 48.937-2.623 2.624c-.662.66-1.026 1.539-1.026 2.474v6.965h-4.351c.218-.456.351-.961.351-1.5 0-1.93-1.57-3.5-3.5-3.5h-8.5v2h8.5c.827 0 1.5.673 1.5 1.5s-.673 1.5-1.5 1.5h-3.5-6.5c-.827 0-1.5-.673-1.5-1.5v-3.5c0-4.963 4.038-9 9-9h3.488c3.149 0 6.199-.924 8.82-2.671l2.246-1.497-1.109-1.664-2.246 1.497c-.54.36-1.102.676-1.68.955.929-1.307 1.481-2.899 1.481-4.62 0-4.411-3.589-8-8-8s-8 3.589-8 8c0 2.498 1.152 4.73 2.951 6.199-5.088.963-8.951 5.436-8.951 10.801v3.5c0 1.93 1.57 3.5 3.5 3.5h6.5 3.5 9.5v-8.965c0-.4.156-.777.439-1.061l2.624-2.624zm-16.649-9.937c0-3.309 2.691-6 6-6s6 2.691 6 6-2.691 6-6 6-6-2.691-6-6z" fill="#353448" />
                                            <path d="m58 27h-28c-2.757 0-5 2.243-5 5v16c0 2.757 2.243 5 5 5h9l1-5h8l1 5h9c2.757 0 5-2.243 5-5v-16c0-2.757-2.243-5-5-5z" fill="#f0bc5e" />
                                            <g fill="#353448">
                                                <path d="m54 5h-18c0-2.206-1.794-4-4-4h-18c-2.206 0-4 1.794-4 4v12c0 2.206 1.794 4 4 4h5.734l8.266 4.723v-4.723h4c0 2.206 1.794 4 4 4h3v4.723l8.266-4.723h6.734c2.206 0 4-1.794 4-4v-12c0-2.206-1.794-4-4-4zm-28 14v3.277l-5.734-3.277h-3.96c.89-2.373 3.154-4 5.777-4h1.835c2.622 0 4.887 1.627 5.777 4zm-3-6c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm9-4v10h-.202c-.724-2.635-2.692-4.682-5.198-5.547.863-.898 1.4-2.112 1.4-3.453 0-2.757-2.243-5-5-5s-5 2.243-5 5c0 1.341.537 2.555 1.4 3.453-2.507.865-4.474 2.911-5.198 5.547h-.202c-1.103 0-2-.897-2-2v-12c0-1.103.897-2 2-2h18c1.103 0 2 .897 2 2v.556c-1.19.694-2 1.97-2 3.444zm14.734 14-5.734 3.277v-3.277h-2.694c.89-2.373 3.154-4 5.777-4h1.835c2.622 0 4.887 1.627 5.777 4zm-1.734-6c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm11 4c0 1.103-.897 2-2 2h-.202c-.724-2.635-2.692-4.682-5.198-5.547.863-.898 1.4-2.112 1.4-3.453 0-2.757-2.243-5-5-5s-5 2.243-5 5c0 1.341.537 2.555 1.4 3.453-2.507.865-4.474 2.911-5.198 5.547h-.202c-1.103 0-2-.897-2-2v-12c0-1.103.897-2 2-2h18c1.103 0 2 .897 2 2z" />
                                                <path d="m55 57h-4.18l-2-10h-9.64l-2 10h-4.18c-2.757 0-5 2.243-5 5v1h32v-1c0-2.757-2.243-5-5-5zm-14.18-8h6.36l1.6 8h-9.56zm-10.649 12c.413-1.164 1.525-2 2.829-2h22c1.304 0 2.416.836 2.829 2z" />
                                                <path d="m57 31h2v2h-2z" />
                                                <path d="m57 35h2v2h-2z" />
                                                <path d="m57 39h2v2h-2z" />
                                            </g>
                                        </svg>

                                        <div class="multiLevel d-flex all-center pt-4">
                                            <div class="level-1 d-flex flex-column text-left">
                                                <h5 class="m-0">10%</h5>
                                                <span class="p-0">Direct Referral Commission</span>
                                            </div>
                                            
                                        </div>

                                    </div>
                                    <p class="mb-0">Refer us to your friends to earn more income as they make investment.</p>
                                </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="affiliate-banners">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center flex-column align-items-center mb-5  text-center">
                        <div> <i class="icon icon-star color-yellow"></i>
                            <i class="icon icon-star color-yellow"></i>
                            <i class="icon icon-star color-yellow"></i>
                            <i class="icon icon-star color-yellow"></i>
                            <i class="icon icon-star color-yellow"></i>
                        </div>
                        <h1 class="mu34"><b>Your Creativity Makes A Difference.</b></h1>
                        <h6 class="pb-0 pt-2">There are thousands of ways to make an impact.</h6>
                    </div>
                    <div class="col-lg-3 col-6 d-flex flex-column align-items-center text-center"> <i class="icon icon-rr-7-1 head-icon"></i>
                        <h4 class="d4j20">Prepare Videos.</h4>
                        <p class="pb-0 pt-2">Promote the platform, try and tell us about the experience, show how to use it or announce the latest campaigns. You're all free, show your talent.</p>
                    </div>
                    <div class="col-lg-3 col-6 d-flex flex-column align-items-center text-center"> <i class="icon icon-rr-7-2 head-icon"></i>
                        <h4 class="d4j20">Report Bugs.</h4>
                        <p class="pb-0 pt-2">Try the platform. Report to us your problems, any errors you find, anything you see missing and things you wish to improve. We appreciate your feedbacks.</p>
                    </div>
                    <div class="col-lg-3 col-6 mt-4 mt-lg-0 d-flex flex-column align-items-center text-center"> <i class="icon icon-rr-7-3 head-icon"></i>
                        <h4 class="d4j20">Organize An Event.</h4>
                        <p class="pb-0 pt-2">Are you an influencer? Take an action to create an ecosystem on behalf of our team and inform people on a topic of your choice. We are here to help!</p>
                    </div>
                    <div class="col-lg-3 col-6 mt-4 mt-lg-0 d-flex flex-column align-items-center text-center"> <i class="icon icon-rr-4-4 head-icon"></i>
                        <h4 class="d4j20">Design & Share.</h4>
                        <p class="pb-0 pt-2">As {$settings.site_name} team, we love your insightful & unique creations. Banners, logos, tshirts, gigs or a campaign can be more meaningful and effective with your design.</p>
                    </div>
                    
                </div>
            </div>
        </section>
        
    </main>






    <!-- Modal -->
    <div class="modal fade" id="bannersModal" tabindex="-1" role="dialog" aria-labelledby="bannersModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannersModalTitle">{$settings.site_name} Banners</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row m-0">
                        <div class="col-12 d-flex flex-column p-0">
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">970x90.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/970x90.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/970x90.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">728x90.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/728x90.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/728x90.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">468x60.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/468x60.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/468x60.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">320x100.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/320x100.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/320x100.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">320x50.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/320x50.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/320x50.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">234x60.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/234x60.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/234x60.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">250x250.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/250x250.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/250x250.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">200x200.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/200x200.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/200x200.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">125x125.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/125x125.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/125x125.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">336x280.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/336x280.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/336x280.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">300x250.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/300x250.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/300x250.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">180x150.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/180x150.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/180x150.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">300x600.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/300x600.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/300x600.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">160x600.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/160x600.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/160x600.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                            <div class="banner-list d-flex flex-column">
                                <label class="fl1">120x600.gif</label>
                                <label class="fl1">
                                    <img src="styles/banners/120x600.gif">
                                </label>
                                <label class="fl1">
                                    <input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/120x600.gif&#34; /&#62;&#60;/a&#62;">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    {include file="footera.tpl"}
