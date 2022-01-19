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
                    <h1 class="title">Cryptocurrency</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('/')}}">Home</a>
                        </li>
                        <li class="active">Cryptocurrency</li>
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
                        <p class="description">Bitcoin trading is a unique platform for trading bitcoin against other
                            cryptocurrencies just like one
                            would do for forex trading. Just like forex trading it dependent on one’s ability to predict
                            trends
                            and price shift. The major advantage that bitcoin trading has over regular stock and forex
                            trading
                            is that fact that prices are extremely volatile hence there are multiple opportunities for
                            profit in
                            just the course of a day</p>
                    </div>
                    <div class="clearfix"></div>
                    <blockquote>
                        <p>" While long term traders prefer to hold their bitcoin positions for extended periods of time,
                            day traders have discovered that Bitcoin is lucrative for many reasons"</p>
                    </blockquote>
                    <p>Years of trading experience combined with technology cognizance gives our analysts an edge over other
                        traders.
                        We trade in Bitcoin, Ethereum and several notable altcoins on variety of Crypto Exchanges not
                        limited to centralized, decentralized and often times even P2P exchanges.. </p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="ul-check">
                                <li>Crypto trading is more volatile than stock trading.</li>
                                <li>Bitcoin is traded 24 hours per day 7 days a week. </li>
                                <li>Bitcoin allows for big trades with low overhead. </li>
                                <li>Bitcoin is the most liquid form of cryptocurrency. </li>
                                <li>Multiple trading opportunities will emerge within a 24 hour period. </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
    <div class="sidebar">
        <div class="widget widget-categories">
            <h4 class="widget-title">other services</h4>
            <div class="widget-content">
                <ul>
                    <li>
                        <a href="{{ url('cryptocurrency')}}">Cryptocurrency Investment</a>
                    </li>
                    <li>
                        <a href="{{ url('forex')}}">Forex Investment</a>
                    </li>
                    <li>
                        <a href="{{ url('stock')}}">Stock Investment</a>
                    </li>
                    <li>
                        <a href="{{ url('realEstate')}}">Real Estate Investment</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="widget image-bg image-bg-7">
            <h4 class="widget-title">Get Started</h4>
            <div class="widget-content">
                <p>Synergistic Switch Assets Group platform with a well-informed global view, access to relationships and
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

</body>

</html>
