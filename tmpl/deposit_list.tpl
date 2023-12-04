{include file="logomain.tpl"}


{literal}
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
{/literal}
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




                                    {foreach from=$plans item=p}
                                    {foreach from=$p.deposits item=d}
                                    <div class="col-lg-12 table-list p-0 d-flex align-items-center">



                                        <div class="detailBox d-flex align-items-center pt-2 pb-2 row m-0">

                                            <div id="paymentdetail{$d.ec}" class="col-sm-1 col-2 svg d-flex align-items-center">
                                                <img src="styles/img/pm/{$d.ec}c.svg" width="26" height="26" style="margin-left: 30px;margin-right: 30px;">
                                            </div>

                                            {foreach from=$p.plans item=o}
                                            <div class="col-md-4 col-sm-5 col-lg-3 col-4 ideax d-flex align-items-center pl-1 pr-1 pl-md-3 pr-md-3 ammcount">
                                                <span class="amount pr-1" style="color:#32345D">{$o.name}</span>
                                            </div>

                                            <div class="col-lg-3 col-md-4 col-6 ideax d-flex flex-column pl-3 pr-3 rcheckerid">
                                                <b class="rag04">{$currency_sign}{$d.deposit} <small>USD</small></b> 
                                            </div>


                                            <div class="col-lg-3 col-md-4 col-4 ideax d-flex flex-column pl-2 pr-1 pl-md-3 pr-md-3 PhonenoDisplay">
                                                <b style="font-size:12px;">{$d.date}</b>
                                                <b style="font-size:12px;">{if $p.q_days == 0}Working {$d.duration} days{else}Expire in {$d.expire_in} days{/if}</b>
                                            </div>

                                            {if $p.use_compound}
                                            <div class="col-lg-2 col-md-3 col-12 mt-md-0 mt-2 ideax d-flex align-items-center pl-3 abutton justify-content-end">

                                                <a href="{" ?a=change_compound&deposit=`$d.id`"|encurl}" class="d-flex align-items-center" style="font-size:11px;background:#FFC059;color:#FFF;padding:6px 12px;border-radius:5px;font-weight:400;">
                                                    Compounding
                                                    <i class="fas fa-long-arrow-alt-right d-flex all-center ml-2"></i>
                                                </a>

                                            </div>
                                            {/if}

                                            {if $p.withdraw_principal}
                                            <div class="col-lg-2 col-md-3 col-12 mt-md-0 mt-2 ideax d-flex align-items-center pl-3 abutton justify-content-end">
                                                {if $d.can_withdraw}
                                                <a href="{" ?a=withdraw_principal&deposit=`$d.id`"|encurl}" class="d-flex align-items-center" style="font-size:11px;background:#FFC059;color:#FFF;padding:6px 12px;border-radius:5px;font-weight:400;">
                                                    Release Plan
                                                    <i class="fas fa-long-arrow-alt-right d-flex all-center ml-2"></i>
                                                </a>
                                                {else}
                                                {if $d.pending_duration > 0}
                                                <a nohref="" class="d-flex align-items-center" style="font-size:11px;background:#EAECF0;color:#CBCCD2;padding:6px 12px;border-radius:5px;font-weight:400;">
                                                    Release {$d.pending_duration} day{if $d.pending_duration > 1}s{/if} left
                                                    <i class="fas fa-long-arrow-alt-right d-flex all-center ml-2"></i>
                                                </a>
                                                {else}
                                                <a nohref="" class="d-flex align-items-center" style="font-size:11px;background:#EAECF0;color:#CBCCD2;padding:6px 12px;border-radius:5px;font-weight:400;">
                                                    Not Release Plan
                                                    <i class="fas fa-long-arrow-alt-right d-flex all-center ml-2"></i>
                                                </a>
                                                {/if}
                                                {/if}

                                            </div>
                                            {/if}
                                            {/foreach}

                                        </div>



                                    </div>
                                    {/foreach}
                                    {/foreach}



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

{literal}
<script src="styles/js/jquery-3.4.1.min.js"></script>
<script src="styles/js/bootstrap.bundle.min.js"></script>
<script src="styles/js/owl.carousel.min.js"></script>
<script src="styles/js/tilt.jquery.min.js"></script>
<script src="styles/js/clipboard.min.js"></script>
<script src="styles/js/backgrounds.js"></script>

<script>
    $(document).ready(function() {
        var sTextContents = document.getElementsByClassName('rcheckerid')[0].textContent;

        if (sTextContents != "") {
            $("#nofoundmob").addClass("hidenotfound");
        }


    });

</script>
<script>

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
