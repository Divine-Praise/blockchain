<?php /* Smarty version 3.1.27, created on 2023-10-04 09:21:58
         compiled from "/home/assetpin/public_html/tmpl/deposit.account.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1264338725651d2eb604ffa6_55707183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59651a70ac14bb2510d1a640b8711c0d41af2001' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/deposit.account.confirm.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264338725651d2eb604ffa6_55707183',
  'variables' => 
  array (
    'ok' => 0,
    'deposit' => 0,
    't' => 0,
    'currency_sign' => 0,
    'type' => 0,
    'h_id' => 0,
    'famount' => 0,
    'compound' => 0,
    'max_deposit_less' => 0,
    'max_deposit_format' => 0,
    'wrong_paln' => 0,
    'not_enough_funds' => 0,
    'less_than_min' => 0,
    'plan_name' => 0,
    'min_amount' => 0,
    'on_hold' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651d2eb6095327_18710971',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651d2eb6095327_18710971')) {
function content_651d2eb6095327_18710971 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1264338725651d2eb604ffa6_55707183';
echo $_smarty_tpl->getSubTemplate ("logomain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<main>
    <section id="dashboard" class="btc-background">
        <div class="container full-height">
            <div class="row mt-xl-5" style="padding-bottom: 180px;">

                <div class="col-xl-12">
                    <div class="wbox column deposit-form">
                        <div class="row m-0">
                            <div class="col-xl-12 p-0 d-flex">
                                <div class="depboxHome flex-fill d-flex flex-column">


                                    <?php if ($_smarty_tpl->tpl_vars['ok']->value == 1) {?>
                                    <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                        <h6 class="m-0 ml-3">Confirm your deposit</h6>
                                    </div>
                                    <div class="row m-2 flex-fill">

                                        <div class="col-md-12 p-2 d-flex flex-column justify-content-center flex-fill">
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
                                            <p class="subp">- Deposit amount: <b style="font-size:.8rem;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</b>
                                            </p>

                                            <form name=spend method=post id="spendform">

                                                <input type=hidden name=a value=deposit>
                                                <input type=hidden name=action value=confirm>
                                                <input type=hidden name=type value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value);?>
>
                                                <input type=hidden name=h_id value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['h_id']->value);?>
>
                                                <input type=hidden name=amount value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['famount']->value);?>
">
                                                <input type=hidden name=compound value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['compound']->value);?>
>



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
                                    </div>

                                    <?php } else { ?>


                                    <div class="d-flex all-center flex-column p-0 status-error">
                                        <div class="d-flex all-center flex-column p-3 pt-4 pb-4 flex-fill mb-2" style="background:#fde7e9;width:100%;">
                                            <i class="fas fa-times-circle mb-3 mt-2"></i>
                                            <h6 class="m-0"><?php if ($_smarty_tpl->tpl_vars['max_deposit_less']->value == 1) {?>
                                                Sorry, the maximal deposit is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['max_deposit_format']->value);?>
.
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['wrong_paln']->value == 1) {?>
                                                The Plan does not exist.
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['not_enough_funds']->value == 1) {?>
                                                You have not enough funds to complete the operation.
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['less_than_min']->value == 1) {?>
                                                The minimal spend amount for '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan_name']->value);?>
' is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_amount']->value);?>
.
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['on_hold']->value == 1) {?>
                                                Sorry, this amount on hold now.
                                                <?php }?></h6>
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



                                    <?php }?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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