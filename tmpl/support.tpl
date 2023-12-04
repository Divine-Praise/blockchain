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

                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#MainNav">
                    <span class="navbar-toggler-icon"></span>
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



<section id="hero" class="about-us-page" style="padding-bottom: 0px;">
            <div class="container ">

                <div class="row align-items-center justify-content-center">

                    




                </div>

            </div>
        </section>




        



        <section id="features" style="padding-top: 0px;border-bottom:5px solid #E9ECF4;">

            <div class="container">
                <div class="row">

                    <div class="col-lg-10 pb-5 mb-4">
                        <div class="d-flex">
                            <img src="img/5d12284cb413681bedf47eea_hand-green.png" width="52" alt="" class="icon-split-screen mb-4">
                        </div>
                        <h3 class="pb-3 pr-5">Focused, Active Management of <b>High-Growth Digital Assets.</b></h3>
                        <p class="p-0 m-0">
                            Contact us if you need any help navigating your account or using our services.
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-12 d-flex flex-column">
                        <div class="row pr-lg-5 pt-3">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6464.097620141929!2d14.457511803705335!3d35.896820220337716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e500367d7f757%3A0xb030f29ee981661d!2sValley%20Road%2C%20Birkirkara%2C%20Malta!5e0!3m2!1sen!2suk!4v1590693349098!5m2!1sen!2suk" width="600" height="520" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                        </div>
                    </div>

                    <div class="col-lg-6 d-flex flex-column">

                        <div class="submit-form d-flex flex-column">

                            <h4>Submit an Application</h4>




                            {if $say eq 'send'}
                            <div class="wbox" style="overflow:hidden;">
                                <div class="depboxHome flex-fill d-flex flex-column ">

                                    <div class="d-flex all-center flex-column p-0 status-ok">
                                        <div class="d-flex all-center flex-column p-3 pt-4 pb-4 flex-fill mb-2" style="background:#F1FAF6;width:100%;">
                                            <i class="fas fa-check-circle mb-3 mt-2"></i>
                                            <h6 class="m-0">Submit an application confirmed!</h6>
                                        </div>
                                        <div class="d-flex all-center flex-column p-3">


                                            <p class="mt-2 mb-1"> Message has been successfully sent. We will back to you in next 24 hours. Thank you.</p>

                                        </div>





                                    </div>

                                </div>
                            </div>

                            {else}

                            <script language=javascript>
                                {
                                    if $userinfo.logged == 1
                                } {
                                    literal
                                }

                                function checkform() {
                                    if (document.mainform.message.value == '') {
                                        alert("Please type your message!");
                                        document.mainform.message.focus();
                                        return false;
                                    }
                                    return true;
                                } {
                                    /literal} {
                                    else
                                } {
                                    literal
                                }

                                function checkform() {
                                    if (document.mainform.name.value == '') {
                                        alert("Please type your full name!");
                                        document.mainform.name.focus();
                                        return false;
                                    }
                                    if (document.mainform.email.value == '') {
                                        alert("Please enter your e-mail address!");
                                        document.mainform.email.focus();
                                        return false;
                                    }
                                    if (document.mainform.message.value == '') {
                                        alert("Please type your message!");
                                        document.mainform.message.focus();
                                        return false;
                                    }
                                    return true;
                                } {
                                    /literal} { /
                                    if
                                }

                            </script>



                            <form method=post name=mainform onsubmit="return checkform()" class="d-flex flex-column">
                                <input type=hidden name=a value=support>
                                <input type=hidden name=action value=send>
                                <input type=hidden name="message" id="fullmes321" value="">

                                {if $errors}

                                {if $errors.turing_image == 1}
                                <div class="status-box errors p-3" style="background:#FFEBCB;">
                                    <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                        Invalid turing image
                                    </p>
                                </div>

                                {/if}
                                {if $errors.invalid_email == 1}
                                <div class="status-box errors p-3" style="background:#FFEBCB;">
                                    <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                        Invalid email address
                                    </p>
                                </div>

                                {/if}

                                {/if}

                                <div style="font-size: 12px;" class="row">

                                    <div class="col-md-6 input-group d-flex flex-fill flex-column">
                                        <label for="fname">Full Name<span style="color:#FFC059;">*</span></label>
                                        {if $userinfo.logged}
                                        <input type="text" placeholder="{$userinfo.name}" disabled="disabled" readonly="readonly">
                                        {else}
                                        <input type="text" name="name" value="{$frm.name|escape:htmlall}" placeholder="Your Full Name" id="fname" required="">
                                        {/if}
                                        <i class="icon icon-user float"></i>
                                    </div>


                                    <div class="col-md-6 input-group d-flex flex-fill flex-column">
                                        <label for="email">Your {$settings.site_name} E-mail<span style="color:#FFC059;">*</span></label>
                                        {if $userinfo.logged}
                                        <input type="text" placeholder="{$userinfo.email}" disabled="disabled" readonly="readonly">
                                        {else}
                                        <input type="text" name="email" value="{$frm.email|escape:htmlall}" placeholder="Your Email Adddress" id="email" required="">
                                        {/if}
                                        <i class="icon icon-newsletter float"></i>
                                    </div>

                                    <div class="col-md-6 input-group d-flex flex-fill flex-column">
                                        <label>Your Country<span style="color:#FFC059;">*</span></label>
                                        <input type="text" id="country321" placeholder="Your Country" required="" onfocus="correctemail();" oninput="correctemail();" onblur="correctemail();">
                                        <i class="icon icon-todo float"></i>
                                    </div>

                                    <div class="col-md-6 input-group d-flex flex-fill flex-column">
                                        <label>Contact info (Optional)</label>
                                        <input type="text" id="telegram321" placeholder="Your Telegram , Skype , etc" onfocus="correctemail();" oninput="correctemail();" onblur="correctemail();">
                                        <i class="icon icon-ads float"></i>
                                    </div>


                                </div>


                                <div style="font-size: 12px;" class="input-group full d-flex flex-column">
                                    <label for="forfull">Your Message</label>
                                    <textarea name=message id="forfull321" placeholder="Enter your application." required="" onfocus="correctemail();" oninput="correctemail();" onblur="correctemail();">{$frm.message|escape:htmlall}</textarea>
                                </div>


                                {if $userinfo.validation_enabled == 1}

                                <div class="input-group full d-flex flex-column">
                                    <label>Enter your Code<span style="color:#FFC059;"> <img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"> </span></label>
                                    <input type=text name=validation_number placeholder="" autocomplete="off" autocorrect="off" autocapitalize="off" required="">

                                </div>
                                {/if}




                                <div class="input-group full d-flex flex-column">
                                    <input type="submit" value="Send Messa" class="sbmt btn">
                                </div>


                            </form>

                            {/if}





                        </div>

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


    <!-- Modal -->
    <div class="modal fade" id="bannersModal" tabindex="-1" role="dialog" aria-labelledby="bannersModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannersModalTitle">Modal title</h5>
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
