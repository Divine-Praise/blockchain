{include file="logomain.tpl"}
	
	
	
	<style>
        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #FFC059;
            background-color: #FFC059;
        }

    </style>
    {literal}


    <script language=javascript>
        function IsNumeric(sText) {
            var ValidChars = "0123456789.";
            var IsNumber = true;
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

        function checkform() {
            if (document.editform.fullname.value == '') {
                alert("Please type your full name!");
                document.editform.fullname.focus();
                return false;
            } {
                /literal} {
                if $settings.use_user_location == 1
            } {
                literal
            }
            if (document.editform.address.value == '') {
                alert("Please enter your address!");
                document.editform.address.focus();
                return false;
            }
            if (document.editform.city.value == '') {
                alert("Please enter your city!");
                document.editform.city.focus();
                return false;
            }
            if (document.editform.state.value == '') {
                alert("Please enter your state!");
                document.editform.state.focus();
                return false;
            }
            if (document.editform.zip.value == '') {
                alert("Please enter your ZIP!");
                document.editform.zip.focus();
                return false;
            }
            if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
                alert("Please choose your country!");
                document.editform.country.focus();
                return false;
            } {
                /literal} { /
                if
            } {
                literal
            }
            if (document.editform.password.value != document.editform.password2.value) {
                alert("Please check your password!");
                document.editform.fullname.focus();
                return false;
            } {
                /literal} {
                if $settings.use_transaction_code
            } {
                literal
            }
            if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
                alert("Please check your transaction code!");
                document.editform.transaction_code2.focus();
                return false;
            } {
                /literal} { /
                if
            } {
                literal
            } {
                /literal} {
                if $settings.usercanchangeemail == 1
            } {
                literal
            }
            if (document.editform.email.value == '') {
                alert("Please enter your e-mail address!");
                document.editform.email.focus();
                return false;
            } {
                /literal} { /
                if
            } {
                literal
            }

            for (i in document.editform.elements) {
                f = document.editform.elements[i];
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
                        alert('Invalid account format. Expected ' + notice);
                        f.focus();
                        return false;
                    }
                }
            }

            return true;
        }

    </script>
    {/literal}
    <main>
        <section id="dashboard" class="btc-background">
            <div class="container full-height ">
                <div class="row mt-xl-5">
                    <div class="col-xl-12">
                        <div class="wbox column deposit-form">
                            <div class="row m-0">
                                <div class="col-xl-4 p-0 depboxHome border-right">
                                    <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-reviews"></i>
                                        <h6 class="m-0 ml-3">Profile</h6>
                                    </div>
                                    <div class="changeType ybg d-flex align-items-center p-4" style="position:relative;"> <i class="fas fa-id-badge ixc" style="font-size:32px;"></i>
                                        <div class="ml-3" style="flex:1;">
                                            <h6 class="m-0" style="color:#fff;">{$userinfo.username}</h6>
                                            <p class="m-0" style="color:rgba(255,255,255,.6);">{$userinfo.email|escape:"quotes"}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column p-4">
                                        <div class="d-flex align-items-center">
                                            <p class="m-0 d-flex align-items-center" style="flex:1;"><i class="fas fa-minus pr-2" style="font-size:7px;color:#FFC059;"></i> Full Name :</p><b style="font-size:13px;">{$userinfo.name|escape:"quotes"}</b>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="m-0 d-flex align-items-center" style="flex:1;"><i class="fas fa-minus pr-2" style="font-size:7px;color:#FFC059;"></i> Registration Date :</p><b style="font-size:13px;">{$userinfo.date_register}</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 p-0 depboxHome">
                                    <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-sidebar"></i>
                                        <h6 class="m-0 ml-3">Update your profile</h6>
                                    </div>



                                    <form action="" method=post onsubmit="return checkform()" name=editform id="saveAccount" style="flex:1;" class="d-flex flex-column">
                                        <input type=hidden name=a value=edit_account>
                                        <input type=hidden name=action value=edit_account>
                                        <input type=hidden name=say value="">


                                        <div class="d-flex flex-column p-4" style="border-bottom:1px solid #F3F3F4;background:#F9F9F9;box-shadow:inset -5px 0 0 #F8AC4A;">
                                            <div class="status-box errors p-3" style="background:#FFEBCB;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    <b>Please</b>, Please save your wallet address to receive withdrawals!</p>
                                            </div>




                                            {if $frm.say eq 'changed'}

                                            <div class="status-box errors p-3" style="background:#E8F1EB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-check-circle aniview d6"></i>
                                                    Your account data has been updated successfully.</p>
                                            </div>
                                            {/if}
                                            {if $errors}

                                            {section name=e loop=$errors}
                                            {if $errors[e] eq 'full_name'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your Full Name!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'address'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your address!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'city'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your city!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'state'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your state!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'zip'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your zip!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'country'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please choose your country!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'username'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your username!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'password'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter a password!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'password_confirm'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please check your password!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'password_too_small'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Password is too small, please enter at least {$settings.min_user_password_length} chars!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'transaction_code'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter the Transaction Code! </p>
                                            </div>

                                            {/if}

                                            {if $errors[e] eq 'transaction_code_confirm'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please check your Transaction Code!</p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'transaction_code_too_small'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Transaction Code is too small, please enter at least {$settings.min_user_password_length} chars! </p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'wrong_current_password'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    You entered wrong current password </p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'transaction_code_vs_password'}

                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Transaction Code should be different then the Password! </p>
                                            </div>

                                            {/if} {if $errors[e] eq 'invalid_transaction_code'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    You have provided invalid Current Transaction Code! </p>
                                            </div>
                                            {/if}
                                            {if $errors[e] eq 'email'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Please enter your e-mail!</p>
                                            </div>


                                            {/if}
                                            {if $errors[e] eq 'turing_image'}
                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Enter the verification code as it is shown in the corresponding box.</p>
                                            </div>




                                            {/if}
                                            {if $errors[e] eq 'tfa_code'}

                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    Invalid 2FA code</p>
                                            </div>

                                            {/if}
                                            {if $errors[e] eq 'invalid_account_format'}
                                            {foreach from=$account_errors item=err}

                                            <div class="status-box errors p-3" style="background:#FFEBCB;margin-top: 15px;">
                                                <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                                                    {$err}</p>
                                            </div>


                                            {/foreach}
                                            {/if}

                                            {/section}

                                            {/if}









                                            {foreach item=ps from=$pay_accounts}
                                            <div class="d-flex align-items-stretch p-0 TFA mt-4" style="border-radius:5px;background:#fff;">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-wallet pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">{$ps.name} Address</span>
                                                    <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                </p>

                                                {if $settings.usercanchangeegoldacc == 0 && $ps.account != ''}
												<input type=text style="font-size:14px;" value="{$ps.account|escape:html}" disabled readonly >
												{else}
												<input type=text style="font-size:14px;" name="pay_account[{$ps.id}]" value="{$frm.pay_account[$ps.id]|default:$ps.account|escape:html}" data-validate="{$ps.validate.func}" data-validate-{$ps.validate.func}="{$ps.validate[$ps.validate.func]}" data-validate-notice="{$ps.validate.notification|escape:html}" required>{/if}

                                            </div>
                                            {/foreach}


                                            {foreach item=p from=$mpay_accounts}
                                            {foreach item=ps from=$p.accounts}

                                            <div class="d-flex align-items-stretch p-0 TFA mt-4" style="border-radius:5px;background:#fff;">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-wallet pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your {$p.name} {$ps.name}</span>
                                                    <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                </p>

                                                {if $settings.usercanchangeegoldacc == 0 && $ps.value != ''}
												<input type=text style="font-size:14px;" value="{$ps.value|escape:html}" disabled readonly >
												{else}<input style="font-size:12px;" type=text name="pay_account[{$p.id}][{$ps.name|escape:html}]" value="{$frm.pay_account[$p.id][$ps.name]|default:$ps.value|escape:html}">{/if}

                                            </div>
                                            {/foreach}
                                            {/foreach}



                                        </div>





                                        <div class="d-flex flex-column p-4">









                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Full Name</span>
                                                </p>
                                                <input type=text name=fullname value='{$userinfo.name|escape:"quotes"}' style="font-size:14px;">
                                            </div>

                                            {if $settings.use_user_location}

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your Address</span>
                                                </p>
                                                <input type=text name=address value="{$userinfo.address|escape:" quotes"}" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your City</span>
                                                </p>
                                                <input type=text name=city value="{$userinfo.city|escape:" quotes"}" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your State</span>
                                                </p>
                                                <input type=text name=state value="{$userinfo.state|escape:" quotes"}" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your Zip</span>
                                                </p>
                                                <input type=text name=zip value="{$userinfo.zip|escape:" quotes"}" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Your Country</span>
                                                </p>
                                                <select style="font-size:14px;padding: .25rem .75rem;
    border: 1px solid #ECEDF0;
    min-width: 50px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    flex: 1;" name='country'>
                                                    <option style="font-size:14px;" value=''>--SELECT--</option>
                                                    {section name=c loop=$countries}
                                                    <option style="font-size:14px;" {if $countries[c].name eq $userinfo.country}selected{/if}>{$countries[c].name|escape:"quotes"} </option> {/section} </select> </div> {/if} <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                        <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-envelope pr-2" style="color:#F8AC4A;"></i>
                                                            <span style="font-size:12px;">E-mail</span>
                                                            <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                        </p>
                                                        {if $settings.usercanchangeemail == 1}<input type=text name=email value='{$userinfo.email|escape:"quotes"}' style="font-size:14px;" required>{else}<input type=text name=email style="font-size:14px;" value='{$userinfo.email}' disabled="disabled" readonly="readonly">{/if}
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">New Password</span>
                                                </p>
                                                <input type=password name=password value="" style="font-size:14px;" minlength="6">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Retype Password</span>
                                                </p>
                                                <input type=password name=password2 value="" style="font-size:14px;" minlength="6">
                                            </div>


                                            {if $settings.use_transaction_code}
                                            {if $settings.use_transaction_code_edit_account != 1}
                                            {if $userinfo.transaction_code != ''}

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Current Transaction Code</span>
                                                </p>
                                                <input type=password name=transaction_code_current value="" style="font-size:14px;">
                                            </div>


                                            {/if}
                                            {/if}
                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">New Transaction Code</span>
                                                </p>
                                                <input type=password name=transaction_code value="" style="font-size:14px;">
                                            </div>

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Retype Transaction Code</span>
                                                </p>
                                                <input type=password name=transaction_code2 value="" style="font-size:14px;">
                                            </div>
                                            {/if}

                                           




                                            {if $settings.use_transaction_code_edit_account == 1}
                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;">Current Transaction Code</span>
                                                </p>
                                                <input type=password name=transaction_code_current value="" style="font-size:14px;">
                                            </div>
                                            {/if}
                                            {if $userinfo.tfa_settings.edit_account}

                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="icon icon-security pr-2" style="color:#F8AC4A;background:none;box-shadow:none;height:auto;width:auto;"></i>
                                                    <span style="font-size:12px;">2FA Code</span>
                                                    <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                </p>
                                                <input type="text" name="tfa_code" style="font-size:14px;">
                                                <input type="hidden" name="tfa_time" id="tfa_time">
                                            </div>

                                            {literal}
                                            <script language=javascript>
                                                document.getElementById('tfa_time').value = (new Date()).getTime();

                                            </script>
                                            {/literal}
                                            {/if}

                                            {if $ti.check.edit_account}
                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                    <span style="font-size:12px;"> <img src="?a=show_validation_image&{$ti.session.name}={$ti.session.id}&rand={$ti.session.rand}"></span>
                                                </p>
                                                <input placeholder="Enter your Code" type=text name=validation_number style="font-size:14px;">
                                            </div>
                                            {/if}

                                            {if $userinfo.admin_auto_pay_earning == 1}
                                            <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                <div class="custom-control custom-checkbox">
                                                    <input type=checkbox name=user_auto_pay_earning value=1 {if $userinfo.user_auto_pay_earning==1}checked{/if} class="custom-control-input" id="customCheck2z">
                                                    <label class="custom-control-label" for="customCheck2z">Receive earnings directly to e-currency account</label>
                                                </div>
                                            </div>
                                            {/if}










                                        </div>

                                        {literal}
                                        <div class="d-flex align-items-center p-4" style="border-bottom:1px solid #F3F3F4;border-top:1px solid #F3F3F4;background:#F9F9F9;box-shadow:inset -5px 0 0 #F8AC4A;">
                                            {/literal}
                                            {if $tfa_enabled}
                                            <div class="status-box errors p-0 mr-4" style="flex:1;background:none;">
                                                <p style="font-size:11px;"> <a href="?a=security" style="font-size:11px;color:#353448;"><b>Enable</b> Google 2fa for optimal security! </a>
                                                </p>
                                            </div>
                                            {else}
                                            {/if}
                                            {literal}
                                            <a nohref="" onclick="document.getElementById('saveAccount').submit();" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Save</span>
                                            </a>
                                        </div>
                                    </form>
                                    {/literal}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
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
    {/literal}

</body>

</html>
