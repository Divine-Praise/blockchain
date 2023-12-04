{include file="logomain.tpl"}

<main>
    <section id="dashboard" class="btc-background">
        <div class="container full-height ">
            <div class="row mt-xl-5">
                <div class="col-xl-12">





                    {if $say == 'processed'}

                    <div class="status-box errors p-3" style="background:#E8F1EB;margin-top: 15px;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-check-circle aniview d6"></i>
                            Internal transfer has been successfully completed.</p>
                    </div>
                    <br>
                    {/if}

                    {if $fatals}

                    {if $fatals.forbidden}

                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Internal transfers are forbidden.
                        </p>
                    </div>
                    <br>
                    {/if}
                    {if $fatals.no_deposits}

                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You can not send funds before you make any deposit.
                        </p>
                    </div>
                    <br>
                    {/if}
                    {if $fatals.times_limit}
                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You can send internal transfer {$settings.limit_transfer_period_times} per {$settings.limit_transfer_period_date} only.
                        </p>
                    </div>
                    <br>
                    {/if}

                    {else}

                    {if $errors.turing_image}
                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Invalid turing image.
                        </p>
                    </div>
                    <br>
                    {/if}


                    {if $errors.user_not_found}

                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            The recipient's username entered has not been found or has been suspended.
                        </p>
                    </div>
                    <br>
                    {/if}
                    {if $errors.less_min}

                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You can transfer the amount not less {$currency_sign}{if $settings.internal_transfer_min}{$settings.internal_transfer_min}{else}0.00{/if} only.
                        </p>
                    </div>
                    <br>
                    {/if}
                    {if $errors.too_big_amount}

                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You have no such amount on your balance.
                        </p>
                    </div>
                    <br>
                    {/if}
                    {if $errors.too_big_amount_plus_fee}

                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            You have no enough funds to complte the transaction. Total amount you should have to send ${$frm.amount|amount_format} + fee is <b>${$errors.too_big_amount_plus_fee}</b>.
                        </p>
                    </div>
                    <br>

                    {/if}
                    {if $errors.greater_max}

                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Maximum amount you can send is {$currency_sign}{$settings.internal_transfer_max}.
                        </p>
                    </div>
                    <br>
                    {/if}

                    {if $errors.invalid_transaction_code}
                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-bell"></i>
                            Invalid Transaction Code.
                        </p>
                    </div>
                    <br>
                    {/if}









                    <div class="wbox column deposit-form">



                        {if $preview}

                        <div class="row m-0">
                            <div class="col-xl-4 p-0 depboxHome border-right">
                                <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-organize "></i>
                                    <h6 class="m-0 ml-3">Account Balance</h6>
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
                                        <a class="nav-link d-flex align-items-center" id="navStep--1-tab" data-toggle="tab" href="#navStep--1" role="tab" aria-controls="navStep--1" aria-selected="true"> <span class="d-flex all-center">1</span>
                                            <p class="m-0 ml-3 mr-3">Enter transfer amount</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--2-tab" data-toggle="tab" href="#navStep--2" role="tab" aria-controls="navStep--2" aria-selected="true"> <span class="d-flex all-center">2</span>
                                            <p class="m-0 ml-3 mr-3">Choose your e-currency</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--3-tab" data-toggle="tab" href="#navStep--3" role="tab" aria-controls="navStep--3" aria-selected="true"> <span class="d-flex all-center">3</span>
                                            <p class="m-0 ml-3 mr-3">Transfer to account</p>
                                        </a>
                                    </li>
                                    <li class="nav-item no">
                                        <a class="nav-link d-flex align-items-center active" id="navStep--4-tab" data-toggle="tab" href="#navStep--4" role="tab" aria-controls="navStep--4" aria-selected="false"> <span class="d-flex all-center">4</span>
                                            <p class="m-0 ml-3 mr-3">Confirm your transfer</p>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-xl-8 p-0 d-flex">










                                <form method=post name="spendform" id="spendform2" class="d-flex flex-fill">
                                    <input type=hidden name=a value=internal_transfer>
                                    <input type=hidden name=action value=confirm>
                                    <input type=hidden name=amount value={$amount}>
                                    <input type=hidden name=account value={$user.username|escape:html}>
                                    <input type=hidden name=ec value={$ec}>
                                    <input type=hidden name=comment value="{$comment}">






                                    <div class="tab-content d-flex flex-fill">






                                        <div class="tab-pane fade active flex-fill show" id="navStep--1" role="tabpanel" aria-labelledby="navStep--1-tab">
                                            <div class="depboxHome flex-fill d-flex flex-column">
                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                                    <h6 class="m-0 ml-3">Internal Transfer</h6>
                                                </div>


                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">



                                                    <p class="subp">- Payment System: <b style="font-size:.8rem;">{$currency}</p>
                                                    <p class="subp">- Recipient: <b style="font-size:.8rem;">{$user.username|escape:html}</p>
                                                    <p class="subp">- Fee: <b style="font-size:.8rem;">{if $fee > 0}{$settings.internal_transfer_fee}% (min. {$currency_sign}{$settings.minimum_internal_transfer_fee}){else}We have no fee for this operation.{/if}</p>
                                                    <p class="subp">- Debit Amount: <b style="font-size:.8rem;">{$currency_sign}{$to_send}</p>
                                                    <p class="subp">- Credit Amount: <b style="font-size:.8rem;">{$currency_sign}{$to_receive}</p>


                                                    {if $settings.use_transaction_code && $userinfo.transaction_code}
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                            <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                                <span style="font-size:12px;">Current Transaction Code</span>
                                                            </p>
                                                            <input type="password" name="transaction_code" style="font-size:14px;">
                                                        </div>
                                                    </div>
                                                    {/if}
													
													 {if $ti.check.internal_transfer}
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                            <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="fas fa-key pr-2" style="color:#F8AC4A;"></i>
                                                                <span style="font-size:12px;"> <img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"></span>
                                                            </p>
                                                            <input placeholder="Enter your Code" type=text name=validation_number style="font-size:14px;">
                                                        </div>
                                                    </div>
                                                    {/if}





                                                    <div class="d-flex mt-4 pt-2 justify-content-between"> <span></span>
                                                        <a nohref onclick="document.getElementById('spendform2').submit();" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Confirm</span>
                                                            <i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
                                                        </a>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>








                                    </div>

                                </form>


                            </div>
                        </div>






                        {else}





                        <div class="row m-0">
                            <div class="col-xl-4 p-0 depboxHome border-right">
                                <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-organize "></i>
                                    <h6 class="m-0 ml-3">Account Balance</h6>
                                </div>
                                <div class="changeType ybg d-flex align-items-center p-4" style="position:relative;z-index:999;">
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
                                        <a class="nav-link d-flex align-items-center active" id="navStep--1-tab" data-toggle="tab" href="#navStep--1" role="tab" aria-controls="navStep--1" aria-selected="true"> <span class="d-flex all-center">1</span>
                                            <p class="m-0 ml-3 mr-3">Enter transfer amount</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--2-tab" data-toggle="tab" href="#navStep--2" role="tab" aria-controls="navStep--2" aria-selected="true"> <span class="d-flex all-center">2</span>
                                            <p class="m-0 ml-3 mr-3">Choose your e-currency</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--3-tab" data-toggle="tab" href="#navStep--3" role="tab" aria-controls="navStep--3" aria-selected="true"> <span class="d-flex all-center">3</span>
                                            <p class="m-0 ml-3 mr-3">Transfer to account</p>
                                        </a>
                                    </li>
                                    <li class="nav-item no">
                                        <a class="nav-link d-flex align-items-center" id="navStep--4-tab" data-toggle="tab" href="#navStep--4" role="tab" aria-controls="navStep--4" aria-selected="false"> <span class="d-flex all-center">4</span>
                                            <p class="m-0 ml-3 mr-3">Confirm your transfer</p>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-xl-8 p-0 d-flex">










                                <form method=post name="spendform" id="spendform" class="d-flex flex-fill">
                                    <input type=hidden name=a value=internal_transfer>
                                    <input type=hidden name=action value=preview>
                                    <input type=hidden name=say value="">






                                    <div class="tab-content d-flex flex-fill">






                                        <div class="tab-pane fade active flex-fill show" id="navStep--1" role="tabpanel" aria-labelledby="navStep--1-tab">
                                            <div class="depboxHome flex-fill d-flex flex-column">
                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                                    <h6 class="m-0 ml-3">Internal Transfer</h6>
                                                </div>


                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">



                                                    <div class="depInput d-flex align-items-center mb-4">

                                                        <input type="number" type=text name=amount value="{if $frm.amount}{$frm.amount|escape:htmlall}{else}10.00{/if}" id="inputsmoney" autocomplete="off" required="" style="min-width:100px;border:none;">


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



                                                    <div class="d-flex mt-4 pt-2 justify-content-between"> <span></span>
                                                        <a nohref onclick="doStep_1();" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Continue</span>
                                                            <i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="tab-pane flex-fill fade" id="navStep--2" role="tabpanel" aria-labelledby="navStep--2-tab">
                                            <div class="depboxHome flex-fill d-flex flex-column">
                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-todo"></i>
                                                    <h6 class="m-0 ml-3">Choose your e-currency</h6>
                                                </div>
                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">
                                                    <div class="payType shape-blur-bg">

                                                        <ul class="compound_select d-flex align-items-stretch">



                                                            {foreach from=$ps item=p}
                                                            {if $p.available > 0}
                                                            <li class="d-flex align-items-stretch">
                                                                <input id="value-{$p.id}" type="radio" name=ec value="{$p.id}"> <label for="value-{$p.id}" class="d-flex flex-column selectoryx">
                                                                    <b class="d-flex align-items-center"><span style="flex:1;">Wallet {$p.name}</span><i class="fas fa-qrcode"></i></b>

                                                                    <span class="d-flex align-items-center">Balance: {if $p.balance > 0}{$currency_sign}{$p.balance}{if $p.hold > 0} / {$currency_sign}{$p.hold} on hold{/if}{/if}</span>

                                                                </label>
                                                            </li>
                                                            {/if}
                                                            {/foreach}

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="p-4 d-flex flex-column justify-content-center">
                                                    <div class="d-flex justify-content-between">
                                                        <a nohref onclick="document.getElementById('navStep--1-tab').click()" class="d-flex align-items-center back-small-btn"> <i class="fas fa-long-arrow-alt-left d-flex all-center"></i>
                                                            <span class="d-flex all-center">Back</span>
                                                        </a>
                                                        <a nohref onclick="document.getElementById('navStep--3-tab').click()" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Continue</span>
                                                            <i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="tab-pane flex-fill fade" id="navStep--3" role="tabpanel" aria-labelledby="navStep--3-tab">
                                            <div class="depboxHome flex-fill d-flex flex-column">
                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-todo"></i>
                                                    <h6 class="m-0 ml-3">Transfer To Account</h6>
                                                </div>
                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">

                                                    <div class="depInput d-flex align-items-center mb-4">

                                                        <input type="text" name=account value="{$frm.account|escape:htmlall}" id="inputsmoney" autocomplete="off" required="" style="min-width:100px;border:none;">



                                                        <div class="d-flex align-items-center pl-2 pr-4">
                                                            <p class="m-0 ml-2">Enter Account to Transfer</p>
                                                        </div>

                                                    </div>

                                                   

                                                </div>
                                                <div class="p-4 d-flex flex-column justify-content-center">
                                                    <div class="d-flex justify-content-between">
                                                        <a nohref onclick="document.getElementById('navStep--2-tab').click()" class="d-flex align-items-center back-small-btn"> <i class="fas fa-long-arrow-alt-left d-flex all-center"></i>
                                                            <span class="d-flex all-center">Back</span>
                                                        </a>
                                                        <a nohref onclick="document.getElementById('spendform').submit();" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Continue</span>
                                                            <i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>


                            </div>
                        </div>
                        {/if}

                        {/if}


                    </div>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
        </div>
        </div>
</main>
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
</body>

</html>

{literal}
<script type="text/javascript">
    function doStep_1() {

        document.getElementById('navStep--2-tab').click();
    };

</script>

<script type="text/javascript">
    document.querySelectorAll('[name=type]')[0].checked = true;

</script>
{/literal}
