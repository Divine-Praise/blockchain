{include file="logomain.tpl"}

<main>
    <section id="dashboard" class="btc-background">
        <div class="container full-height">
            <div class="row mt-xl-5" style="padding-bottom: 180px;">

                <div class="col-xl-12">
                    <div class="wbox column deposit-form">
                        <div class="row m-0">
                            <div class="col-xl-12 p-0 d-flex">
                                <div class="depboxHome flex-fill d-flex flex-column">
                                    <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                        <h6 class="m-0 ml-3">Confirm your deposit</h6>
                                    </div>
                                    <div class="row m-2 flex-fill">


                                        {if $ok == 1}

                                        
                                        <div class="col-md-12 p-2 d-flex flex-column justify-content-center flex-fill">
										
									    {if $deposit.converted_amount}
                                          <p class="subp">- Create a new deposit: <b style="font-size:.8rem;">{$description}</b>
										  <p class="subp">- Deposit amount: <b style="font-size:.8rem;">{$currency_sign}{$deposit.converted_amount}</b>
										  {else}
										  <p class="subp">- Amount: <b style="font-size:.8rem;">{$currency_sign}{$deposit.amount}</b>
									    {/if}
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
										
										 
											

                                            <form name=spend method=post id="spendform">
                                                <input type=hidden name=a value=deposit>
                                                <input type=hidden name=action value=confirm>
                                                <input type=hidden name=type value={$type}>
                                                <input type=hidden name=h_id value={$h_id}>
                                                <input type=hidden name=compound value={$compound}>
                                                <INPUT type=hidden name=amount value="{$famount}">
                                                {if $fields}

                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                                    <h6 class="m-0 ml-3">Required Information</h6>
                                                </div>
                                                <div class="d-flex flex-column p-4">
                                                    {section name=f loop=$fields}



                                                    <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                        <p class="m-0 d-flex align-items-center" style="min-width:150px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                            <span style="font-size:12px;">{$fields[f].name}</span>
                                                        </p>
                                                        <input type="text" name="fields[{$fields[f].id}]" value="" style="font-size:14px;">
                                                    </div>

                                                    {/section}
                                                </div>
                                                {/if}






                                                <div class="d-flex justify-content-between">

                                                    <a href="?a=deposit" class="d-flex align-items-center back-small-btn"> <i class="fas fa-long-arrow-alt-left d-flex all-center"></i>
                                                        <span class="d-flex all-center">Cancel</span>
                                                    </a>
                                                    <a nohref onclick="document.getElementById('spendform').submit();" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Process</span>
                                                        <i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
                                                    </a>
                                                </div>
                                            </form>

                                        </div>
                                       

                                        {else}




                                        <div class="d-flex all-center flex-column p-0 status-error">
                                            <div class="d-flex all-center flex-column p-3 pt-4 pb-4 flex-fill mb-2" style="background:#fde7e9;width:100%;">
                                                <i class="fas fa-times-circle mb-3 mt-2"></i>
                                                <h6 class="m-0">
                                                    {if $max_deposit_less == 1}
                                                    Sorry, the maximal deposit is {$max_deposit_format}.
                                                    {/if}

                                                    {if $wrong_paln == 1}
                                                    The Plan does not exist.
                                                    {/if}

                                                    {if $not_enough_funds == 1}
                                                    You have not enough funds to complete the operation.
                                                    {/if}

                                                    {if $less_for_bankwire == 1}
                                                    The minimal spend amount for Bank Wire is {$currency_sign}{$min_amount}.
                                                    {/if}

                                                    {if $less_than_min == 1}
                                                    The minimal spend amount for '{$plan_name}' is {$currency_sign}{$min_amount}.
                                                    {/if}

                                                    {if $zero_amount}
                                                    You should enter amount grater than zero.
                                                    {/if}
                                                </h6>
                                            </div>
                                            <div class="d-flex all-center flex-column p-3">


                                                <p class="mt-2 mb-1">Your transaction could not be processed.</p>

                                            </div>


                                            <div class="p-3 d-flex flex-column justify-content-center flex-fill" style="border-bottom:1px solid #F2F3F7;width:100%;">
                                                <div class="d-flex  flex-wrap all-center">
                                                    <a onclick="window.top.location.href = '?a=deposit'" nohref="" class="d-flex align-items-center deposit-small-btn  m-1">
                                                        <span class="d-flex all-center p-0" style="padding-top: 5px!important;padding-bottom: 5px!important;padding-left: 10px!important;padding-right: 10px!important;">Back to Deposit</span>
                                                    </a>
                                                </div>
                                            </div>


                                        </div>

                                        {/if}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
