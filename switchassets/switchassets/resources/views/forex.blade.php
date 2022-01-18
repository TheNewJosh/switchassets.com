<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prime Assets Group</title>
    @include('layouts.meta')
</head>

<body>
    @include('layouts.header')
                    <!-- Page titlebar start -->
    <div class="content-section decorated-bg page-titlebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title">Forex</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('/')}}">Home</a>
                        </li>
                        <li class="active">Forex</li>
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
                        <h2 class="title">what can we do</h2>
                        <p class="description">The Foreign Exchange market, also called FOREX or FX, is the global market for currency trading. With
                            a daily volume of more than $5.3 trillion, it is the biggest and most exciting financial market in
                            the world. Whether you sell EUR 100 to buy US dollars at the airport or a bank exchanges 100 million
                            US dollars for Japanese yen with another bank, both are FOREX deals. The players on the FOREX market
                            range from huge financial organizations, managing billions, to individuals trading a few hundred
                            dollars.</p>
                    </div>
                    <div class="clearfix"></div>
                    <blockquote>
                        <p>"On the FOREX market one currency is exchanged for another. The single most important thing with
                            respect to FOREX market is the exchange rate between two currencies (a currency pair).
                            "</p>
                    </blockquote>
                    <p>For those who know what they are doing, Forex trading can be very profitable activity although it
                        doesn't come without risks. To get the best out of your trading experience. It is critical that you
                        choose a Forex platform/broker that can offer you everything you need from demo platforms to
                        educational tools.</p>
                    <p>
                        Selecting the right broker can be a time-consuming process. Who do you choose and why? What do you
                        look out for and how do you know that the company/broker is safe? That is where we come in. Our team
                        of experts scour the internet reviewing and rating all of the markets, so that we only present you
                        with the best of them. It is then up to you to make an informed decision as to how much to invest.
                    </p>
                </div>
                <div class="col-md-4">
    <div class="sidebar">
        <div class="widget widget-categories">
            <h4 class="widget-title">other services</h4>
            <div class="widget-content">
                <ul>
                    <li>
                        <a href="cryptocurrency">Cryptocurrency Investment</a>
                    </li>
                    <li>
                        <a href="forex.html">Forex Investment</a>
                    </li>
                    <li>
                        <a href="stock.html">Stock Investment</a>
                    </li>
                    <li>
                        <a href="real-estate.html">Real Estate Investment</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="widget image-bg image-bg-7">
            <h4 class="widget-title">Get Started</h4>
            <div class="widget-content">
                <p>Synergistic Prime Assets Group platform with a well-informed global view, access to relationships and
                    operational benefits</p>
                <p>
                    <a href="{{ url('register')}}" class="btn btn-1">GET STARTED</a>
                </p>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
    <!-- Intro end -->

    @include('layouts.footer')
    >
</body>

</html>
