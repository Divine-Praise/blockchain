<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$settings.site_name}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="styles/img/Asset1@4x-8.png" type="image/x-icon">
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

<body data-gr-c-s-loaded="true">
    <main>
        <section id="content-form" class="wibble all-center">
            <div class="container">
                <div class="row all-center all-center flex-column">
                    <a href="/" class="mb-1">
                        {literal}
                                            <img src="styles/img/logo.png" alt="Template Rex" width="180px" >

                        {/literal}
                    </a>
                    <div class="col-11 col-md-8 col-lg-5 form-box mb-3">
                        <div class="inside d-flex flex-column">
                            <h2 class="text-center center-bottom-line">Log in to <br>your account</h2>




                            {literal}
                            <script language=javascript>
                                function checkform() {
                                    if (document.mainform.username.value == '') {
                                        alert("Please type your username!");
                                        document.mainform.username.focus();
                                        return false;
                                    }
                                    if (document.mainform.password.value == '') {
                                        alert("Please type your password!");
                                        document.mainform.password.focus();
                                        return false;
                                    }
                                    return true;
                                }

                            </script>
                            {/literal}

                            {if $frm.say eq 'invalid_login'}
                            <div class="status-box errors p-3" style="background:#FFEBCB;">
                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                    Your login or password or turing image code is wrong. Please check this information.
                                </p>
                            </div>

                            {/if}

                            <br>
                            <form method=post name=mainform onsubmit="return checkform()">
                                <input type=hidden name=a value='do_login'>
                                <input type=hidden name=follow value='{$frm.follow}'>
                                <input type=hidden name=follow_id value='{$frm.follow_id}'>


                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=username value='{$frm.username|escape:"html"}' autofocus="autofocus" placeholder="Enter your Username" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>

                                <div class="table-row d-flex align-items-center">
                                    <input type=password name=password value='' id="password" placeholder="Enter your Password" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i id="icon-yeee" class="far fa-eye-slash float"></i>
                                    <i class="fas fa-unlock-alt float2"></i>
                                </div>



                                {if $ti.check.login}
                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=validation_number placeholder="Enter your Code" autocomplete="off" autocorrect="off" autocapitalize="off" required=""><i id="icon-yeee" class="far fa-eye-slash float" style="color: #454456;"> <img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"></i>
                                    <i class="fas fa-unlock-alt float2"></i>
                                </div>
                                {/if}




                                <div class="table-row d-flex align-items-center">
                                    <input type="submit" value="Log in" class="sbmt">
                                </div>
                                <div class="table-row d-flex all-center flex-column">
                                    <p class="mb-0"> <a href="{" ?a=forgot_password"|encurl}">Forgot password?</a>
                                    </p>
                                    <p class="mb-0">Need a {$settings.site_name} account? <a href="?a=signup">Create an account</a>
                                    </p>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {literal}
    <script src="styles/js/jquery-3.4.1.min.js"></script>
    <script src="styles/js/bootstrap.bundle.min.js"></script>
    <script src="styles/js/owl.carousel.min.js"></script>
    <script src="styles/js/tilt.jquery.min.js"></script>
    <script src="styles/js/clipboard.min.js"></script>
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
    <script type="text/javascript">
        var inputPass2 = document.getElementById('password'),
            icon = document.getElementById('icon-yeee');
        icon.onclick = function() {
            if (inputPass2.className == 'active') {
                inputPass2.setAttribute('type', 'text');
                icon.className = 'fas fa-eye float';
                inputPass2.className = '';
            } else {
                inputPass2.setAttribute('type', 'password');
                icon.className = 'far fa-eye-slash float';
                inputPass2.className = 'active';
            }
        }

    </script>
    {/literal}
</body>

</html>
