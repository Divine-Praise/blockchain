{include file="logomain.tpl"}


{literal}
<style>
    .disablewallet {
        display: none !important;

    }

    .deposit-process-wrap {
        border-radius: 5px;
        background: -webkit-linear-gradient(235deg, #353448 0%, #353448 33%, #FFA351 66%, #FFC059 100%);
        background: linear-gradient(235deg, #353448 0%, #353448 33%, #FFA351 66%, #FFC059 100%);
        background-size: 300%;
        background-position: 0px;
        transition: All .5s ease;
        -webkit-transition: All .5s ease;
        color: #fff;
        margin-right: 6px;
        padding-top: 10px;
        padding-bottom: 15px;
        padding-left: 20px;
        padding-right: 20px;
        cursor: pointer;
        -webkit-box-shadow: 0px 12px 32px -4px rgba(255, 192, 89, 1);
        box-shadow: 0px 12px 32px -4px rgba(255, 192, 89, 1);
    }

    .deposit-process-wrap:hover {
        background-position: 100%;
        -webkit-box-shadow: 0 0 0 0 rgba(255, 192, 89, 1);
        box-shadow: 0 0 0 0 rgba(255, 192, 89, 1);
    }


    .deposit-process {
        border: none;
        font-weight: 500;
        font-size: 12px;
        text-transform: uppercase;
        padding: 5px 16px;
        color: #fff;
        border-radius: 2px;
        box-shadow: 0 0 0 #FF8C00;
        min-width: 0px;
        transition: All .5s;
        position: relative;

        display: inline-block;
        font-weight: 400;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;

        line-height: 1.5;

    }


    .deposit-cancel-wrap {
        border-radius: 5px;
        background: #EAEBEE;
        color: #A8AFBE;
        background-size: 300%;
        background-position: 0px;
        transition: All .5s ease;
        -webkit-transition: All .5s ease;
        color: #fff;
        margin-right: 6px;
        padding-top: 10px;
        padding-bottom: 15px;
        padding-left: 20px;
        padding-right: 20px;
        cursor: pointer;
        margin-left: 30%;
    }

    .deposit-cancel:hover {
        color: #353448;
    }


    .deposit-cancel {
        border: none;
        font-weight: 500;
        font-size: 12px;
        text-transform: uppercase;
        padding: 5px 16px;
        color: #fff;
        border-radius: 2px;
        box-shadow: 0 0 0 #FF8C00;
        min-width: 0px;
        transition: All .5s;
        position: relative;

        display: inline-block;
        font-weight: 400;
        color: #A8AFBE;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: .375rem .75rem;

        line-height: 1.5;

    }

</style>
{/literal}
<main>
    <section id="dashboard" class="btc-background">
        <div class="container full-height" style="padding-bottom: 150px;">
            <div class="row mt-xl-5">
                {if $false_data != 1}
                <div class="col-xl-12">
                    <div class="wbox column deposit-form">
                        <div class="row m-0">
                            <div class="col-xl-12 p-0 d-flex">
                                <div class="depboxHome flex-fill d-flex flex-column">
                                    <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                        <h6 class="m-0 ml-3">Confirm your deposit</h6>
                                    </div>
									
                                    <div class="row m-2 flex-fill">
                                        <div id="qrcoder" class="col-md-4 p-2 d-flex all-center">
                                            <div>
                                                {$coin_payment_image}
                                            </div>
                                        </div>
										
                                        <div class="col-md-8 p-2 d-flex flex-column justify-content-center flex-fill">
										   {if $deposit.id > 0}
                                            <p class="subp">- Investment plan: <b style="font-size:.8rem;">{$deposit.name|escape:html}</b>
                                            </p>
                                            <p class="subp">- {if $deposit.period == 'end'}after {$deposit.periods} days{else}{$deposit.period_name} interest rate for {if $deposit.periods == 0}lifelong{else}{$deposit.periods} {$deposit.time_units}{if $deposit.time_units != 1}s{/if} {if $deposit.work_week}(mon-fri){/if}{/if}{/if}: <b style="font-size:.8rem;">{$deposit.percent}%</b>
                                            </p>
                                            <p class="subp">- Principal Return: <b style="font-size:.8rem;">{if $deposit.principal_return}Yes{if $deposit.principal_return_hold_percent > 0}, with {$deposit.principal_return_hold_percent|number_format:2}% fee{/if}{else}No (included in profit){/if}</b>
                                            </p>
                                            <p class="subp">- Principal Withdraw: <b style="font-size:.8rem;">{if $deposit.principal_withdraw}Available with
                                                    {foreach from=$deposit.principal_withdraw_terms item=t name=wpt}
                                                    {$t.percent}% fee {if $t.duration > 0}after {$t.duration} days{/if}{if !$smarty.foreach.wpt.last} or {/if}
                                                    {/foreach}
                                                    {if $deposit.principal_withdraw_duration_max} but before {$deposit.principal_withdraw_duration_max|number_format} days{/if}
                                                    {else}Not available{/if}</b>
                                            </p>
											{/if}
											
											{if $deposit.ec_fees.fee}
											<p class="subp">- Credit Amount: <b style="font-size:.8rem;">{$currency_sign}{$deposit.user_amount}</b>
                                            </p>
											<p class="subp">- Deposit Fee: <b style="font-size:.8rem;">{$deposit.ec_fees.percent}% + {$currency_sign}{$deposit.ec_fees.add_amount} (min. {$currency_sign}{$deposit.ec_fees.fee_min} max. {$currency_sign}{$deposit.ec_fees.fee_max})</b>
                                            </p>
											{/if}
											
											{if $deposit.converted_amount}
											
											{else}
											<p class="subp">- Debit Amount: <b style="font-size:.8rem;">{$currency_sign}{$deposit.amount}</b>
                                            </p>
											{/if}
											
											<p class="deposit-scan-mn d-flex flex-wrap"></p>
                                            {$payment_form}
                                            <p></p>

                                            <div id="paymentbuttons" class="d-flex justify-content-between">
                                                <a href="?a=account" class="d-flex align-items-center deposit-small-btn"> <i class="fas fa-long-arrow-alt-left d-flex all-center"></i>
                                                    <span class="d-flex all-center">I have paid</span>
                                                </a>
                                                <button class="d-flex align-items-center deposit-small-btn" style="border:none;outline:none;margin:0;" data-clipboard-action="copy" data-clipboard-target="#btc_form a" data-original-title="" title=""> <span class="d-flex all-center">Copy Wallet Address</span>
                                                </button>
                                            </div>

                                        </div>
										
										
                                    </div>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/if}
            </div>
        </div>
    </section>
</main>
<script src="styles/js/jquery-3.4.1.min.js"></script>
<script src="styles/js/bootstrap.bundle.min.js"></script>
<script src="styles/js/owl.carousel.min.js"></script>
<script src="styles/js/tilt.jquery.min.js"></script>
<script src="styles/js/clipboard.min.js"></script>
<script>
    var isMobileVersion = document.getElementsByClassName('deposit-process');
    if (isMobileVersion.length > 0) {
        $("#paymentbuttons").addClass("disablewallet");
        $("#qrcoder").addClass("disablewallet");

        // elements with class "snake--mobile" exist
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
<script>
    $('button').tooltip({
        trigger: 'click',
        placement: 'bottom'
    });

    function setTooltip(btn, message) {
        $(btn).tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
    }

    function hideTooltip(btn) {
        setTimeout(function() {
            $(btn).tooltip('hide');
        }, 1000);
    }

    // Clipboard

    var clipboard = new Clipboard('button');

    clipboard.on('success', function(e) {
        setTooltip(e.trigger, 'Copied!');
        hideTooltip(e.trigger);
    });

    clipboard.on('error', function(e) {
        setTooltip(e.trigger, 'Failed!');
        hideTooltip(e.trigger);
    });

</script>
<iframe data-product="web_widget" title="No content" tabindex="-1" aria-hidden="true" src="about:blank" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
</body>

</html>
