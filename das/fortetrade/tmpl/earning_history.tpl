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

</style>
{/literal}

<main>
    <section id="dashboard" class="btc-background">
        <div class="container full-height ">
            <div class="row mt-xl-5">
                <div class="col-xl-12">
                    <div class="wbox">
                        <div class="row m-0">
                            <div class="col-12 p-0 depboxHome d-flex flex-column">
                                <div class="d-flex align-items-center title p-3 pr-md-4 pl-md-4"> <i class="icon icon-seo"></i>
                                    <h6 class="m-0 ml-3">History</h6>
                                </div>




                                {literal}
                                <script language=javascript>
                                    function go(p) {
                                        document.opts.page.value = p;
                                        document.opts.submit();
                                    }

                                </script>
                                {/literal}




                                <form method=post name=opts class="d-flex flex-fill">
                                    <input type=hidden name=a value=earnings>
                                    <input type=hidden name=page value={$current_page}>
                                    <div class="d-flex align-items-center title flex-fill p-3 p-md-4 flex-wrap">


                                        <div class="select-box d-flex align-items-center m-1 p-1 m-md-2 p-md-2 full-small">
                                            <p>Sort by</p>
                                            <div class="select-date d-flex">
                                                <select name=type class=inpts onchange="document.opts.submit();">
                                                    <option value="">All transactions</option>
                                                    {section name=opt loop=$options}
                                                    <option value="{$options[opt].type}" {if $options[opt].selected}selected{/if}>{$options[opt].type_name} </option> {/section} </select>
                                            </div>
                                        </div>


                                        <div class="select-box d-flex align-items-center m-1 p-1 m-md-2 p-md-2">
                                            <p>From</p>
                                            <div class="select-date d-flex">
                                                <select name=month_from onchange="document.opts.submit();" class="flex-fill">
                                                    {section name=month_from loop=$month}
                                                    <option value={$smarty.section.month_from.index+1} {if $smarty.section.month_from.index+1==$frm.month_from}selected{/if}>{$month[month_from]} {/section} </select> <select name=day_from onchange="document.opts.submit();" class="flex-fill border-left-right">
                                                        {section name=day_from loop=$day}
                                                    <option value={$smarty.section.day_from.index+1} {if $smarty.section.day_from.index+1==$frm.day_from}selected{/if}>{$day[day_from]} {/section} </select> <select name=year_from onchange="document.opts.submit();" class="flex-fill">
                                                        {section name=year_from loop=$year}
                                                    <option value={$year[year_from]} {if $year[year_from]==$frm.year_from}selected{/if}>{$year[year_from]} {/section} </select> </div> </div> <div class="select-box d-flex align-items-center m-1 p-1 m-md-2 p-md-2">
                                                        <p>To</p>
                                                        <div class="select-date d-flex">
                                                            <select name=month_to onchange="document.opts.submit();" class="flex-fill">
                                                                {section name=month_to loop=$month}
                                                                <option value={$smarty.section.month_to.index+1} {if $smarty.section.month_to.index+1==$frm.month_to}selected{/if}>{$month[month_to]} {/section} </select> <select name=day_to onchange="document.opts.submit();" class="flex-fill border-left-right">
                                                                    {section name=day_to loop=$day}
                                                                <option value={$smarty.section.day_to.index+1} {if $smarty.section.day_to.index+1==$frm.day_to}selected{/if}>{$day[day_to]} {/section} </select> <select name=year_to onchange="document.opts.submit();" class="flex-fill">
                                                                    {section name=year_to loop=$year}
                                                                <option value={$year[year_to]} {if $year[year_to]==$frm.year_to}selected{/if}>{$year[year_to]} {/section} </select> </div> </div> </div> </form> <div class="row m-0 p-3">


                                                                    <div class="col-lg-12 table-list p-0 d-flex align-items-center">
                                                                        <div class="detailBox d-flex align-items-center pt-2 pb-2 row m-0" style="background:#F4F5F8;">
                                                                            <div class="col-4 col-md-2"><span class="small-header">Type</span></div>
                                                                            <div class="col-3"><span class="small-header">Amount</span></div>
                                                                            <div class="col-5 PhonenoDisplay"><span class="small-header">Description</span></div>
                                                                            <div class="col-4 col-md-2 PhonenoDisplay"><span class="small-header">Date</span></div>
                                                                        </div>
                                                                    </div>






                                                                    {if $qtrans > 0}
                                                                    {section name=trans loop=$trans}
                                                                    <div class="col-lg-12 table-list pt-2 pb-2 pl-0 pr-0 row m-0">

                                                                        <div class="col-4 col-md-2 svg d-flex flex-column ideax">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="fas fa-plus-circle d-flex all-center ico charmylekyo"></i>
                                                                                <p class="type m-0 p-2 charmyleky">{$trans[trans].transtype}</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-8 col-md-3 ideax d-flex ammcount flex-column">
                                                                            <div class="d-flex align-items-center">
                                                                                <span class="amount pr-1 pt-2 pb-2">{$currency_sign} {$trans[trans].actual_amount} </span><small>USD</small>
                                                                            </div>
                                                                        </div>




                                                                        <div class="col-8 col-md-4 PhonenoDisplay d-flex flex-column ideax">
                                                                            <p class="m-0 pt-2 pb-2">
                                                                                {$trans[trans].description}
                                                                            </p>

                                                                        </div>



                                                                        <div class="col-4 col-md-3 ideax d-flex flex-column">
                                                                            <p class="m-0 pt-2 pb-2">{$trans[trans].d}</p>
                                                                        </div>


                                                                    </div>
                                                                    {/section}


                                                                    {if $colpages > 1}
                                                                    <div class="page-s pt-4 d-flex">
                                                                        {if $prev_page > 0}
                                                                        <a href="javascript:go('{$prev_page}')"><i class="fas fa-angle-left"></i></a>
                                                                        {/if}
                                                                        {section name=p loop=$pages}
                                                                        {if $pages[p].current == 1}
                                                                        <a nohref="" class="current">{$pages[p].page}</a>
                                                                        {else}
                                                                        <a href="javascript:go('{$pages[p].page}')">{$pages[p].page}</a>
                                                                        {/if}
                                                                        {/section}
                                                                        {if $next_page > 0}
                                                                        <a href="javascript:go('{$next_page}')"><i class="fas fa-angle-right"></i></a>
                                                                        {/if}
                                                                    </div>
                                                                    {/if}


                                                        </div>










                                            </div>










                                        </div>
                                    </div>




                                    {else}

                                    <div class="col-lg-12 table-list p-4 d-flex all-center">
                                        <img src="styles/img/Not-Found-mob.svg" style="max-width:128px;">
                                    </div>

                                    {/if}
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
{literal}
<script language=javascript>
    function go(p) {
        document.opts.page.value = p;
        document.opts.submit();
    }

</script>



{/literal}
