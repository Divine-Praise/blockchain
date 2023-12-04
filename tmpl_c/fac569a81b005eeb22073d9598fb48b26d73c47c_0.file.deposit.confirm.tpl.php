<?php /* Smarty version 3.1.27, created on 2023-10-05 11:06:48
         compiled from "/home/assetpin/public_html/tmpl/deposit.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:925138136651e98c86a4277_25520124%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac569a81b005eeb22073d9598fb48b26d73c47c' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/deposit.confirm.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '925138136651e98c86a4277_25520124',
  'variables' => 
  array (
    'false_data' => 0,
    'coin_payment_image' => 0,
    'deposit' => 0,
    't' => 0,
    'currency_sign' => 0,
    'payment_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651e98c86e7331_69015050',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651e98c86e7331_69015050')) {
function content_651e98c86e7331_69015050 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '925138136651e98c86a4277_25520124';
echo $_smarty_tpl->getSubTemplate ("logomain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>




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

<main>
    <section id="dashboard" class="btc-background">
        <div class="container full-height" style="padding-bottom: 150px;">
            <div class="row mt-xl-5">
                <?php if ($_smarty_tpl->tpl_vars['false_data']->value != 1) {?>
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
                                                <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['coin_payment_image']->value);?>

                                            </div>
                                        </div>
										
                                        <div class="col-md-8 p-2 d-flex flex-column justify-content-center flex-fill">
										   <?php if ($_smarty_tpl->tpl_vars['deposit']->value['id'] > 0) {?>
                                            <p class="subp">- Investment plan: <b style="font-size:.8rem;"><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['deposit']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</b>
                                            </p>
                                            <p class="subp">- <?php if ($_smarty_tpl->tpl_vars['deposit']->value['period'] == 'end') {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 days<?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['period_name']);?>
 interest rate for <?php if ($_smarty_tpl->tpl_vars['deposit']->value['periods'] == 0) {?>lifelong<?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['time_units'] != 1) {?>s<?php }?> <?php if ($_smarty_tpl->tpl_vars['deposit']->value['work_week']) {?>(mon-fri)<?php }
}
}?>: <b style="font-size:.8rem;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['percent']);?>
%</b>
                                            </p>
                                            <p class="subp">- Principal Return: <b style="font-size:.8rem;"><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return']) {?>Yes<?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'] > 0) {?>, with <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'],2));?>
% fee<?php }
} else { ?>No (included in profit)<?php }?></b>
                                            </p>
                                            <p class="subp">- Principal Withdraw: <b style="font-size:.8rem;"><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw']) {?>Available with
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_terms'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_wpt'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_wpt']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_wpt']->value['total'];
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
                                                    <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['percent']);?>
% fee <?php if ($_smarty_tpl->tpl_vars['t']->value['duration'] > 0) {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['t']->value['duration']);?>
 days<?php }
if (!(isset($_smarty_tpl->tpl_vars['__foreach_wpt']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_wpt']->value['last'] : null)) {?> or <?php }?>
                                                    <?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']) {?> but before <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']));?>
 days<?php }?>
                                                    <?php } else { ?>Not available<?php }?></b>
                                            </p>
											<?php }?>
											
											<?php if ($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee']) {?>
											<p class="subp">- Credit Amount: <b style="font-size:.8rem;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['user_amount']);?>
</b>
                                            </p>
											<p class="subp">- Deposit Fee: <b style="font-size:.8rem;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['percent']);?>
% + <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['add_amount']);?>
 (min. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_min']);?>
 max. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['ec_fees']['fee_max']);?>
)</b>
                                            </p>
											<?php }?>
											
											<?php if ($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']) {?>
											
											<?php } else { ?>
											<p class="subp">- Debit Amount: <b style="font-size:.8rem;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</b>
                                            </p>
											<?php }?>
											
											<p class="deposit-scan-mn d-flex flex-wrap"></p>
                                            <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['payment_form']->value);?>

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
                <?php }?>
            </div>
        </div>
    </section>
</main>
<?php echo '<script'; ?>
 src="styles/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/js/tilt.jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="styles/js/clipboard.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var isMobileVersion = document.getElementsByClassName('deposit-process');
    if (isMobileVersion.length > 0) {
        $("#paymentbuttons").addClass("disablewallet");
        $("#qrcoder").addClass("disablewallet");

        // elements with class "snake--mobile" exist
    }

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            $("#header-main-menu").addClass("darkHeader");
        } else {
            $("#header-main-menu").removeClass("darkHeader");
        }
    });

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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

<?php echo '</script'; ?>
>
<iframe data-product="web_widget" title="No content" tabindex="-1" aria-hidden="true" src="about:blank" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
</body>

</html>
<?php }
}
?>