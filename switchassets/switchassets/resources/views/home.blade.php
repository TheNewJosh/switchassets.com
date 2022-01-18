<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prime Assets Group</title>
    @include('layouts.meta')
</head>

<body>
    @include('layouts.header')
    <!-- Homepage slider start -->
    <div class="homepage-slider">
        <div class="homepage-slider-nav">
            <a id="homepage-slider-left" href="#">
                <span class="wicon-iconmonstr-angel-left-circle-thin"></span>
            </a>
        </div>
        <div id="homepage-slider" class="owl-theme owl-carousel">
            <!-- Homepage slider item start -->
            <div class="homepage-slider-item">
                <img src="{{ asset('images/big-images/1.jpg')}}" alt="" class="homepage-slider-item-image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="homepage-slider-item-content">
                                <div class="text-1">a leading provider of</div>
                                <div class="text-2">INVESTMENT SERVICES</div>
                                <div class="text-1">for your business</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Homepage slider item end -->
            <!-- Homepage slider item start -->
            <div class="homepage-slider-item">
                <img src="{{ asset('images/big-images/2.jpg')}}" alt="" class="homepage-slider-item-image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="homepage-slider-item-content">
                                <div class="text-1">we focus on </div>
                                <div class="text-2">profit & value adding</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Homepage slider item end -->
            <!-- Homepage slider item start -->
            <div class="homepage-slider-item">
                <img src="{{ asset('images/big-images/3.jpg')}}" alt="" class="homepage-slider-item-image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="homepage-slider-item-content">
                                <div class="text-1">we help organisations</div>
                                <div class="text-2">manage finance</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Homepage slider item end -->
        </div>
        <div class="homepage-slider-nav right">
            <a id="homepage-slider-right" href="#">
                <span class="wicon-iconmonstr-angel-right-circle-thin"></span>
            </a>
        </div>
    </div>
    <!-- Homepage slider end -->
    <!-- Intro start -->
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-decor-1">welcome to Prime Assets Group</p>
                    <p class="text-decor-2">We're committed to putting you on the right track financially.</p>
                    <p>
                        <a href="{{ url('register')}}" class="btn btn-1">GET STARTED</a>
                        <a href="{{ url('login')}}" class="btn btn-2">LOGIN</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p>We were among the first to adapt to the high volatility of the digital assets market, providing
                        cutting edge software solutions for high-performance operations with cryptocurrency and safe storage
                        of assets. The team of acknowledged specialists will increase the absolute value of your portfolio!
                    </p>
                    <p>Our trading software is designed by our in-house specialists at Prime Assets Group. Our algorithm and
                        software are proven and has made great success in the crypto and forex market. Our software is
                        focused on predicting the market with an excellent target accuracy rate which enables the traders
                        know where the market will go next in a constantly updating complex loop. We have also succeeded in
                        demystifying the cryptocurrency market for our clients as our highly successfully track records
                        speak for itself.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro end -->
    <!-- Benefits start -->
    <div class="content-section palette-4-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 icon-box v1">
                    <p>
                        <span class="wicon-iconmonstr-globe-thin"></span>
                    </p>
                    <div>
                        <h4 class="title">Transparency and Confidentiality</h4>
                        <p>With over 7 Years of funds management experience, maximum transparency of operation is one of the
                            hallmarks of our critical acclaim; this includes access to our historical trade results, web TV
                            showing live trades in our member’s back offices, excellent compliance track records, and other
                            instances which you will become familiar with as a client in due course. </p>
                    </div>
                </div>
                <div class="col-md-4 icon-box v1">
                    <p>
                        <span class="wicon-iconmonstr-light-bulb-thin"></span>
                    </p>
                    <div>
                        <h4 class="title">Proficiency in Risk Management</h4>
                        <p>Our experts in the Risk Management Department are in charge of setting trade limits after
                            consultation with our traders, access quant performance, and evaluate trading plans in
                            accordance with applicable laws and company polices.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 icon-box v1">
                    <p>
                        <span class="wicon-iconmonstr-database-thin"></span>
                    </p>
                    <div>
                        <h4 class="title">Global Impact </h4>
                        <p>Prime Assets Group is an investment firm with worldwide reach. We manage assets for our clients
                            in
                            North and South America, Europe, Middle East, North Africa and Turkey.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits end -->
    <!-- Services start -->
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-section-header center">
                        <h2 class="title">services we provide</h2>
                        <p class="description">We help you to communicate the value og your project so you get the buy-in
                            and adoption you need to success.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="index-1-services" class="owl-theme owl-carousel">
                        <div class="service-simple"> <img src="images/big-images/crypto.jpg" height="220" alt="img">
                            <div class="service-simple-inner">
                                <h4>Cryptocurrency Investment</h4>
                                <p>While long term traders prefer to hold their bitcoin positions for extended periods of
                                    time, day traders have discovered that Bitcoin is lucrative for many reasons</p>
                                <div class="service-simple-button"> <a href="cryptocurrency.html">Learn More</a> </div>
                            </div>
                        </div>
                        <div class="service-simple"> <img src="images/big-images/forex.jpg" height="220" alt="img">
                            <div class="service-simple-inner">
                                <h4>Forex Investment</h4>
                                <p>On the FOREX market one currency is exchanged for another. The single most important
                                    thing with respect to FOREX market is the exchange rate between two currencies (a
                                    currency pair).</p>
                                <div class="service-simple-button"> <a href="forex.html">Learn More</a> </div>
                            </div>
                        </div>
                        <div class="service-simple"> <img src="images/big-images/stock.jpg" height="220" alt="img">
                            <div class="service-simple-inner">
                                <h4>Stock Investment</h4>
                                <p>In the process of searching for a well-rounded broker, finding the right mix is no easy
                                    task. Trade costs, trade platforms, tools, research, and customer service all are
                                    important to investors. </p>
                                <div class="service-simple-button"> <a href="stock.html">Learn More</a> </div>
                            </div>
                        </div>
                        <div class="service-simple"> <img src="images/big-images/real-estate.jpg" height="220" alt="img">
                            <div class="service-simple-inner">
                                <h4>Real Estate Investment</h4>
                                <p>The real estate funds and accounts managed by Prime Assets Group invest in a broad
                                    spectrum of
                                    property types and throughout the capital structure.</p>
                                <div class="service-simple-button"> <a href="real-estate.html">Learn More</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="index-1-services-nav" class="owl-nav center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services end -->
    <!-- CTA start -->
    <div class="content-section image-bg image-bg-10 cta v1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-1">empowering business through people</p>
                    <p class="text-2" style="overflow: hidden">Creating the Future of Finance Today</p>
                    <p>Since 2018 Prime Assets Group has strived to bring professional services to the world of digital
                        assets.
                        Leveraging the best of the team’s years of experience in FinTech along with the power of blockchain
                        technology, Prime Assets Group is empowering thousands of people to harness the value behind their
                        crypto
                        assets and live the future of finance today.
                    </p>
                    <p>
                        <a href="#" class="btn btn-1">
                            GET STARTED</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA end -->
    <!-- Recent cases start -->
    <div class="content-section decorated-bg">
        <div class="container">
            <div class="row index-1-recent-cases-content">
                <div class="col-md-8">
                    <div class="content-section-header left safety">
                        <h1>Safety is our priority</h1>
                        <p class="description">Prime Assets Group ensure the highest level of security for our clients
                            funds
                            and the company’s funds by strict compliance with
                            some outlined measures which can be found on the company’s
                            white paper.</p>
                        <ul>
                            <li>Segregated accounts</li>
                            <li>Regulatory Compliance </li>
                            <li>Insurance protection </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/safety.png" />
                </div>
            </div>
        </div>
    </div>
    <!-- Recent cases end -->
    <!-- Latest blog posts start -->
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-section-header center">
                        <h2 class="title">Our Packages </h2>
                        <p class="description">Pick The Best Plan For You </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="pricing-list">
                        <h4>Beginner</h4>
                        <div class="pricing-list-price">
                            <h2>10%</h2> <span>/Daily</span>
                        </div>
                        <ul>
                            <li>$1,000 - $4,999</li>
                            <li>Express, Support</li>
                            <li>Referral Bonus 5%</li>
                            <li>25 days Duration</li>
                        </ul>
                        <div class="pricing-list-button"> <a href="#">Buy Now</a> </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricing-list">
                        <h4>Standard</h4>
                        <div class="pricing-list-price">
                            <h2>12%</h2> <span>/Daily</span>
                        </div>
                        <ul>
                            <li>$5,000 - $19,999</li>
                            <li>Express, Support</li>
                            <li>Referral Bonus 5%</li>
                            <li>25 days Duration</li>
                        </ul>
                        <div class="pricing-list-button"> <a href="#">Buy Now</a> </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricing-list">
                        <h4>Ultra</h4>
                        <div class="pricing-list-price">
                            <h2>15%</h2> <span>/Daily</span>
                        </div>
                        <ul>
                            <li>$20,000 - $49,999</li>
                            <li>Express Support</li>
                            <li>Referral Bonus 5%</li>
                            <li>25 days Duration</li>
                        </ul>
                        <div class="pricing-list-button"> <a href="#">Buy Now</a> </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pricing-list">
                        <h4>Commercial</h4>
                        <div class="pricing-list-price">
                            <h2>20%</h2> <span>/Daily</span>
                        </div>
                        <ul>
                            <li>$50,000 - Unlimited</li>
                            <li>Express Support</li>
                            <li>Referral Bonus 5%</li>
                            <li>25 days Duration</li>
                        </ul>
                        <div class="pricing-list-button"> <a href="#">Buy Now</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest blog posts end -->
    <!-- Partners start -->
    <div class="content-section palette-4-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partners-wrapper">
                        <div class="partners-nav left owl-nav">
                            <button id="partners-prev" type="button" role="presentation" class="owl-prev">
                                <span class="wicon-iconmonstr-angel-left-circle-thin"></span>
                            </button>
                        </div>
                        <div id="partners" class="partners-content owl-carousel owl-theme">
                            <img src="images/partners/1.png" alt="">
                            <img src="images/partners/2.png" alt="">
                            <img src="images/partners/3.png" alt="">
                            <img src="images/partners/4.png" alt="">
                            <img src="images/partners/5.png" alt="">
                            <img src="images/partners/6.png" alt="">
                            <img src="images/partners/7.png" alt="">
                            <img src="images/partners/8.png" alt="">
                            <img src="images/partners/9.png" alt="">
                        </div>
                        <div class="partners-nav right owl-nav">
                            <button id="partners-next" type="button" role="presentation" class="owl-next">
                                <span class="wicon-iconmonstr-angel-right-circle-thin"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners end -->
    <!-- Quick faq & contact form start -->
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 subsection-fix-sm subsection-fix-xs">
                    <div class="content-block palette-2-bg">
                        <h3 class="text-center">request a quotation</h3>
                        <form id="contact-form">
                            <div class="form-group contacts-form-result">
                                <strong></strong>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Your name..." name="comment-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Your e-mail..." name="comment-email"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="tel" placeholder="Your phone..." name="comment-phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea rows="10" placeholder="Your message..." name="comment-message"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-1">Send Your Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick faq & contact form end -->
    <!-- CTA start -->
    <div class="content-section image-bg image-bg-11 cta v1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-1">we're knowledgeable about</p>
                    <p class="text-2">making benefits higher</p>
                    <p>A leading provider of consulting services.</p>
                    <p>
                        <a href="register.html" class="btn btn-1">
                            GET STARTED</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA end -->
    </div>
    @include('layouts.footer')    
</body>

</html>
