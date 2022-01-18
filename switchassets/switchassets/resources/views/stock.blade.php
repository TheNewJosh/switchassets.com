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
                        <p class="description">Here at Prime Assets Group we provide online brokerage services for over 1000
                            customer accounts and processes over 3,000 trades per day. With our history in the stock market
                            we have overtime been able to position ourselves properly so that we are now able to predict
                            market trends with th aid of tools like D Ameritrade's thinkorswim which is home to an
                            impressive array of tools.</p>
                    </div>
                    <div class="clearfix"></div>
                    <blockquote>
                        <p>"In the process of searching for a well-rounded broker, finding the right mix is no easy task.
                            Trade costs, trade platforms, tools, research, and customer service all are important to
                            investors. We are here to end that search and make stock broking less complex and very
                            profitable
                            "</p>
                    </blockquote>
                    <p>Whether it be company profiling, advanced earnings analysis, plotting FRED data, charting social
                        sentiment, backtesting and replaying historical markets tick by tick, viewing economic and corporate
                        calendars, creating and conducting real-time stock scans, sharing charts and workspace layouts, or
                        performing advanced options analysis, the rabbit hole goes as far as any trader's imagination will
                        take them. </p>
                    <p>
                        Focusing on two more recent innovations, adding Federal Reserve Economic Data (FRED) and the new
                        earnings analysis tool, investors can begin to appreciate the endless brain hub stationed at
                        thinkorswim’s Chicago office. Starting with FRED, a publicly accessible US Government database of
                        over 400,000 economic data points; think GDP, CPI, treasury rates, median household income, etc.
                        FRED data is used by institutional investors, hedge funds, and other sophisticated trading
                        operations. In its never-ending quest to level the playing field, the thinkorswim team decided to
                        download all the data, process it, build a custom interface to graph it, and brought it to all TD
                        Ameritrade clients
                    </p>
                </div>
                <div class="col-md-4">
    <div class="sidebar">
        <div class="widget widget-categories">
            <h4 class="widget-title">other services</h4>
            <div class="widget-content">
                <ul>
                    <li>
                        <a href="cryptocurrency.html">Cryptocurrency Investment</a>
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

</body>

</html>
