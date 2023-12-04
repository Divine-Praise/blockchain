<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$settings.site_name}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="styles/img/Asset1@4x-8.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles/css/animate.css">
    {literal}
    <script>
        document.write("<link rel='stylesheet' type='text/css' href='styles/css/main.css?v=" + Date.now() + "'>")

    </script>
    {/literal}
</head>


<body>
    <header class="header fixed-top smalex" id="header-main-menu">
        <nav class="navbar navbar-expand-lg navbar-light main-nav">
            <div class="container-fluid">
                {literal}
                <a href="/" class="navbar-brand">

                                        <img src="styles/img/logo.png" alt="Template Rex" width="130px" >


                </a>
                {/literal}
                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#MainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="MainNav">
                    <ul class="navbar-nav mr-auto mt-sms-3">
                        <li class="nav-item">
                            <a class="nav-link text-center" href="/">Homepage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=invest">Invest With Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=affiliate">Earn Passively</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=faq">Questions Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=support">Contact Us</a>
                        </li>
                    </ul>

                    {if $userinfo.logged != 1}
                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex">
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=login" class="login nav-btn">Access Your Account</a>
                        </li>
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=signup" class="register nav-btn">Register</a>
                        </li>
                    </ul>
                    {else}
                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex">
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=account" class="register nav-btn">Dashboard</a>
                        </li>
                    </ul>
                    {/if}


                </div>
            </div>
        </nav>

    </header>
    <main>



        <section id="about-tabs" style="
	background: -webkit-linear-gradient(180deg, #FFF8ED 0%, #FFFfff 100%);
    background: linear-gradient(180deg, #FFF8ED 0%, #FFFfff 100%);
">

            <div class="container">

                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center d-flex flex-column pb-5 pt-0 pt-md-3 pt-lg-5">
                        <h1 style="font-size:2.5rem;line-height:1;padding-top:1rem;"><b>Questions Guide</b></h1>
                    </div>
                </div>

                <div class="row all-center">

                    <div class="col-md-10 step-to-step">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                    <i class="icon icon-community"></i>
                                    <span>General<span>
                                        </span></span></a>
                                <a class="nav-item nav-link" id="nav-deposit-tab" data-toggle="tab" href="#nav-deposit" role="tab" aria-controls="nav-deposit" aria-selected="false">
                                    <i class="icon icon-sentiment"></i>
                                    <span>Deposit<span>
                                        </span></span></a>
                                <a class="nav-item nav-link" id="nav-withdraw-tab" data-toggle="tab" href="#nav-withdraw" role="tab" aria-controls="nav-withdraw" aria-selected="false">
                                    <i class="icon icon-organize"></i>
                                    <span>Withdraw<span>
                                        </span></span></a>
                                <a class="nav-item nav-link" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="false">
                                    <i class="icon icon-reviews"></i>
                                    <span>Account<span>
                                        </span></span></a>
                                <a class="nav-item nav-link" id="nav-affiliate-tab" data-toggle="tab" href="#nav-affiliate" role="tab" aria-controls="nav-affiliate" aria-selected="false">
                                    <i class="icon icon-marketing"></i>
                                    <span>Affiliate<span>
                                        </span></span></a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">



                                <div class="row align-items-center">

                                    <div class="col-12">


                                        <div class="accordion" id="accordionExample">


                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            What is {$settings.site_name}?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">

                                                        <a target="blank" href="https://beta.companieshouse.gov.uk">{$settings.site_name} </a> is a registered digital asset investment firm based in Malta. Our operations, which includes advanced basic and technical analysis at the source of stable return performance, offers high & fixed interest return. Aiming for success with its international investor network, experienced team, privileged information from business and technology world; {$settings.site_name} stands out from its competitors with its proven quality and ease of use. The company, which is managed under the leadership of people who think and foresee the future, is committed to achieving stable returns from well-diversified portfolios and prioritizing clients.

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Guaranteed interest returns, but how?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">

                                                        Digital assets are a class of assets considered dangerous and inconvenient. Many reasons such as liquidity, money laundering accusation, uncertainty of regulation, access restriction, volatile markets, functionality inquiries reduce trust in these assets. We believe that the risk factor should be eliminated for all people who believe that finance will rise on distributed systems. That's why we offer high interest returns to platform investors. With careful and detailed examination of market conditions, daily trading volume, expectations; we change our portfolio distribution and adjust our investment strategy. With this active fund management, you enjoy the fixed interest rate return on the user side.

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            What are company principles?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">

                                                        Successful investment management companies base their business on a core investment philosophy, and {$settings.site_name} is no different. Although we offer innovative and specific strategies through digital asset funds, an overarching theme runs through the investment guidance we provide to clients— focus on those things within your control. There are basically four principles that we attach great importance to:
                                                        <br>
                                                        <br> <b>1) Create clear, appropriate investment goals:</b> An appropriate investment goal should be measureable and attainable. Success should not depend on outsize investment returns or impractical saving or spending requirements.
                                                        <br> <br> <b>2) Develop a suitable asset allocation using broadly diversified funds: </b>A sound investment strategy starts with an asset allocation befitting the portfolio's objective. The allocation should be built upon reasonable expectations for risk and returns and use diversified investments to avoid exposure to unnecessary risks.
                                                        <br> <br> <b>3) Minimize cost: </b>Markets are unpredictable. Costs are forever. The lower your costs, the greater your share of an investment's return. And research suggests that lower-cost investments have tended to outperform higher-cost alternatives. To hold onto even more of your return, manage for efficiency. You can't control the markets, but you can control the bite of costs and efficiency.
                                                        <br> <br> <b>4) Maintain perspective and long-term discipline: </b>Investing can provoke strong emotions. In the face of market turmoil, some investors may find themselves making impulsive decisions or, conversely, becoming paralyzed, unable to implement an investment strategy or rebalance a portfolio as needed. Discipline and perspective can help them remain committed to a long-term investment program through periods of market uncertainty.


                                                    </div>
                                                </div>
                                            </div>



                                            


                                            <div class="card">
                                                <div class="card-header" id="headingThirteen">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                            What are the interest rates?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                                                    <div class="card-body">

                                                        {$settings.site_name} offers a stable return on interest compared to its competitors. Investors receive an interest rate of 2% per day from their deposits on our Starter plan and 3% per day on our Investor plan.

                                                    </div>
                                                </div>
                                            </div>






                                           
                                            <div class="card">
                                                <div class="card-header" id="headingSix">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                            What are digital assets and how are they valued?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                    <div class="card-body">

                                                        Digital assets distributed ledger based electronic means of exchanges. Transactions involving them are secured by cryptography, and they have dedicated servers for verification of transactions and the creation of extra units. The most popular of them are Bitcoin, Ethereum, Litecoin, etc. All digital assets are valued by price action, and as a result, almost total control is in the hand of the investing public.


                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header" id="headingSeven">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                            Are digital assets legal? Am I allowed to trade them?

                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                    <div class="card-body">


                                                        No country has passed a law that illegitimates digital assets, however, because cryptocurrency networks are decentralized, some countries limit its use. All this means however is: it is hard to transact in cryptocurrencies in those countries, it is not illegal.
                                                        Of recent, the use of digital assets is growing so much that its heft is no longer deniable. As a result, many of the regulations that restrict its use around the world are being relaxed.

                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-header" id="headingEight">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                            Where can I get the latest digital asset prices?

                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                                    <div class="card-body">

                                                        There are many platforms where you find the latest prices. The most popular among them is <a target="blank" href="https://coinmarketcap.com/">CoinMarketCap</a>, though there are many others such as CryptoCompare, CoinGecko etc.
                                                        {$settings.site_name} offers a complete suite of digital asset research tools for individual investors and financial advisors wanting to research and be conversant on potential investment opportunities. Sign up and view the investment opportunities.


                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header" id="headingNine">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                            How can I ask for support?

                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                                    <div class="card-body">

                                                        We are here to help you with any problems and questions you may encounter while using the platform and during your investment experience. You can always contact us at contact@fortetradelimited.com or via live chat

                                                    </div>
                                                </div>
                                            </div>




                                        </div>


                                    </div>

                                </div>





                            </div>







                            <div class="tab-pane fade" id="nav-deposit" role="tabpanel" aria-labelledby="nav-deposit-tab">

                                <div class="row align-items-center">

                                    <div class="col-12">

                                        <div class="accordion" id="accordion2">

                                            <div class="card">
                                                <div class="card-header" id="headingTen">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                            How do I invest?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion2">
                                                    <div class="card-body">

                                                        Taking user experience and security as our priority, we have managed to develop an the investment process which takes place only in 4 stages:
                                                        <br><br>

                                                        1) Sign up.<br>
                                                        2) Determine your investment amount.<br>
                                                        3) Invest in the amount and time you want.<br>
                                                        4) Withdraw your money.

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header" id="headingEleven">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                            What are the available payment methods?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion2">
                                                    <div class="card-body">

                                                        You may choose to invest either by BTC, BCH or ETH. For USD you can use PerfectMoney.<br><br>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header" id="headingTwelve">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                            Is there a minimum / maximum amount limitation for investment?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion2">
                                                    <div class="card-body">

                                                        Our minimum investment is $100 while we have no maximum limit on the Investor plan.
                                                    </div>
                                                </div>
                                            </div>

                                        

                                            <div class="card">
                                                <div class="card-header" id="headingFifteen">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                                            I made a deposit but it is not showing up. Where is it?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion2">
                                                    <div class="card-body">

                                                        Do not worry. There may be delays in the reflection of your funds to your account during the first 24 hours and this is quite normal. If you still have problems at the end of this period, contact support via live chat or email us at <a href="mailto:contact@fortetradelimited.com">contact@fortetradelimited.com</a> </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingSixteen">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                                            Can I have multiple investment at the same time?

                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion2">
                                                    <div class="card-body">
                                                        Of course. You can simultaneously invest multiple times over the platform at different times, in different amounts and duration. But remember that when you want to withdraw, these investments are evaluated separately.

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header" id="headingSeventeen">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                            Can I add funds to a investment that’s already running?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordion2">
                                                    <div class="card-body">
                                                        No. Since the investments are made in different amounts at different times, the return is evaluated separately. Therefore, you cannot add to an existing investment plan but rather make multiple investments.
                                                    </div>
                                                </div>
                                            </div>




                                        </div>

                                    </div>

                                </div>





                            </div>






                            <div class="tab-pane fade" id="nav-withdraw" role="tabpanel" aria-labelledby="nav-withdraw-tab">

                                <div class="row align-items-center">

                                    <div class="col-12">

                                        <div class="accordion" id="accordion2b">

                                            <div class="card">
                                                <div class="card-header" id="headingTwenty">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                            How much time does it take for a withdrawal request to be processed?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion2b">
                                                    <div class="card-body">
                                                        Withdrawal process time is from instant to 24 hours. Please do not contact us if your withdrawal was not processed instantly, it will be paid within 24 hours. The main deposit is eligible for withdrawal at the end of the first 24 hours.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwentyOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                                                            What is the minimum amount for withdrawal?

                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwentyOne" class="collapse" aria-labelledby="headingTwentyOne" data-parent="#accordion2b">
                                                    <div class="card-body">
                                                     Minimum amount for withdrawal is $10
                                                    </div>
                                                </div>
                                            </div>


                                            


                                          






                                        </div>
                                    </div>
                                </div>
                            </div>










                            <div class="tab-pane fade" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
                                <div class="row align-items-center">

                                    <div class="col-12">

                                        <div class="accordion" id="accordion2b3">

                                            <div class="card">
                                                <div class="card-header" id="headingTwenty">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                            Is there a charge to open an account? What kind of process should I follow? </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion2b3">
                                                    <div class="card-body">


                                                        Opening an account is completely free. You can invest immediately after a familiar registration process. </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwentyTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                                                            How do I close my account?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwentyTwo" class="collapse" aria-labelledby="headingTwentyTwo" data-parent="#accordion2b3">
                                                    <div class="card-body">

                                                        You can close your {$settings.site_name} account anytime you wish. You can easily re-open them if you want to in the future.

                                                        To close your account, please contact support: <a href="mailto:contact@fortetradelimited.com">contact@fortetradelimited.com</a>

                                                        We strongly recommend you to withdraw all your funds before closing your account. By doing so, your investments will be secured and you'll be ready to leave.


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwentyThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                                                            Are there fees for closing an account?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwentyThree" class="collapse" aria-labelledby="headingTwentyThree" data-parent="#accordion2b3">
                                                    <div class="card-body">
                                                        There are no fees or penalties for closing/deleting your account.

                                                    </div>
                                                </div>
                                            </div>








                                        </div>
                                    </div>
                                </div>
                            </div>










                            <div class="tab-pane fade" id="nav-affiliate" role="tabpanel" aria-labelledby="nav-affiliate-tab">
                                <div class="row align-items-center">

                                    <div class="col-12">

                                        <div class="accordion" id="acco3ECx">


                                            <div class="card">
                                                <div class="card-header" id="heing2Twenty">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collaps22eTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                            What is {$settings.site_name} referral program?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collaps22eTwenty" class="collapse" aria-labelledby="heing2Twenty" data-parent="#acco3ECx">
                                                    <div class="card-body">
                                                        {$settings.site_name} referral program is an exciting opportunity to for platform users to claim earnings by inviting their audiance & friends. It is one of the many ways we say thank you for your time and effort to help us expand our family.
                                                        You are involved in every link in the growing chain. For this reason, we have introduced a gradual reward system for you to earn commissions.
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-header" id="headingTwentyqwe">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                                            Do I need active investment to earn affiliate commission?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwentyqwe" data-parent="#acco3ECx">
                                                    <div class="card-body">
                                                        No, an active investment is not needed for you to collect affiliate commission.


                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-header" id="headingTwentyOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                                                            How does the program work?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwentyOne" class="collapse" aria-labelledby="headingTwentyOne" data-parent="#acco3ECx">
                                                    <div class="card-body">

                                                        Sharing {$settings.site_name} digital investment platform has never been easier or more rewarding. To share your love of {$settings.site_name}, give your personal referral code to friends and family and encourage them to visit our website. Once they register with your referral code and invest, you will get changing amount of commission from their platform deposit. In order to give the real worth of your contribution, you'll be recieving comissions from each participant invited by the ones you invited in the first place.


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingTwentyNine">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyNine" aria-expanded="false" aria-controls="collapseTwentyNine">
                                                            How much does it offer?

                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwentyNine" class="collapse" aria-labelledby="headingTwentyNine" data-parent="#acco3ECx">
                                                    <div class="card-body">

                                                        You would earn a 10% commission on your active referrals.



                                                    </div>
                                                </div>
                                            </div>


                                            

                                            <div class="card">
                                                <div class="card-header" id="headingTwentyThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                                                            What happens if the individuals I refer never become {$settings.site_name} users?
                                                        </button>
                                                        <i class="fas fa-plus"></i>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwentyThree" class="collapse" aria-labelledby="headingTwentyThree" data-parent="#acco3ECx">
                                                    <div class="card-body">


                                                        If the individuals you refer are not interested in {$settings.site_name}, there isn’t much we can do. In order to receive your reward, the individuals you refer must register and invest to the platform. If you have referred individuals who have not yet become platform users, make sure they know just how much you love your {$settings.site_name} system. It doesn’t hurt to remind them about an exclusive investment opportunity, either.
                                                        We’re eager to give you both your reward, so keep at it!

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


            </div>
        </section>

    </main>

    {include file="footera.tpl"}
