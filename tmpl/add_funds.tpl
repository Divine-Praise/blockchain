{include file="logomain.tpl"}

<main>
    <section id="dashboard" class="btc-background">
        <div class="container full-height ">
            <div class="row mt-xl-5">
                <div class="col-xl-12">

                    <div class="wbox column deposit-form">
                        <div class="row m-0">
                            <div class="col-xl-4 p-0 depboxHome border-right">
                                <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-organize "></i>
                                    <h6 class="m-0 ml-3">Balance Top Up</h6>
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
                                        <a class="nav-link d-flex align-items-center active" id="navStep--1-tab" data-toggle="tab" href="#navStep--1" role="tab" aria-controls="navStep--1" aria-selected="true"> <span class="d-flex all-center">1</span>
                                            <p class="m-0 ml-3 mr-3">Enter the top up amount</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--2-tab" data-toggle="tab" href="#navStep--2" role="tab" aria-controls="navStep--2" aria-selected="true"> <span class="d-flex all-center">2</span>
                                            <p class="m-0 ml-3 mr-3">Choose your payment method</p>
                                        </a>
                                    </li>
                                    <li class="nav-item no">
                                        <a class="nav-link d-flex align-items-center" id="navStep--3-tab" data-toggle="tab" href="#navStep--3" role="tab" aria-controls="navStep--3" aria-selected="false"> <span class="d-flex all-center">3</span>
                                            <p class="m-0 ml-3 mr-3">Confirm your top up</p>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-xl-8 p-0 d-flex">









                                <form method=post name="spendform" id="spendform" class="d-flex flex-fill">
                                    <input type=hidden name=a value=deposit>
                                    <input type=hidden name=h_id value=-1>






                                    <div class="tab-content d-flex flex-fill">






                                        <div class="tab-pane fade active flex-fill show" id="navStep--1" role="tabpanel" aria-labelledby="navStep--1-tab">
                                            <div class="depboxHome flex-fill d-flex flex-column">
                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                                    <h6 class="m-0 ml-3">Enter the top up amount</h6>
                                                </div>


                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">
                                                    <div class="depInput d-flex align-items-center mb-4">

                                                        <input type="number" name="amount" value="10" id="inputsmoney" autocomplete="off" required="" min="10" style="min-width:100px;border:none;" onfocus="calcthis();" oninput="calcthis();" onblur="calcthis();">


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
                                                    {section name=p loop=$ps}
                                                    {if $ps[p].balance > 0}
                                                    <p class="m-0 mt-2 mb-0 d-flex align-items-center flex-wrap" style="font-size:11px!important;line-height:1;height:auto;">
                                                        <label style="color:#F89F35;line-height:1;padding:0;margin:0 5px 0 0;">*</label> <span>Current {$ps[p].name} balance : {$currency_sign}{$ps[p].balance} {if $hold[p].amount > 0} / {$currency_sign}{$hold[p].amount} on hold{/if}</span>
                                                    </p>
                                                    {/if}
                                                    {/section}


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
                                                    <h6 class="m-0 ml-3">Choose your payment method</h6>
                                                </div>
                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">
                                                    <div class="payType shape-blur-bg">
                                                        <p><i class="fas fa-minus"></i> Payment method :</p>
                                                        <ul class="compound_select d-flex align-items-stretch">



                                                            {section name=p loop=$ps}
                                                            {if $ps[p].status}
                                                            <li class="d-flex align-items-stretch">
                                                                <input id="value-{$ps[p].id}" type="radio" name=type value="process_{$ps[p].id}" {if $smarty.section.p.index==0}checked{/if}> <label for="value-{$ps[p].id}" class="d-flex flex-column selectoryx"> <span class="d-flex align-items-center">Direct deposit from your Wallet</span>
                                                                    <b class="d-flex align-items-center"><span style="flex:1;">{$ps[p].name}</span><i class="fas fa-qrcode"></i></b>
                                                                </label>
                                                            </li>
                                                            {/if}
                                                            {/section}

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="p-4 d-flex flex-column justify-content-center">
                                                    <div class="d-flex justify-content-between">
                                                        <a nohref onclick="document.getElementById('navStep--1-tab').click()" class="d-flex align-items-center back-small-btn"> <i class="fas fa-long-arrow-alt-left d-flex all-center"></i>
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
