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




                                    <div class="d-flex all-center flex-column p-0 status-error">
                                        <div class="d-flex all-center flex-column p-3 pt-4 pb-4 flex-fill mb-2" style="background:#fde7e9;width:100%;">
                                            <i class="fas fa-times-circle mb-3 mt-2"></i>
                                            <h6 class="m-0">


                                                Your Deposit status

                                            </h6>
                                        </div>
                                        <div class="d-flex all-center flex-column p-3">


                                            <p class="mt-2 mb-1">{if $process eq 'yes' || $frm.m_status eq 'success'}
                                                We have received your deposit. Thank you!
                                                {else}
                                                We have not received your deposit. Please try again.
                                                {/if}</p>

                                        </div>


                                        <div class="p-3 d-flex flex-column justify-content-center flex-fill" style="border-bottom:1px solid #F2F3F7;width:100%;">
                                            <div class="d-flex  flex-wrap all-center">
                                                <a onclick="window.top.location.href = '?a=account'" nohref="" class="d-flex align-items-center deposit-small-btn  m-1">
                                                    <span class="d-flex all-center p-0" style="padding-top: 5px!important;padding-bottom: 5px!important;padding-left: 10px!important;padding-right: 10px!important;">Back to account</span>
                                                </a>
                                            </div>
                                        </div>


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
