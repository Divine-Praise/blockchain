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
        border: 1px solid #E8EAEF;
    }

    #dashboard .table-list .svg .ico.fa-check-circle {
        color: #FFC059;
        border: 1px solid #FFC059;
    }

    #dashboard .table-list .svg .ico.fa-arrow-alt-circle-up {
        color: #EE3E2E;
        border: 1px solid #EE3E2E;
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
        color: #56BE89;
        border: 1px solid #E8EAEF;
    }

    #dashboard .table-list .svg {
        background: initial !important;
        padding-top: 0px !important;
        padding-left: 20px;
        padding-right: 20px;
    }

</style>
{/literal}
<main>

    <section id="dashboard" class="btc-background">
        <div class="container full-height ">

            <div class="row mt-xl-5">


                <div class="col-lg-5 col-xl-4 d-flex flex-column align-items-stretch member-info">
                    <div class="ybox d-flex flex-column" style="flex:1;">
                        <h6 class="d-flex align-items-center username p-3 pr-4 pl-4">
                            <i class="icon icon-marketing mr-2"></i>
                            <span style="flex:1;">Commission</span>
                        </h6>

                        <div class="d-flex flex-column align-items-stretch justify-content-center flex-fill">
                            <div class="m-3 mr-4 ml-4 accBalance d-flex align-items-center p-2 pt-3 pb-3">
                                {literal}
                                <div class="svg d-flex all-center p-2">
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
                                </div>
                                {/literal}
                                <div class="d-flex flex-column">
                                    <p class="m-0 p-0 pBalance">Total referral commission</p>
                                    <h4 class="m-0 p-0 mBalance">{$currency_sign}{$commissions} <small> USD</small></h4>
                                </div>
                            </div>

                            <div class="row m-0 mr-4 ml-4 mb-4 earningSmall">

                                <div class="col-6 p-0">
                                    <span>Total Downline</span>
                                    <p>{$total_ref} <span> Accounts</span></p>
                                </div>
                                <div class="col-6 p-0">
                                    <span>Active Referrals</span>
                                    <p>{$active_ref} <span> Accounts</span></p>
                                </div>

                                <div class="col-12 mt-4 p-0">
                                    <div class="d-flex align-items-center withdraw-btn" style="border-radius:5px;">
                                        <input class="d-flex all-center" style="flex:1;background:none;border:0;outline:0;text-align:center;color:#fff;font-size:12px;" readonly="readonly" value="{$settings.site_url}/?ref={$userinfo.username}" id="reflink">
                                        <button class="icon icon-todo d-flex all-center btn" data-clipboard-action="copy" data-clipboard-target="#reflink" style="background:#fff;margin:0;border:0;outline:0;width:36px;height:36px;font-size:14px;"></button>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="pt-3 pr-4 pl-4 pb-3  d-flex flex-column dataAccount mt-auto">
                            <div class="d-flex align-items-center p-0 pb-1">
                                <i class="icon icon-rr-1-1"></i>
                                <span>Your upline :</span>
                                {if $upline.email != ""}
                                <p>{$upline.name}</p>
                                {else}
                                <p>None</p>
                                {/if}

                            </div>
                        </div>


                       
                    </div>

                </div>

                <div class="col-lg-7 col-xl-8 pt-4 pt-lg-0 depboxHome d-flex">
                    <div class="wbox flex-fill d-flex flex-column">
                        <div class="d-flex align-items-center title p-3 pr-4 pl-4">
                            <i class="icon icon-seo"></i>
                            <h6 class="m-0 ml-3">Your referrals</h6>
                        </div>
                        
					 
					   
					  <div class="row m-0 p-3" id="nothing-found">
					  <div class="col-lg-12 p-4 d-flex all-center">
                      <img src="styles/img/Not-Found-mob.svg" style="max-width:128px;">
                      </div>
					  </div>


                        {if $settings.show_referals}
                        {if $show_referals}

                        <div class="row m-0 p-3">



                            <div class="col-lg-12 table-list p-0 d-flex align-items-center">
                                <div class="detailBox d-flex align-items-center pt-2 pb-2 row m-0" style="background:#F4F5F8;">
                                    <div class="col-sm-1 col-2"></div>
                                    <div class="col-6 col-md-3"><span class="small-header">User</span></div>
                                    <div class="col-md-3 col-4"><span class="small-header">E-mail</span></div>
                                    <div class="col-3 PhonenoDisplay"><span class="small-header">Status</span></div>
                                </div>
                            </div>

                          
                            {literal}

                            <style>
                                #nothing-found {
                                    display: none !important;
                                }

                            </style>
                            {/literal}

                            {section name=s loop=$referals}
                            <div class="col-lg-12 table-list p-0 d-flex align-items-center">
                                <div class="detailBox d-flex pt-2 pb-2 row m-0">

                                    <div class="col-sm-1 col-2 svg d-flex align-items-center">
                                        <i class="fas fa-user-circle d-flex all-center ico"></i>
                                    </div>

                                    <div class="col-6 col-md-3 ideax d-flex flex-column ammcount">
                                        <b id="existuser">{$referals[s].username}</b>

                                    </div>

                                    <div class="col-md-3 col-4 ideax d-flex flex-column ">

                                        <div class="d-flex all-center mr-2">
                                        </div>
                                        <p><a href="mailto:{$referals[s].email}" style="font-weight:400;color:#7E828F;">{$referals[s].email}</a></p>
                                    </div>

                                    <div class="col-lg-5 col-md-4 col-12 mt-2 mt-md-0 ideax d-flex flex-column ">
                                        <p>{if $referals[s].q_deposits > 0}Deposited{else}No deposit yet{/if}</p>
                                    </div>

                                </div>
                            </div>
                            {/section}


                        </div>

   


                        {/if}
                        {/if}
                         






                        {if $settings.show_refstat}
                        <div class="d-flex align-items-center title p-3 pr-4 pl-4">
                            <i class="icon icon-seo"></i>
                            <h6 class="m-0 ml-3">Referral ins/signups</h6>
                        </div>


                        <div class="row m-0 p-3">










                            <form method=post name=opts class="d-flex flex-fill">
                                <input type=hidden name=a value=referals>
                                <div class="d-flex align-items-center title flex-fill p-3 p-md-4 flex-wrap">




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
                                                            <option value={$year[year_to]} {if $year[year_to]==$frm.year_to}selected{/if}>{$year[year_to]} {/section} </select> </div> </div> </div> </form> <div class="col-lg-12 table-list p-0 d-flex align-items-center">
                                                                <div class="detailBox d-flex align-items-center pt-2 pb-2 row m-0" style="background:#F4F5F8;">
                                                                    <div class="col-sm-1 col-2"></div>
                                                                    <div class="col-6 col-md-3"><span class="small-header">Date</span></div>
                                                                    <div class="col-md-3 col-4"><span class="small-header">Ins</span></div>
                                                                    <div class="col-3 PhonenoDisplay"><span class="small-header">Signups</span></div>
                                                                </div>
                                                    </div>



                                                    {if $show_refstat}
                                                    {section name=s loop=$refstat}
                                                    <div class="col-lg-12 table-list p-0 d-flex align-items-center">
                                                        <div class="detailBox d-flex pt-2 pb-2 row m-0">

                                                            <div class="col-sm-1 col-2 svg d-flex align-items-center">
                                                                <i class="fas fa-check-circle d-flex all-center ico"></i>
                                                            </div>

                                                            <div class="col-6 col-md-3 ideax d-flex flex-column ammcount">
                                                                <b>{$refstat[s].date}</b>

                                                            </div>

                                                            <div class="col-md-3 col-4 ideax d-flex flex-column ">

                                                                <div class="d-flex all-center mr-2">
                                                                </div>
                                                                <p><a href="mailto:{$referals[s].email}" style="font-weight:400;color:#7E828F;">{$refstat[s].income}</a></p>
                                                            </div>

                                                            <div class="col-lg-5 col-md-4 col-12 mt-2 mt-md-0 ideax d-flex flex-column ">
                                                                <p>{$refstat[s].reg}</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    {/section}
                                                    {else}
                                                    <div class="col-lg-12 table-list p-4 d-flex all-center">
                                                        <img src="styles/img/Not-Found-mob.svg" style="max-width:128px;">
                                                    </div>
                                                    {/if}
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
 $(document).ready(function(){
   if ($("#existuser").text().length > 0) {
   
	  $('#nothing-found').addClass( 'some_other_class' );
   }                                           
 });
