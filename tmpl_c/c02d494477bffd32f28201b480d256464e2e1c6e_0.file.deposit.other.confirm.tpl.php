<?php /* Smarty version 3.1.27, created on 2023-10-05 11:48:08
         compiled from "/home/assetpin/public_html/tmpl/deposit.other.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:551810080651ea2782c4f03_29407398%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c02d494477bffd32f28201b480d256464e2e1c6e' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/deposit.other.confirm.tpl',
      1 => 1696506375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '551810080651ea2782c4f03_29407398',
  'variables' => 
  array (
    'ok' => 0,
    'deposit' => 0,
    'description' => 0,
    'currency_sign' => 0,
    't' => 0,
    'type' => 0,
    'h_id' => 0,
    'compound' => 0,
    'famount' => 0,
    'fields' => 0,
    'max_deposit_less' => 0,
    'max_deposit_format' => 0,
    'wrong_paln' => 0,
    'not_enough_funds' => 0,
    'less_for_bankwire' => 0,
    'min_amount' => 0,
    'less_than_min' => 0,
    'plan_name' => 0,
    'zero_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651ea27831bf74_66090568',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651ea27831bf74_66090568')) {
function content_651ea27831bf74_66090568 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '551810080651ea2782c4f03_29407398';
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
                                    <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                        <h6 class="m-0 ml-3">Confirm your deposit</h6>
                                    </div>
                                    <div class="row m-2 flex-fill">


                                        <?php if ($_smarty_tpl->tpl_vars['ok']->value == 1) {?>

                                        
                                        <div class="col-md-12 p-2 d-flex flex-column justify-content-center flex-fill">
										
									    <?php if ($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']) {?>
                                          <p class="subp">- Create a new deposit: <b style="font-size:.8rem;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['description']->value);?>
</b>
										  <p class="subp">- Deposit amount: <b style="font-size:.8rem;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['converted_amount']);?>
</b>
										  <?php } else { ?>
										  <p class="subp">- Amount: <b style="font-size:.8rem;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</b>
									    <?php }?>
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
										
										 
											

                                            <form name=spend method=post id="spendform">
                                                <input type=hidden name=a value=deposit>
                                                <input type=hidden name=action value=confirm>
                                                <input type=hidden name=type value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value);?>
>
                                                <input type=hidden name=h_id value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['h_id']->value);?>
>
                                                <input type=hidden name=compound value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['compound']->value);?>
>
                                                <INPUT type=hidden name=amount value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['famount']->value);?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['fields']->value) {?>

                                                <div class="d-flex align-items-center title p-3 pr-4 pl-4 bb3-3"> <i class="icon icon-chart"></i>
                                                    <h6 class="m-0 ml-3">   <b>PLEASE KINDLY COPY THE WALLET ADDRESS BELOW AND MAKE PAYMENT </b> </h6>
                                                   
                             </div>
                                                
                                                <div class="d-flex flex-column p-4">
                                         
                                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total']);
?>



                                                    <div class="d-flex align-items-stretch pt-2 pb-2 TFA">
                                                        <p class="m-0 d-flex align-items-center" style="min-width:100px;"> <i class="far fa-user-circle pr-2" style="color:#F8AC4A;"></i>
                                                            <span style="font-size:12px;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['name']);?>
</span>
                                                        </p>
                                                        <input type="text" name="fields[<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['id']);?>
]" value="" style="font-size:14px;">
                                                    </div>

                                                    <?php endfor; endif; ?>
                                                </div>
                                                <?php }?>






                                                <div class="d-flex justify-content-between">

                                                   
                                                    <a nohref onclick="document.getElementById('spendform').submit();" class="d-flex align-items-center deposit-small-btn"> <span class="d-flex all-center">Process</span>
                                                        <i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
                                                    </a>
                                                    
                                                    <a href="?a=deposit" class="d-flex align-items-center back-small-btn"> <i class="fas fa-long-arrow-alt-left d-flex all-center"></i>
                                                        <span class="d-flex all-center">Cancel</span>
                                                    </a>
                                                </div>
                                            </form>

                                        </div>
                                       

                                        <?php } else { ?>




                                        <div class="d-flex all-center flex-column p-0 status-error">
                                            <div class="d-flex all-center flex-column p-3 pt-4 pb-4 flex-fill mb-2" style="background:#fde7e9;width:100%;">
                                                <i class="fas fa-times-circle mb-3 mt-2"></i>
                                                <h6 class="m-0">
                                                    <?php if ($_smarty_tpl->tpl_vars['max_deposit_less']->value == 1) {?>
                                                    Sorry, the maximal deposit is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['max_deposit_format']->value);?>
.
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['wrong_paln']->value == 1) {?>
                                                    The Plan does not exist.
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['not_enough_funds']->value == 1) {?>
                                                    You have not enough funds to complete the operation.
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['less_for_bankwire']->value == 1) {?>
                                                    The minimal spend amount for Bank Wire is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_amount']->value);?>
.
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['less_than_min']->value == 1) {?>
                                                    The minimal spend amount for '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan_name']->value);?>
' is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_amount']->value);?>
.
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['zero_amount']->value) {?>
                                                    You should enter amount grater than zero.
                                                    <?php }?>
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

                                        <?php }?>
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