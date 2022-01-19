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
                    <h1 class="title">about our company</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('/')}}">Home</a>
                        </li>
                        <li class="active">About Switch Assets Group</li>
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
                <div class="col-md-6">
                    <p class="text-decor-1">Switch Assets Group </p>
                    <p class="text-decor-2">About Switch Assets Group
                    </p>
                    <p>Founded in 2017, Switch Assets Group is an investment vehicle that have experts in
                        date analysis that specialize in conservative and arbitrage trading opportunities. Switch Assets Group
                        started off trading in the forex market before venturing into the crypto currency market after great
                        success experienced in the forex market.</p>
                    <p>
                        Business failures are an unfortunate but fairly a common part of business. Switch Assets Group as an
                        investment vehicles road to success wasn’t a straightforward one.
                    </p>
                    <p>
                        Failure can be incredibly difficult to move on from. However, we managed to leverage on our
                        learnings to come back stronger. With the financial investment behind the Switch Assets Group project,
                        there was a lot of pressure on our engineers, but they overcame early technical difficulties to
                        eventually develop a proven technology that is high frequency and effective than the previous
                        technology.
                    </p>
                    <p>
                        <a href="{{ url('register')}}" class="btn btn-2">GET STARTED
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <figure class="bordered">
                        <img src="{{ asset('images/big-images/2.jpg')}}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro end -->
    
    <!-- Testimonials start -->
    <div class="content-section decorated-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4">
                    <div class="content-section-header left">
                        <h2 class="title">clients testimonials</h2>
                        <p class="description">What our clients say about us.</p>
                    </div>
                    <div class="clearfix"></div>
                    <div id="testimonials-nav" class="owl-nav left"></div>
                </div>
                <div class="col-md-9 col-lg-8">
                    <div id="testimonials" class="testimonials-owl owl-theme owl-carousel">
                        <div class="testimonials-item">
                            <header>
                                <h4>Rose A. Blanche</h4>
                                <div class="text-decor-1">Control room operator, "Electronics Source"</div>
                            </header>
                            <div class="content">
                                <p>" I just can't get enough of Switch Assets Group. I want to get a T-Shirt with Switch Assets Group on it so I can
                                    show it off to everyone. Switch Assets Group has completely surpassed our expectations. "</p>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <header>
                                <h4>Lillie M. Webb</h4>
                                <div class="text-decor-1">Etcher, "JasmineSola"</div>
                            </header>
                            <div class="content">
                                <p>" Very easy to use. I have gotten at least 50 times the value from Switch Assets Group. Keep up the
                                    excellent work. "</p>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <header>
                                <h4>Gregory J. Reeves</h4>
                                <div class="text-decor-1">Independent insurance agent, "Sambo's"</div>
                            </header>
                            <div class="content">
                                <p>" Switch Assets Group is both attractive and highly adaptable. It's incredible. Switch Assets Group is the next
                                    killer app. "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials end -->

    @include('layouts.footer')

</body>

</html>
