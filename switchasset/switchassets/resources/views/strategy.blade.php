<!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Assets Group</title>
    @include('layouts.meta')
</head>

<body>
    @include('layouts.header')

                    <!-- Page titlebar start -->
    <div class="content-section decorated-bg page-titlebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title">Investment Strategy </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('/')}}">Home</a>
                        </li>
                        <li class="active">Investment Strategy </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Page titlebar end -->
    <!-- Intro start -->
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-section-header left">
                        <h2 class="title">Investment Strategy</h2>
                        <p class="description">Switch Assets Group uses multiple strategies to diversify portfolios in our
                            asset management process, reducing the potential risks inherent in the financial markets through
                            our high level of capital diversification.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <p>Switch Assets Group’s choice of specific investment in the different industries we are involved in is
                        carried out by our continuous automated financial analyst and manual analyst to the effectiveness of
                        both assets evaluated and the financial market as a whole.
                    </p>
                    <p>Switch Assets Group uses Metatrader 4 to trade the forex market and Bitfinex, Binance and Kraken exchange
                        platforms for crypto currency trading & our arbitrage trading. These softwares and exchanges offers
                        high liquidity, high levels of security and reliable customer service
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro end -->

    @include('layouts.footer')

</body>

</html>
