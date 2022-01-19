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
                        <p class="description">Switch Assets Group Real Assets business is fully integrated with Switch Assets Group private
                            equity and credit businesses and follows the same value-driven philosophy. Our experience in
                            real estate principal investing, as investor and asset manager, spans market cycles and captures
                            every level of the capital structure.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                    <p>Our Real Assets team provides deep knowledge and extensive industry relationships. We have offices in
                        North America, Europe and Asia, and actively pursue investment opportunities in each region.
                        Switch Assets Group tackles complexity to create value by thoughtfully identifying pockets of opportunity and
                        relying on a flexible mandate to structure the best risk reward and rigorous asset management to
                        maximize value.
                    </p>
                    <blockquote>
                        <p>"The real estate funds and accounts managed by Switch Assets Group invest in a broad spectrum of property
                            types and throughout the capital structure.
                            "</p>
                    </blockquote>
                    <p>Switch Assets Group real estate private equity business has a proven investment track record. It orients around
                        thesis-driven strategies guided by the identification and analysis of disruptive forces, demographic
                        trends, and market dislocations or pockets of distress. This enables us to invest across market
                        cycles and sub-markets, and into both traditional and niche asset classes. Across the real estate
                        private equity business, we employ an opportunistic, value-driven style and a flexible approach to
                        acquire real estate assets, portfolios, and companies and provide servicing or structured credit
                        solutions, through regionally-focused funds. Switch Assets Group looks for value in complex investments that
                        most investors lack the inclination, resources, or ability to distill. We emphasize capital
                        preservation and defensive positioning to build scalable platforms in partnership with strong,
                        seasoned management teams.</p>
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
