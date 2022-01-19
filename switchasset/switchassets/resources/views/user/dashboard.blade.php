<!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Assets Group | Dashboard</title>
    @include('user.layouts.meta')
</head>

<body class="dark-sidenav">

    <!-- Left Sidenav -->
        @include('user.layouts.sidebar')
    <!-- end left-sidenav-->

    <div class="page-wrapper">
        @include('user.layouts.header')
        <div class="page-content">
            <div>
                    <script src="apex-charts/apexcharts.min.js"></script>

    <div>
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Switch Assets Group</a>
                                    </li>
                                    
                                </ol>
                            </div>
                            <div class="col-auto align-self-center"><a href="#" class="btn btn-sm btn-outline-primary"
                                    id="Dash_Date"><span class="day-name" id="Day_Name">Today:</span>&nbsp; <span
                                        class=""
                                        id=" Select_date"></span> <i
                                        data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                
                <div class="col-md-12">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">Account Balance</p>
                                            <h3 class="my-2">$0.00
                                            </h3>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt"><i data-feather="briefcase"
                                                    class="align-self-center text-muted icon-md"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-4 p-0">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">Total Amount Invested</p>
                                            <h3 class="my-2">
                                                $0.00</h3>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt"><i data-feather="dollar-sign"
                                                    class="align-self-center text-muted icon-md"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 font-weight-semibold">ROI</p>
                                            <h3 class="my-2">$0.00</h3>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="report-main-icon bg-light-alt"><i data-feather="activity"
                                                    class="align-self-center text-muted icon-md"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card report-card">
                                <div class="card-body">
                                    <p>To buy cryptocurrency such as Bitcoin, Ethereum or Bitcoin cash, check out any of
                                        these our partners to get started </p>
                                    <div>
                                        <a class="btn btn-primary my-1" target="_blank" href="https://Coinbase.com">Coin
                                            Base</a> <a class="btn btn-primary my-1" target="_blank"
                                            href="https://Binance.com">Binance</a>
                                        <a class="btn btn-primary my-1" target="_blank" href="https://Cex.io">Cex</a> <a
                                            class="btn btn-primary my-1" target="_blank"
                                            href="https://Payeer.com">Payeer</a>
                                            <a
                                            class="btn btn-primary my-1" target="_blank"
                                            href="https://www.coinmama.com/">Coinmama</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <h1 class="my-4 font-weight-bold">How Referral<span class="text-primary">
                                            Works</span>.
                                    </h1>
                                    <p class="font-20 font-weight-bold">Invite any active investor and earn <br /> instant
                                        5% referral bonus</p>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="mb-3 text-muted">Referral Link</p>
                                            <p class="cursor-pointer" id="referral_link_p"><span
                                                    id="referral_link">https://Switch Asset
                                                    Group/register?ref=636787</span>
                                                <span id="copy_link_btn" class="cursor-pointer"><i data-feather="copy"
                                                        class="icon-dual"></i></span>
                                            </p>

                                        </div>

                                    </div>


                                </div>

                                <!--end row-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container">
                                        <div class="tradingview-widget-container__widget"></div>
                                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com"
                                                rel="noopener" target="_blank"><span class="blue-text">
                                                    History</span></a>
                                            by TradingView</div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                            {
                                                "colorTheme": "light",
                                                "isTransparent": false,
                                                "displayMode": "regular",
                                                "width": "100%",
                                                "height": "250",
                                                "locale": "en"
                                            }
                                        </script>
                                    </div>
                                    <!-- TradingView Widget END -->
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js"
                                                                async>
                                    {
                                        "width": "100%",
                                        "height": 400,
                                        "currencies": [
                                            "EUR",
                                            "USD",
                                            "JPY",
                                            "GBP",
                                            "CHF",
                                            "AUD",
                                            "CAD",
                                            "NZD",
                                            "CNY"
                                        ],
                                        "isTransparent": false,
                                        "colorTheme": "light",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
   
    @include('user.layouts.footer')
    
</body>

</html>
