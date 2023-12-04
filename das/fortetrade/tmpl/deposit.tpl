{include file="logomain.tpl"}

<main>
    <section id="dashboard" class="btc-background">
        <div class="container full-height ">
            <div class="row mt-xl-5">
                <div class="col-xl-12">
                    {literal}
                    <div class="wbox column deposit-form">
                        <div class="row m-0">
                            <div class="col-xl-4 p-0 depboxHome border-right">
                                <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-organize "></i>
                                    <h6 class="m-0 ml-3">Create a new deposit</h6>
                                </div>
                                <div class="changeType ybg d-flex align-items-center p-4" style="position:relative;z-index:998;">
                                    <p style="flex:1;">USD Dashboard</p>
                                    <button class="small-button d-flex align-items-center" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                        <label class="m-0 ml-2 mr-1">USD Dollar</label>
                                    </button>
                                </div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs stepNav p-4 mt-2 mb-2 flex-column" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="navStep--1-tab" data-toggle="tab" href="#navStep--1" role="tab" aria-controls="navStep--1" aria-selected="true"> <span class="d-flex all-center">1</span>
                                            <p class="m-0 ml-3 mr-3">Choose an investment plan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--2-tab" data-toggle="tab" href="#navStep--2" role="tab" aria-controls="navStep--2" aria-selected="true"> <span class="d-flex all-center">2</span>
                                            <p class="m-0 ml-3 mr-3">Enter the deposit amount</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="navStep--3-tab" data-toggle="tab" href="#navStep--3" role="tab" aria-controls="navStep--3" aria-selected="false"> <span class="d-flex all-center">3</span>
                                            <p class="m-0 ml-3 mr-3">Choose your payment method</p>
                                        </a>
                                    </li>
                                    <li class="nav-item no ">
                                        <a class="nav-link d-flex align-items-center" nohref> <span class="d-flex all-center">4</span>
                                            <p class="m-0 ml-3 mr-3">Confirm your deposit</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            {/literal}
                            <div class="col-xl-8 p-0 d-flex">










                                {if $fatal}

                                {if $fatal == 'one_per_month'}
                                <div class="status-box errors p-3" style="background:#E8F1EB;margin-top: 15px;">
                                    <p style="line-height:120%;font-size:12px;"><i class="fas fa-check-circle aniview d6"></i>
                                        You can deposit once a month only.</p>
                                </div>

                                {/if}

                                {else}

                                {literal}
                                <script language="javascript">
                                    <!--
                                    function openCalculator(id) {

                                        w = 225;
                                        h = 400;
                                        t = (screen.height - h - 30) / 2;
                                        l = (screen.width - w - 30) / 2;
                                        window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w + ",height=" + h + ",resizable=1,scrollbars=0");

                                        {
                                            /literal} {
                                            if $qplans > 1
                                        } {
                                            literal
                                        }
                                        for (i = 0; i < document.spendform.h_id.length; i++) {
                                            if (document.spendform.h_id[i].value == id) {
                                                document.spendform.h_id[i].checked = true;
                                            }
                                        } {
                                            /literal} { /
                                            if
                                        } {
                                            literal
                                        }

                                    }

                                    function updateCompound() {
                                        var id = 0;
                                        var tt = document.spendform.h_id.type;
                                        if (tt && tt.toLowerCase() == 'hidden') {
                                            id = document.spendform.h_id.value;
                                        } else {
                                            for (i = 0; i < document.spendform.h_id.length; i++) {
                                                if (document.spendform.h_id[i].checked) {
                                                    id = document.spendform.h_id[i].value;
                                                }
                                            }
                                        }

                                        var cpObj = document.getElementById('compound_percents');
                                        if (cpObj) {
                                            while (cpObj.options.length != 0) {
                                                cpObj.options[0] = null;
                                            }
                                        }

                                        if (cps[id] && cps[id].length > 0) {
                                            document.getElementById('coumpond_block').style.display = '';

                                            for (i in cps[id]) {
                                                cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                                            }
                                        } else {
                                            document.getElementById('coumpond_block').style.display = 'none';
                                        }
                                    }
                                    var cps = {};

                                    -->
                                </script>
                                {/literal}



                                <form method=post name="spendform" id="spendform" class="d-flex flex-fill">
                                    <input type=hidden name=a value=deposit>







                                    <div class="tab-content d-flex flex-fill">
                                        <div class="tab-pane fade active flex-fill show" id="navStep--1" role="tabpanel" aria-labelledby="navStep--1-tab">
                                            <div class="depboxHome flex-fill d-flex flex-column">
                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart2"></i>
                                                    <h6 class="m-0 ml-3">Choose an investment plan</h6>
                                                </div>




                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">



                                                    {if $frm.say eq 'deposit_success'}
                                                    <div class="status-box errors p-3" style="background:#E8F1EB;margin-top: 15px;">
                                                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-check-circle aniview d6"></i>
                                                            The deposit has been successfully saved.</p>
                                                    </div>
                                                    {/if}

                                                    {if $frm.say eq 'deposit_saved'}
                                                    <div class="status-box errors p-3" style="background:#E8F1EB;margin-top: 15px;">
                                                        <p style="line-height:120%;font-size:12px;"><i class="fas fa-check-circle aniview d6"></i>
                                                            The deposit has been saved. It will become active when the administrator checks statistics.</p>
                                                    </div>
                                                    {/if}


                                                    {if $errors}
                                                    {if $errors.less_min}
                                                    <div class="table-row d-flex align-items-center flex-column">
                                                        <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">Sorry, you can deposit not less than {$currency_sign}{$errors.less_min} with selected processing</a>
                                                        </p>
                                                    </div>

                                                    {/if}
                                                    {if $errors.greater_max}
                                                    <div class="table-row d-flex align-items-center flex-column">
                                                        <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">Sorry, you can deposit not greater than {$currency_sign}{$errors.greater_max} with selected processing</a>
                                                        </p>
                                                    </div>
                                                    {/if}
                                                    {if $errors.ec_forbidden}
                                                    <div class="table-row d-flex align-items-center flex-column">
                                                        <p class="text-center mb-0" style="font-weight:400;font-size:10px;line-height:140%;padding-top:1rem;">Sorry, deposit with selected processing is temproary forbidden.</a>
                                                        </p>
                                                    </div>
                                                    {/if}
                                                    {/if}


                                                    <div class="payType shape-blur-bg">
                                                        <!-- {if $qplans > 1}<p><i class="fas fa-minus"></i> Select a plan :</p>{/if} -->
                                                        <ul class="compound_select d-flex align-items-stretch">


                                                            {section name=plans loop=$plans}
                                                            <li class="d-flex align-items-stretch">
                                                                {if $qplans > 1}
                                                                <input id="value-{$plans[plans].id}" type="radio" name=h_id value='{$plans[plans].id}' {if (($smarty.section.plans.first==1) && ($frm.h_id eq '' )) || ($frm.h_id==$plans[plans].id)} checked {/if} onclick="updateCompound()">
                                                                {else}
                                                                <input type=hidden name=h_id value='{$plans[plans].id}'>
                                                                {/if}
                                                                <label for="value-{$plans[plans].id}" class="d-flex flex-column selectoryx">
                                                                    <b><span class="d-flex align-items-center">{$plans[plans].name}</span></b>
                                                                    {section name=options loop=$plans[plans].plans}
                                                                    <span class="d-flex align-items-center">Deposit Limit: {$plans[plans].plans[options].deposit}</span>
                                                                    <b class="d-flex align-items-center"><span style="flex:1;">{$plans[plans].period} Profit: {$plans[plans].plans[options].percent}</span><i class="fas icon icon-chart"></i></b>
                                                                    {/section}
                                                                </label>
                                                            </li>

                                                            <script>
                                                                cps[{
                                                                    $plans[plans].id
                                                                }] = {
                                                                    $plans[plans].compound_percents_json
                                                                };

                                                            </script>

                                                            {/section}


                                                        </ul>
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
                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                                    <h6 class="m-0 ml-3">Enter the deposit amount</h6>
                                                </div>


                                                <div class="p-4 d-flex flex-column justify-content-center flex-fill">
                                                    <div class="depInput d-flex align-items-center mb-4">

                                                        <input type="number" name="amount" value="100" id="inputsmoney" autocomplete="off" required="" min="10" style="min-width:100px;border:none;" onfocus="calcthis();" oninput="calcthis();" onblur="calcthis();">

                                                       
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
                                                    <p class="m-0 mt-2 mb-0 d-flex align-items-center flex-wrap" style="font-size:11px!important;line-height:1;height:auto;">
                                                        <label style="color:#F89F35;line-height:1;padding:0;margin:0 5px 0 0;">*</label> <span>Current account balance : {$currency_sign}{$ab_formated.total}</span>
                                                    </p>
                                                    {section name=p loop=$ps}
                                                    {if $ps[p].balance > 0}
                                                    <p class="m-0 mt-2 mb-0 d-flex align-items-center flex-wrap" style="font-size:11px!important;line-height:1;height:auto;">
                                                        <label style="color:#F89F35;line-height:1;padding:0;margin:0 5px 0 0;">*</label> <span>Current {$ps[p].name} balance : {$currency_sign}{$ps[p].balance} {if $hold[p].amount > 0} / {$currency_sign}{$hold[p].amount} on hold{/if}</span>
                                                    </p>
                                                    {/if}
                                                    {/section}
                                                    <p class="m-0 mt-2 mb-3 d-flex align-items-center" style="font-size:11px!important;;line-height:1;height:auto;">
                                                        <label style="color:#F89F35;line-height:1;padding:0;margin:0 5px 0 0;"></label>
                                                    </p>

                                                    <div class="d-flex mt-4 pt-2 justify-content-between">
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

                                                            {section name=p loop=$ps}
                                                            {if $ps[p].balance > 0 and $ps[p].status == 1}
                                                            <li class="d-flex align-items-stretch">
                                                                <input id="valueacc-{$ps[p].id}" type="radio" name=type value="account_{$ps[p].id}">
                                                                <label for="valueacc-{$ps[p].id}" class="d-flex flex-column selectoryx"> <span class="d-flex align-items-center">Deposit from your Account Balance</span>
                                                                    <b class="d-flex align-items-center">
                                                                        <span style="flex:1;">{$ps[p].name}</span>
                                                                        <i class="fas fa-piggy-bank"></i>
                                                                    </b>
                                                                </label>
                                                            </li>
                                                            {/if}
                                                            {/section}

                                                        </ul>
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
                                    {/if}
                                </form>
                            </div>
                        </div>

                        {literal}
                        <script language=javascript>
                            for (i = 0; i < document.spendform.type.length; i++) {
                                if ((document.spendform.type[i].value.match(/^process_/))) {
                                    document.spendform.type[i].checked = true;
                                    break;
                                }
                            }
                            updateCompound();

                        </script>
                        {/literal}

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
