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
                    {literal}
                    <a href="/" class="mb-1">
                                            <img src="styles/img/logo.png" alt="Template Rex" width="180px" >

                    </a>
                    {/literal}
                    <div class="col-11 col-md-8 col-lg-5 form-box mb-3">
                        <div class="inside d-flex flex-column">
                            <h2 class="text-center center-bottom-line">Sign up for <br>an account</h2>




                            {if $deny_registration}
 We are closed for new registrations now.
{elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
 You  do not have a upline. Our system require a upline for each user.
{else}
 {literal}

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 {/literal}
 {if $settings.use_user_location == 1}
 {literal}
  if (document.regform.address.value == '') {
    alert("Please enter your address!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '') {
    alert("Please enter your city!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '') {
    alert("Please enter your state!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.regform.country.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 {/literal}
 {if $settings.use_transaction_code}
 {literal}
  if (document.regform.transaction_code.value == '') {
    alert("Please enter your transaction code!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.regform.transaction_code2.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 {/literal}
 
 {if $errors}
  <ul style="color:red">
  {section name=e loop=$errors} 
   {if $errors[e] eq 'full_name'}
    <li>Please enter your full name!
   {/if}
   {if $errors[e] eq 'address'}
    <li>Please enter your address!
   {/if}
   {if $errors[e] eq 'city'}
    <li>Please enter your city!
   {/if}
   {if $errors[e] eq 'state'}
    <li>Please enter your state!
   {/if}
   {if $errors[e] eq 'zip'}
    <li>Please enter your zip!
   {/if}
   {if $errors[e] eq 'country'}
    <li>Please choose your country!
   {/if}
   {if $errors[e] eq 'username'}
    <li>Please enter valid username! It should contains English letters and digits only.
   {/if}
   {if $errors[e] eq 'username_exists'}
    <li>Sorry, such user already exists! Please try another username. 
   {/if}
   {if $errors[e] eq 'email_exists'}
    <li>Sorry, such email already exists! Please try another email. 
   {/if} 
   {if $errors[e] eq 'password'} 
    <li>Please enter a password!
   {/if}
   {if $errors[e] eq 'password_confirm'}
    <li>Please check your password!
   {/if}
   {if $errors[e] eq 'password_too_small'}
    <li>The password you provided is too small, please enter at least {$settings.min_user_password_length} characters!
   {/if} 
   {if $errors[e] eq 'transaction_code'} 
    <li>Please enter the Transaction Code!
   {/if} 
   {if $errors[e] eq 'transaction_code_confirm'} 
    <li>Please check your Transaction Code!
   {/if}
   {if $errors[e] eq 'transaction_code_too_small'}
    <li>The Transaction Code you provided is too small, please enter at least {$settings.min_user_password_length} characters!
   {/if}
   {if $errors[e] eq 'transaction_code_vs_password'} 
    <li>The Transaction Code should differ from the Password!
   {/if}
   {if $errors[e] eq 'email'} 
    <li>Please enter your e-mail!
   {/if}
   {if $errors[e] eq 'email2'} 
    <li>Please check your email!
   {/if}
   {if $errors[e] eq 'agree'}
    <li>You have to agree with the Terms and Conditions!
   {/if}
   {if $errors[e] eq 'turing_image'}
    <li>Enter the verification code as it is shown in the corresponding box.
   {/if} 
   {if $errors[e] eq 'no_upline'}
    <li>The system requires an upline to register. {if $settings.get_rand_ref}You have to be agreed to random one or found a referral link in the net.{/if}
   {/if} 
   {if $errors[e] eq 'ip_exists_in_database'}
    <li>Your IP already exists in our database. Sorry, but registration impossible.
   {/if}

   {if $errors[e] eq 'invalid_account_format'}
    {foreach from=$account_errors item=err}
    <li>{$err}
    {/foreach}
   {/if}

   <br> 
  {/section}
  </ul>
 {/if} 


                            <form method=post onsubmit="return checkform()" name="regform">
                                <input type=hidden name=a value="signup">
                                <input type=hidden name=action value="signup">
                                <input type="hidden" name="agree" value="1" checked="">
                                <input type="hidden" name="email1" id="email1" value="">
                                <input type="hidden" name="password2" id="password2" value="">
                                <input type="hidden" name="rand_ref" value="1" checked="">



                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=username value="{$frm.username|escape:" quotes"}" id="username" placeholder="Username" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>


                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=fullname value="{$frm.fullname|escape:" quotes"}" id="fullname" placeholder="Enter Full Name" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-id-badge float2"></i>
                                </div>



                                {if $settings.use_user_location}




                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=address value="{$frm.address|escape:" quotes"}" placeholder="Your Address" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>



                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=city value="{$frm.city|escape:" quotes"}" placeholder="Your City" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>


                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=state value="{$frm.state|escape:" quotes"}" placeholder="Your State" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>

                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=zip value="{$frm.zip|escape:" quotes"}" placeholder="Your Zip" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-user-circle float2"></i>
                                </div>


                                <div class="table-row d-flex align-items-center">
                                    <select name='country'>
                                        <option value=''>Please choose Your Country</option>
                                        {section name=c loop=$countries}
                                        <option {if $countries[c].name eq $frm.country}selected{/if}>{$countries[c].name|escape:"quotes"} </option> {/section} </select> <i class="fas fa-user-lock float2"></i>
                                </div>


                                {/if}


                                <div class="table-row d-flex align-items-center">
                                    <input type=password name=password value="{$frm.password|escape:" quotes"}" id="password" minlength="6" placeholder="Password" onfocus="repass();" oninput="repass();" onblur="repass();" class="showhide" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-unlock-alt float2"></i>
                                </div>


                                {if $settings.use_transaction_code}

                                <div class="table-row d-flex align-items-center">
                                    <input type=password name=transaction_code value="{$frm.transaction_code|escape:" quotes"}" placeholder="Define Transaction Code" onfocus="repass();" oninput="repass();" onblur="repass();" class="showhide" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-unlock-alt float2"></i>
                                </div>

                                <div class="table-row d-flex align-items-center">
                                    <input type=password name=transaction_code2 value="{$frm.transaction_code2|escape:" quotes"}" placeholder="Retype Transaction Code" onfocus="repass();" oninput="repass();" onblur="repass();" class="showhide" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-unlock-alt float2"></i>
                                </div>

                                {/if}


                          {foreach from=$pay_accounts item=ps}

<div class="table-row d-flex align-items-center">
<input type="text" name=pay_account[{$ps.id}] value="{$ps.account|escape:html}" data-validate="{$ps.validate.func}" data-validate-{$ps.validate.func}="{$ps.validate[$ps.validate.func]}" data-validate-notice="{$ps.validate.notification|escape:html}"  placeholder="Your {$ps.name} Account">	<i class="fas fa-wallet float2"></i>
</div>

{/foreach}



                                {foreach item=p from=$mpay_accounts}
                                {foreach item=ps from=$p.accounts}

                                <div class="table-row d-flex align-items-center">
                                    <input type=text name="pay_account[{$p.id}][{$ps.name|escape:html}]" value="{$ps.value|escape:html}" placeholder="Your {$p.name} {$ps.name}" onfocus="remail();" oninput="remail();" onblur="remail();" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-wallet float2"></i>
                                </div>

                                {/foreach}
                                {/foreach}




                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=email value="{$frm.email|escape:" quotes"}" id="email" placeholder="Email" onfocus="remail();" oninput="remail();" onblur="remail();" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="far fa-envelope float2"></i>
                                </div>



                                <div class="table-row d-flex align-items-center">
                                    <select name="sq">
                                        <option>Please choose Security Question</option>
                                        <option value="Who was your childhood hero?">Who was your childhood hero?</option>
                                        <option value="What is your mother's middle name?">What is your mother's middle name?</option>
                                        <option value="Where did you vacation last year?">Where did you vacation last year?</option>
                                        <option value="What is your oldest sibling’s birthday month and year? (e.g., January 1900)">What is your oldest sibling’s birthday month and year? (e.g., January 1900)</option>
                                        <option value="What school did you attend for sixth grade?">What school did you attend for sixth grade?</option>
                                        <option value="What is the name of the company of your first job?">What is the name of the company of your first job?</option>
                                        <option value="What time of the day were you born?">What time of the day were you born?</option>
                                        <option value="What month and day is your anniversary? (e.g., January 2)">What month and day is your anniversary? (e.g., January 2)</option>
                                        <option value="What is your preferred musical genre? ">What is your preferred musical genre?</option>
                                    </select> <i class="fas fa-user-lock float2"></i>
                                </div>


                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=sa value="{$frm.sa|escape:" quotes"}" placeholder="Security Answer" autocomplete="off" autocorrect="off" autocapitalize="off" required=""> <i class="fas fa-key float2"></i>
                                </div>





                                {if $ti.check.signup}
                                <div class="table-row d-flex align-items-center">
                                    <input type=text name=validation_number placeholder="Enter your Code" autocomplete="off" autocorrect="off" autocapitalize="off" required=""><i id="icon-yeee" class="far fa-eye-slash float" style="color: #454456;"> <img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"></i>
                                    <i class="fas fa-unlock-alt float2"></i>
                                </div>
                                {/if}


                                {if $settings.use_referal_program}
                                {if $referer}
                                <div class="table-row d-flex align-items-center flex-column">
                                    <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">Your Upline: ({$referer.username})</a>
                                    </p>
                                </div>
                                {else}
                                {if $settings.force_upline}
                                {if $settings.get_rand_ref}

                                <div class="table-row d-flex align-items-center flex-column">
                                    <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random one or find a referral link on the net.</a>
                                    </p>
                                </div>


                                {else}

                                <div class="table-row d-flex align-items-center flex-column">
                                    <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">You do not have an upline. Our system requires an upline for each user.</a>
                                    </p>
                                </div>
                                {/if}
                                {/if}
                                {/if}
                                {/if}



                                <div class="table-row d-flex align-items-center">
                                    <input type="submit" value="Sign Up" class="sbmt">
                                </div>

                                <div class="table-row d-flex align-items-center flex-column">
                                    <p class="mb-0" style="color:#AEBAC7;">Already have an account? <a href="?a=login">Log in</a>
                                    </p>
                                    <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">By clicking Sign Up, you agree to our <a target="blank" href="?a=rules" style="font-size:10px;padding:0 5px;">Terms and Conditions</a>and that you have read our <a target="blank" href="?a=cust&amp;page=privacy" style="font-size:10px;padding:0 5px;">Privacy Statement.</a>
                                    </p>
                                </div>

                            </form>
                            {/if}



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
        function remail() {
            var b = document.getElementById("email").value;
            document.getElementById("email1").value = b
        }

        function repass() {
            var c = document.getElementById("password").value;
            document.getElementById("password2").value = c
        }
        var inputPass2 = document.getElementById('password'),
            icon = document.getElementById('icon-yeee');
        icon.onclick = function() {
            if (inputPass2.className == 'active') {
                inputPass2.setAttribute('type', 'text');
                icon.className = 'fas fa-eye';
                inputPass2.className = '';
            } else {
                inputPass2.setAttribute('type', 'password');
                icon.className = 'far fa-eye-slash';
                inputPass2.className = 'active';
            }
        }

    </script>
    <iframe data-product="web_widget" title="No content" tabindex="-1" aria-hidden="true" src="about:blank" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
    {/literal}
</body>

</html>
