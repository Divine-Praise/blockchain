{include file="logomain.tpl"}


{literal}


<style>
    .enablewallet {
        display: block !important;

    }

</style>
{/literal}
<main>

    <section id="dashboard" class="btc-background">
        <div class="container full-height ">



            <div class="row mt-xl-5">



                {if $say eq 'processed'}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#E9F2EC;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            {if $batch eq ''}Withdrawal request has been successfully saved.{else} Withdrawal has been processed. Batch id: {$batch}{/if}
                        </p>
                    </div>
                </div>
                {/if}

                {if $fatals}

                {if $fatals.times_limit}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You can withdraw {$settings.limit_withdraw_period_times} per {$settings.limit_withdraw_period_date} only.
                        </p>
                    </div>
                </div>
                {/if}

                {else}

                {if $say eq 'ec_forbidden' || $errors.ec_forbidden}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Sorry, withdraw for this processing is temproary forbidden.
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'on_hold' || $errors.on_hold}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Sorry, this amount on hold now.
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'zero' || $errors.zero}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Sorry, you can't request a withdraw smaller than {$currency_sign}0.00 only
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'less_min' || $errors.less_min}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Sorry, you can request not less than {$currency_sign}{*$settings.min_withdrawal_amount*}{$fees.amount_min}
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'greater_max' || $errors.greater_max}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Sorry, you can request not greater than {$currency_sign}{*$settings.max_withdrawal_amount*}{$fees.amount_max}
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'daily_limit' || $errors.daily_limit}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Sorry, you have exceeded a daily limit
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'not_enought' || $errors.not_enought}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Sorry, you have requested the amount larger than the one on your balance.
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'invalid_transaction_code' || $errors.invalid_transaction_code}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You have entered the invalid transaction code.
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'invalid_tfa_code' || $errors.invalid_tfa_code}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You have entered invlid 2FA code.
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'no_deposits' || $errors.no_deposits}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You have not done any deposits yet. Withdrawal function will be available after a deposit.
                        </p>
                    </div>
                </div>
                {/if}
                {if $say eq 'no_active_deposits' || $errors.no_active_deposits}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You must have active deposit to withdraw.
                        </p>
                    </div>
                </div>
                {/if}
                {if $errors.turing_image}
                <div class="container full-height " style="min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Invalid turing image.
                        </p>
                    </div>
                </div>
                {/if}

                <div id="alertwallet" class="container full-height " style="display: none;min-height: initial; padding-top: initial; padding-bottom: 20px;">
                    <div class="status-box errors col-xl-12" style="background:#FFEBCB;">
                        <p><i class="fas fa-bell"></i> Please set your <a href="?a=edit_account" style="font-size:.75rem;color:#374A5F;text-decoration:underline;font-weight:500;">{$currency} Wallet address</a> to receive withdrawals!</p>
                    </div>
                </div>



                <div class="col-xl-12">
                    <div class="wbox column deposit-form">
                        <div class="row m-0">



                            {if $preview}

                            <div class="col-xl-4 p-0 depboxHome border-right">

                                <div class="d-flex align-items-center title p-3 pr-4 pl-4">
                                    <i class="icon icon-ads "></i>
                                    <h6 class="m-0 ml-3">Withdraw</h6>
                                </div>


                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs stepNav p-4 mt-2 mb-2 flex-column" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--1-tab" data-toggle="tab" href="#navStep--1" role="tab" aria-controls="navStep--1" aria-selected="true">
                                            <span class="d-flex all-center">1</span>
                                            <p class="m-0 ml-3">Enter the amount</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--2-tab" data-toggle="tab" href="#navStep--2" role="tab" aria-controls="navStep--2" aria-selected="false">
                                            <span class="d-flex all-center">2</span>
                                            <p class="m-0 ml-3">Select your Wallet address</p>
                                        </a>
                                    </li>
                                    <li class="nav-item no ">
                                        <a class="nav-link d-flex align-items-center active" nohref>
                                            <span class="d-flex all-center">3</span>
                                            <p class="m-0 ml-3">Confirm your withdrawal</p>
                                        </a>
                                    </li>
                                </ul>



                            </div>




                            <div class="col-xl-8 p-0 d-flex">


                                <form method=post class="d-flex flex-fill" id="withdrawconfirm">
                                    <input type=hidden name=a value=withdraw>
                                    <input type=hidden name=action value=withdraw>
                                    <input type=hidden name=amount value={$amount}>
                                    <input type=hidden name=ec value={$ec}>
                                    <input type=hidden name=comment value="{$comment|escape:html}">



                                    <div class="tab-content d-flex flex-fill">
                                        <div class="tab-pane fade active flex-fill show" id="navStep--1" role="tabpanel" aria-labelledby="navStep--1-tab">
                                            <div class="depboxHome flex-fill d-flex flex-column">






                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4">
                                                    <i class="icon icon-organize "></i>
                                                    <h6 class="m-0 ml-3">Confirm your withdrawal</h6>
                                                </div>





                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">

                                                    <div class="txts">
                                                        <p>
                                                            - Payment System: <b style="font-size:.8rem;">{$currency}</b> <br>
                                                            - Wallet Address: <b id="walletid" style="font-size:.8rem;">{$account}</b> <br>
                                                            {if $converted}
                                                            - Credit Amount: <b style="font-size:.8rem;">{$currency_sign}{$converted.amount}</b> <br>

                                                            - {$converted.fiat} Amount: <b style="font-size:.8rem;">{$to_withdraw}</b> <br>



                                                            {else}
                                                            - Credit Amount: <b style="font-size:.8rem;">{$currency_sign}{$to_withdraw}</b> <br>

                                                            {/if}
                                                            - Amount Withdraw: <b style="font-size:.8rem;">{$currency_sign}{$amount}</b> <br>
                                                            - Withdrawal Fee: <b style="font-size:.8rem;">{if $fees.fee > 0}
                                                                {$fees.percent}% + {$currency_sign}{$fees.add_amount} (min. {$currency_sign}{$fees.fee_min} max. {if $fees.fee_max}{$currency_sign}{$fees.fee_max}{else}no{/if})
                                                                {else}
                                                                We have no fee for this operation.
                                                                {/if}</b> <br>

                                                        </p>
                                                    </div>






                                                    {if $settings.use_transaction_code && $userinfo.transaction_code}
                                                    <div class="d-flex align-items-stretch pt-2 pb-2 flex-wrap TFA">
                                                        <p class="m-0 d-flex align-items-center"> <i class="fas fa-unlock-alt pr-2" style="color:#F8AC4A;background:none;box-shadow:none;height:auto;width:auto;"></i>
                                                        </p>
                                                        <input type="password" name="transaction_code" placeholder="Transaction Code" style="font-size:14px;" value="" autocomplete="off" autocorrect="off" autocapitalize="off">
                                                    </div>

                                                    {/if}
                                                    {if $userinfo.tfa_settings.withdraw}
                                                    <div class="d-flex align-items-stretch pt-2 pb-2 flex-wrap TFA">
                                                        <p class="m-0 d-flex align-items-center"> <i class="icon icon-security pr-2" style="color:#F8AC4A;background:none;box-shadow:none;height:auto;width:auto;"></i>
                                                            <span style="font-size:12px;">2FA Code</span>
                                                            <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                        </p>
                                                        <input type="text" name="tfa_code" placeholder="Enter Code" style="font-size:14px;" value="">
                                                        <input type="hidden" name="tfa_time" id="tfa_time">
                                                    </div>

                                                    {literal}
                                                    <script language=javascript>
                                                        document.getElementById('tfa_time').value = (new Date()).getTime();

                                                    </script>
                                                    {/literal}
                                                    {/if}


                                                    {if $ti.check.withdrawal}
                                                    <div class="d-flex align-items-stretch pt-2 pb-2 flex-wrap TFA">
                                                        <p class="m-0 d-flex align-items-center"> <i class="fas fa-unlock-alt pr-2" style="color:#F8AC4A;background:none;box-shadow:none;height:auto;width:auto;"></i>
                                                            <span style="font-size:12px;"><img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"></span>
                                                            <small style="color:#EBAE77;font-style:normal;">&nbsp;*</small>
                                                        </p>
                                                        <input type=text name=validation_number placeholder="Enter your Code" style="font-size:14px;" value="" autocomplete="off" autocorrect="off" autocapitalize="off">
                                                    </div>
                                                    {/if}



                                                    <div class="row mb-4">
                                                    </div>

                                                    <div class="txts">
                                                        <p>
                                                            - Withdrawal process time is from instant to 24 hours.<br>
                                                            - The minimum amount you can withdraw is <b style="font-size:.8rem;">10 USD</b>
                                                        </p>
                                                    </div>



                                                    <div class="d-flex mt-2 pt-2 justify-content-between">
                                                        <span></span>
                                                        <a nohref onclick="document.getElementById('withdrawconfirm').submit();" id="processwithdraw" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Confirm</span>
                                                            <i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
                                                        </a>
                                                    </div>







                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>








                            {else}





                            <div class="col-xl-4 p-0 depboxHome border-right">

                                <div class="d-flex align-items-center title p-3 pr-4 pl-4">
                                    <i class="icon icon-ads "></i>
                                    <h6 class="m-0 ml-3">Withdraw</h6>
                                </div>

                                <div class="changeType ybg d-flex align-items-center p-4" style="position:relative;">
                                    <p style="line-height:1;" class="pr-2">Available<br>Balance</p>
                                    <div class="small-button smallPay-button d-flex align-items-center">
                                        {literal}
                                        <svg width="24" height="24" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486">
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
                                        {/literal}
                                        <label class="m-0 ml-2 mr-1">{$currency_sign}{$ab_formated.total}</label>
                                    </div>
                                </div>



                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs stepNav p-4 mt-2 mb-2 flex-column" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="navStep--1-tab" data-toggle="tab" href="#navStep--1" role="tab" aria-controls="navStep--1" aria-selected="true">
                                            <span class="d-flex all-center">1</span>
                                            <p class="m-0 ml-3">Enter the amount</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--2-tab" data-toggle="tab" href="#navStep--2" role="tab" aria-controls="navStep--2" aria-selected="false">
                                            <span class="d-flex all-center">2</span>
                                            <p class="m-0 ml-3">Select your Wallet address</p>
                                        </a>
                                    </li>
                                    <li class="nav-item no ">
                                        <a class="nav-link d-flex align-items-center" nohref>
                                            <span class="d-flex all-center">3</span>
                                            <p class="m-0 ml-3">Confirm your withdrawal</p>
                                        </a>
                                    </li>
                                </ul>



                            </div>



                            <div class="col-xl-8 p-0 d-flex">


                                <form method=post class="d-flex flex-fill" id="withdrawform">
                                    <input type=hidden name=a value=withdraw>
                                    <input type=hidden name=action value=preview>
                                    <input type=hidden name=say value="">
                                    <input type=hidden name=comment value="">










                                    <div class="tab-content d-flex flex-fill">
                                        <div class="tab-pane fade active flex-fill show" id="navStep--1" role="tabpanel" aria-labelledby="navStep--1-tab">
                                            <div class="depboxHome flex-fill d-flex flex-column">






                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4">
                                                    <i class="icon icon-organize "></i>
                                                    <h6 class="m-0 ml-3">Enter the amount</h6>
                                                </div>





                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">
                                                    {if $have_available}
                                                    <div class="depInput d-flex align-items-center mb-4" style="flex-flow:row wrap">
                                                        <div class="d-flex align-items-center pl-4 pr-4 plaN">
                                                            <span class="p-0">Enter<br>Amount</span>
                                                        </div>

                                                        <input type="number" name="amount" value="{$frm.amount|amount_format|default:" 10.00"}" id="inputsmoney" autocomplete="off" required="" autocomplete="off" style="min-width:100px;flex:1;border:0;margin:0;">
                                                        <!-- <input type="number" name="amount" value="{$frm.amount|amount_format|default:"10.00"}" id="inputsmoney" autocomplete="off" required="" autocomplete="off" required min="0.0005" step="0.00000001" style="min-width:100px;flex:1;border:0;margin:0;"> -->
                                                        {literal}
                                                        <div class="d-flex align-items-center pl-2 pr-4">
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
                                                            <p class="m-0 ml-2">USD Dollar</p>
                                                        </div>
                                                        {/literal}

                                                    </div>


                                                    <div class="row mb-4">
                                                    </div>

                                                    <div class="txts">
                                                        <p>
                                                            - Withdrawal process time is from instant to 24 hours.<br>
                                                            - The minimum amount you can withdraw is <b style="font-size:.8rem;">10 USD</b>
                                                        </p>
                                                    </div>

                                                    <div class="d-flex mt-2 pt-2 justify-content-between">
                                                        <span></span>
                                                        <a nohref onclick="doStep_1();" class="d-flex align-items-center deposit-small-btn">
                                                            <span class="d-flex all-center">Continue</span>
                                                            <i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
                                                        </a>
                                                    </div>

                                                    {else}
                                                    <div class="col-lg-12 table-list p-4 d-flex all-center">
                                                        <img src="styles/img/Not-Found-mob.svg" style="max-width:128px;">

                                                    </div>



                                                    {/if}


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane flex-fill fade" id="navStep--2" role="tabpanel" aria-labelledby="navStep--2-tab">
                                            <div class="depboxHome flex-fill d-flex flex-column">

                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4">
                                                    <i class="icon icon-todo"></i>
                                                    <h6 class="m-0 ml-3">Select your Wallet address</h6>
                                                </div>



                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">

                                                    <div class="payType shape-blur-bg">

                                                        <!-- {if $qplans > 1}<p><i class="fas fa-minus"></i> Select a plan :</p>{/if} -->
                                                        <ul class="compound_select d-flex align-items-stretch">


                                                            {foreach from=$ps item=p}
                                                            <li class="d-flex align-items-stretch">

                                                                {if $p.available > 0}{if $p.status > 0 || $p.available > 0}<input id="value-{$p.id}" type="radio" name="ec" value="{$p.id}" {if $frm.ec==$p.id}checked{/if}>{/if}{/if} <label for="value-{$p.id}" class="d-flex flex-column selectoryx">
                                                                <b><span class="d-flex align-items-center">{$p.name|escape:html}</span></b>

                                                                <span class="d-flex align-items-center">Available: {$currency_sign}{$p.available}</span>
                                                                <b class="d-flex align-items-center"><span style="flex:1;">Pending: {$currency_sign}{$p.pending}</span><i class="fas icon icon-todo"></i></b>

                                                                </label>
                                                            </li>

                                                            {/foreach}


                                                        </ul>
                                                    </div>

                                                    <div class="row mb-4">
                                                    </div>

                                                    <div class="txts">
                                                        <p>
                                                            - Withdrawal process time is from instant to 24 hours.<br>
                                                            - The minimum amount you can withdraw is <b style="font-size:.8rem;">10 USD</b>
                                                        </p>
                                                    </div>



                                                    <div class="p-4 d-flex flex-column justify-content-center">
                                                        <div class="d-flex justify-content-between">
                                                            <a nohref onclick="document.getElementById('navStep--1-tab').click()" class="d-flex align-items-center back-small-btn"> <i class="fas fa-long-arrow-alt-left d-flex all-center"></i>
                                                                <span class="d-flex all-center">Back</span>
                                                            </a>
                                                            <a nohref onclick="document.getElementById('withdrawform').submit();" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Continue</span>
                                                                <i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>






                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                            {/if}

                        </div>
                    </div>
                    <br>
                    <br><br>
                </div>

                {/if}




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
    if (document.getElementById('walletid').innerHTML.trim().length == 0) {
        $("#alertwallet").addClass("enablewallet");
        document.getElementById('processwithdraw').onclick = null;
    }

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
<script type="text/javascript">
    $(document).keypress(
        function(event) {
            if (event.which == '13') {
                return false;
            }
        });

    function calcthis2() {
        var dney = document.getElementById("inputsmoney").value;
        if (dney < 10) {
            document.getElementById("inputsmoney").value = 10;
        }

    };

    function doStep_1() {
        calcthis2();
        document.getElementById('navStep--2-tab').click();
    };



    function doStep_2() {
        document.getElementById('withdrawform').submit();
    };