</script>
{/literal}

</body>

</html>



{literal}
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
{/literal}





<!-- Modal -->
<div class="modal fade" id="bannersModal" tabindex="-1" role="dialog" aria-labelledby="bannersModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bannersModalTitle">{$settings.site_name} Banners</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row m-0">
                    <div class="col-12 d-flex flex-column p-0">

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">970x90.gif</label>
                            <label class="fl1"><img src="styles/banners/970x90.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/970x90.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>


                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">728x90.gif</label>
                            <label class="fl1"><img src="styles/banners/728x90.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/728x90.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">468x60.gif</label>
                            <label class="fl1"><img src="styles/banners/468x60.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/468x60.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">320x100.gif</label>
                            <label class="fl1"><img src="styles/banners/320x100.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/320x100.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">320x50.gif</label>
                            <label class="fl1"><img src="styles/banners/320x50.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/320x50.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">234x60.gif</label>
                            <label class="fl1"><img src="styles/banners/234x60.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/234x60.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">250x250.gif</label>
                            <label class="fl1"><img src="styles/banners/250x250.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/250x250.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">200x200.gif</label>
                            <label class="fl1"><img src="styles/banners/200x200.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/200x200.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">125x125.gif</label>
                            <label class="fl1"><img src="styles/banners/125x125.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/125x125.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">336x280.gif</label>
                            <label class="fl1"><img src="styles/banners/336x280.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/336x280.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>


                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">300x250.gif</label>
                            <label class="fl1"><img src="styles/banners/300x250.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/300x250.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">180x150.gif</label>
                            <label class="fl1"><img src="styles/banners/180x150.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/180x150.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>


                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">300x600.gif</label>
                            <label class="fl1"><img src="styles/banners/300x600.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/300x600.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>


                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">160x600.gif</label>
                            <label class="fl1"><img src="styles/banners/160x600.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/160x600.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>

                        <div class="banner-list d-flex flex-column">
                            <label class="fl1">120x600.gif</label>
                            <label class="fl1"><img src="styles/banners/120x600.gif"></label>
                            <label class="fl1"><input readonly value="&#60;a href=&#34;{$settings.site_url}/?ref={$userinfo.username}&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;{$settings.site_url}/styles/banners/120x600.gif&#34; /&#62;&#60;/a&#62;"></label>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{literal}
<script type="text/javascript">
    $(document).ready(function() {

        $("a#inline").fancybox({
            'hideOnContentClick': true
        });

    });

</script>
{/literal}
