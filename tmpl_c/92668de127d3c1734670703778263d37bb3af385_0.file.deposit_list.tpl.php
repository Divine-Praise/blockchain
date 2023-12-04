<?php /* Smarty version 3.1.27, created on 2023-10-10 03:01:22
         compiled from "/home/assetpin/public_html/tmpl/deposit_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8228293396524be82733454_20625131%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92668de127d3c1734670703778263d37bb3af385' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/deposit_list.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8228293396524be82733454_20625131',
  'variables' => 
  array (
    'plans' => 0,
    'p' => 0,
    'd' => 0,
    'o' => 0,
    'currency_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6524be8276b4f4_95692526',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6524be8276b4f4_95692526')) {
function content_6524be8276b4f4_95692526 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '8228293396524be82733454_20625131';
echo $_smarty_tpl->getSubTemplate ("logomain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>




<style>
    #dashboard .tab-content>.active {
        display: flex !important;
    }

    #dashboard .table-list {
        border-bottom: 1px solid #F3F4F8;
    }



    #dashboard .table-list .svg {}

    #dashboard .table-list .svg svg {
        border-radius: 50%;
        border: 1px solid #EAECEF;
        padding: 2px;
    }

    #dashboard .table-list .svg .ico {
        border-radius: 50%;
        box-shadow: 0 0 0 2px #fff, 0 0 0 3px #DEDFE4;
        font-size: 1rem;
        width: 1rem;
        height: 1rem;
    }

    #dashboard .table-list .svg .ico.fa-plus-circle {
        color: #FFC059;
        border: 1px solid #FFC059;
    }

    #dashboard .table-list .svg .ico.fa-check-circle {
        color: #FFC059;
        border: 1px solid #FFC059;
    }

    #dashboard .table-list .svg .ico.fa-arrow-alt-circle-up {
        color: #FFC059;
        border: 1px solid #FFC059;
    }

    #dashboard .table-list .svg .ico.fa-arrow-alt-circle-down {
        color: #FFC059;
        border: 1px solid #FFC059;
    }

    #dashboard .table-list .svg .ico.fa-user-circle {
        color: #FFC059;
        border: 1px solid #E8EAEF;
    }

    #dashboard .table-list .svg .ico.fa-pause-circle {
        color: #F4A722;
        border: 1px solid #F4A722;
    }

    #dashboard .table-list .svg .ico.fa-dot-circle {
        color: #FFC059;
        border: 1px solid #FFC059;
    }

    #dashboard .table-list .svg {
        background: initial !important;
        padding: initial !important;
    }

    .hidenotfound {
        display: none !important;

    }

</style>

<main>

    <section id="dashboard" class="btc-background">
        <div class="container full-height ">



            <div class="row mt-xl-5">
                <div class="col-xl-12" style="padding-bottom: 150px;">
                    <div class="wbox">
                        <div class="row m-0">
                            <div class="col-12 p-0 depboxHome d-flex flex-column">
                                <div class="d-flex align-items-center title p-3 pr-4 pl-4"> <i class="icon icon-todo "></i>
                                    <h6 class="m-0 ml-3">Active Deposits</h6>
                                </div>
                                <div class="d-flex align-items-center title p-3 pr-4 pl-4">
                                    <div class="status-box errors p-3" style="background:#FFEBCB;">
                                        <p><i class="fas fa-bell"></i> The main deposit is eligible for withdrawal at the end of the first 24 hours, 5% fee will be applied. <b>Speculating on representatives affiliate commission is strictly prohibited!</b></b> </p>
                                    </div>
                                </div>








                                <div class="row m-0 p-3">
                                    <div class="col-lg-12 table-list p-0 d-flex align-items-center PhonenoDisplay">
                                        <div class="detailBox d-flex align-items-center pt-3 pb-3 row m-0" style="background:#F4F5F8;">
                                            <div class="col-1 d-flex align-items-center"></div>
                                            <div class="col-3 d-flex align-items-center"><span class="small-header" style="line-height:1;">Investment Plan</span></div>
                                            <div class="col-3 d-flex align-items-center PhonenoDisplay"><span class="small-header" style="line-height:1;">Deposit Amount</span></div>
                                            <div class="col-3 d-flex align-items-center PhonenoDisplay"><span class="small-header" style="line-height:1;">Start Date</span></div>
                                            <div class="col-2 d-flex align-items-center PhonenoDisplay"></div>
                                        </div>
                                    </div>




                                    <?php
$_from = $_smarty_tpl->tpl_vars['plans']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['deposits'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?>
                                    <div class="col-lg-12 table-list p-0 d-flex align-items-center">



                                        <div class="detailBox d-flex align-items-center pt-2 pb-2 row m-0">

                                            <div id="paymentdetail<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['ec']);?>
" class="col-sm-1 col-2 svg d-flex align-items-center">
                                                <img src="styles/img/pm/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['ec']);?>
c.svg" width="26" height="26" style="margin-left: 30px;margin-right: 30px;">
                                            </div>

                                            <?php
$_from = $_smarty_tpl->tpl_vars['p']->value['plans'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
                                            <div class="col-md-4 col-sm-5 col-lg-3 col-4 ideax d-flex align-items-center pl-1 pr-1 pl-md-3 pr-md-3 ammcount">
                                                <span class="amount pr-1" style="color:#32345D"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['o']->value['name']);?>
</span>
                                            </div>

                                            <div class="col-lg-3 col-md-4 col-6 ideax d-flex flex-column pl-3 pr-3 rcheckerid">
                                                <b class="rag04"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['deposit']);?>
 <small>USD</small></b> 
                                            </div>


                                            <div class="col-lg-3 col-md-4 col-4 ideax d-flex flex-column pl-2 pr-1 pl-md-3 pr-md-3 PhonenoDisplay">
                                                <b style="font-size:12px;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['date']);?>
</b>
                                                <b style="font-size:12px;"><?php if ($_smarty_tpl->tpl_vars['p']->value['q_days'] == 0) {?>Working <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['duration']);?>
 days<?php } else { ?>Expire in <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['expire_in']);?>
 days<?php }?></b>
                                            </div>

                                            <?php if ($_smarty_tpl->tpl_vars['p']->value['use_compound']) {?>
                                            <div class="col-lg-2 col-md-3 col-12 mt-md-0 mt-2 ideax d-flex align-items-center pl-3 abutton justify-content-end">

                                                <a href="<?php echo smarty_modifier_myescape(encurl(" ?a=change_compound&deposit=".((string)$_smarty_tpl->tpl_vars['d']->value['id'])));?>
" class="d-flex align-items-center" style="font-size:11px;background:#FFC059;color:#FFF;padding:6px 12px;border-radius:5px;font-weight:400;">
                                                    Compounding
                                                    <i class="fas fa-long-arrow-alt-right d-flex all-center ml-2"></i>
                                                </a>

                                            </div>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->tpl_vars['p']->value['withdraw_principal']) {?>
                                            <div class="col-lg-2 col-md-3 col-12 mt-md-0 mt-2 ideax d-flex align-items-center pl-3 abutton justify-content-end">
                                                <?php if ($_smarty_tpl->tpl_vars['d']->value['can_withdraw']) {?>
                                                <a href="<?php echo smarty_modifier_myescape(encurl(" ?a=withdraw_principal&deposit=".((string)$_smarty_tpl->tpl_vars['d']->value['id'])));?>
" class="d-flex align-items-center" style="font-size:11px;background:#FFC059;color:#FFF;padding:6px 12px;border-radius:5px;font-weight:400;">
                                                    Release Plan
                                                    <i class="fas fa-long-arrow-alt-right d-flex all-center ml-2"></i>
                                                </a>
                                                <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['d']->value['pending_duration'] > 0) {?>
                                                <a nohref="" class="d-flex align-items-center" style="font-size:11px;background:#EAECF0;color:#CBCCD2;padding:6px 12px;border-radius:5px;font-weight:400;">
                                                    Release <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['d']->value['pending_duration']);?>
 day<?php if ($_smarty_tpl->tpl_vars['d']->value['pending_duration'] > 1) {?>s<?php }?> left
                                                    <i class="fas fa-long-arrow-alt-right d-flex all-center ml-2"></i>
                                                </a>
                                                <?php } else { ?>
                                                <a nohref="" class="d-flex align-items-center" style="font-size:11px;background:#EAECF0;color:#CBCCD2;padding:6px 12px;border-radius:5px;font-weight:400;">
                                                    Not Release Plan
                                                    <i class="fas fa-long-arrow-alt-right d-flex all-center ml-2"></i>
                                                </a>
                                                <?php }?>
                                                <?php }?>

                                            </div>
                                            <?php }?>
                                            <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>

                                        </div>



                                    </div>
                                    <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>
                                    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>



                                </div>

                                <div id="nofoundmob" class="row m-0">
                                    <div class="col-lg-12 table-list p-4 d-flex all-center"> <img src="styles/img/Not-Found-mob.svg" style="max-width:128px;"> </div>
                                </div>




                            </div>
                        </div>
                    </div>



                </div>
            </div>
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
 src="styles/js/backgrounds.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        var sTextContents = document.getElementsByClassName('rcheckerid')[0].textContent;

        if (sTextContents != "") {
            $("#nofoundmob").addClass("hidenotfound");
        }


    });

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

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





</body>

</html>
<?php }
}
?>