</script>





<script>
    var clipboardDemos = new Clipboard('.btn');

    clipboardDemos.on('success', function(e) {
        e.clearSelection();

        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);

        showTooltip(e.trigger, 'Copied!');
    });

    clipboardDemos.on('error', function(e) {
        console.error('Action:', e.action);
        console.error('Trigger:', e.trigger);

        showTooltip(e.trigger, fallbackMessage(e.action));
    });



    var btns = document.querySelectorAll('.btn');

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener('mouseleave', clearTooltip);
        btns[i].addEventListener('blur', clearTooltip);
    }

    function clearTooltip(e) {
        e.currentTarget.setAttribute('class', 'btn');
        e.currentTarget.removeAttribute('aria-label');
    }

    function showTooltip(elem, msg) {
        elem.setAttribute('class', 'btn tooltipped tooltipped-s');
        elem.setAttribute('aria-label', msg);
    }

    // Simplistic detection, do not use it in production
    function fallbackMessage(action) {
        var actionMsg = '';
        var actionKey = (action === 'cut' ? 'X' : 'C');

        if (/iPhone|iPad/i.test(navigator.userAgent)) {
            actionMsg = 'No support :(';
        } else if (/Mac/i.test(navigator.userAgent)) {
            actionMsg = 'Press ⌘-' + actionKey + ' to ' + action;
        } else {
            actionMsg = 'Press Ctrl-' + actionKey + ' to ' + action;
        }

        return actionMsg;
    }

    hljs.initHighlightingOnLoad();


    $(document).keypress(
        function(event) {
            if (event.which == '13') {
                document.getElementById('navStep--2-tab').click();
            }
        });

</script>
{/literal}
