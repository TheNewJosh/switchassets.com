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
                    <h1 class="title">FAQ </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('/')}}">Home</a>
                        </li>
                        <li class="active">FAQ </li>
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
                <div class="col-md-12 col-lg-12">
                    <div class="content-section-header left">
                        <h2 class="title">quick faq</h2>
                        <p class="description">The most common questions.</p>
                    </div>
                    <div class="clearfix"></div>
                    <div data-rt-accordion data-rt-accordion-toggle="on" data-rt-accordion-active="2"
                        class="rt-accordion">
                        <div data-rt-accordion-item class="rt-accordion-item">
                            <header>
                                <p class="title">What is the minimum amount per deposit?</p>
                            </header>
                            <div class="content">
                                <p>We want to maximize profit on every penny you put in , so the minimum deposit amount
                                    is $350
                                </p>
                            </div>
                        </div>
                        <div data-rt-accordion-item class="rt-accordion-item">
                            <header>
                                <p class="title">How long does it take to withdraw funds?</p>
                            </header>
                            <div class="content">
                                <p>We aim to process all withdrawal requests within 1 hour. Please keep in mind that the
                                    payment service provider may require more time to complete the process depending on
                                    the payment method.
                                </p>
                            </div>
                        </div>
                        <div data-rt-accordion-item class="rt-accordion-item">
                            <header>
                                <p class="title">I forgot my password. What should I do.
                                </p>
                            </header>
                            <div class="content">
                                <p>When you sign in to the site, you can click the "Forgot your password?" link and
                                    enter the email address you used for registration. You will get an email message
                                    with a link for setting a new password.
                                </p>
                            </div>
                        </div>
                        <div data-rt-accordion-item class="rt-accordion-item">
                            <header>
                                <p class="title">How do I withdraw money?</p>
                            </header>
                            <div class="content">
                                <p>To withdraw your money, go to Withdraw Funds. Choose a method, enter the amount and
                                    other information, and click "Withdraw Funds". Your request will be handled within 1
                                    hour.
                                </p>
                            </div>
                        </div>
                        <div data-rt-accordion-item class="rt-accordion-item">
                            <header>
                                <p class="title">How do I get started investing online? </p>
                            </header>
                            <div class="content">
                                <p>See how Switch Assets Group can help you take control of your investments online. By
                                    registering with us, choosing an investment plan, and depositing your funds, while
                                    we help you make consistent profits.
                                </p>
                            </div>
                        </div>
                        <div data-rt-accordion-item class="rt-accordion-item">
                            <header>
                                <p class="title">What's the difference between saving and investing?</p>
                            </header>
                            <div class="content">
                                <p>Because saving and investing are in some ways similar, many of the same ideas apply
                                    to both, including the risk of losing money, how easy it is to access your funds,
                                    and potential gains. But there are significant differences in exactly how those
                                    ideas apply and in how you actually go about saving versus investing. Let's break
                                    down the details.
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
