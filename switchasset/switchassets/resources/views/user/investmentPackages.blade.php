
 <!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Assets Group | Investment</title>
    @include('user.layouts.meta')
</head>

<body class="dark-sidenav">
        <!-- Left Sidenav -->
        @include('user.layouts.sidebar')
        <!-- end left-sidenav-->

    <div class="page-wrapper">

        <!-- Top Bar Start -->
        @include('user.layouts.header')
        <!-- Top Bar End -->
        <div class="page-content">
            <div>
                    <div>
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Investment Packages</h4>
                            </div>
                            <div class="col-auto align-self-center"><a href="#" class="btn btn-sm btn-outline-secondary"
                                    id="Dash_Date"><span class="day-name" id="Day_Name">Today:</span>&nbsp; <span
                                        class="" id=" Select_date"></span> <i data-feather="calendar"
                                        class="align-self-center icon-xs ml-1"></i>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="pricingTable1 text-center">
                                <h6 class="title1 py-3 mt-2 mb-0">Basic Plan </h6>
                                <ul class="list-unstyled pricing-content-2">
                                    <li>$1000 - $4,999 </li>
                                    <li>10% Daily </li>
                                    <li>25 days Duration</li>
                                    <li>5% Referral Bonus</li>
                                </ul>
                                <hr class="hr-dashed my-4">

                                <a href="{{ route('investment', ['investment_id' => 1])}}"
                                    class="btn btn-primary btn-block btn-skew btn-outline-dashed py-2"><span>Join
                                        Plan</span></a>
                            </div>
                            <!--end pricingTable-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="pricingTable1 text-center">
                                <h6 class="title1 py-3 mt-2 mb-0">Standard Plan</h6>
                                <ul class="list-unstyled pricing-content-2">
                                    <li>$5,000 - $19,990 </li>
                                    <li>12% Daily </li>
                                    <li>25 days Duration</li>
                                    <li>5% Referral Bonus</li>
                                </ul>
                                <hr class="hr-dashed my-4">

                                <a href="{{ route('investment', ['investment_id' => 2])}}"
                                    class="btn btn-primary btn-block btn-skew btn-outline-dashed py-2"><span>Join
                                        Plan</span></a>
                            </div>
                            <!--end pricingTable-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="pricingTable1 text-center">
                                <h6 class="title1 py-3 mt-2 mb-0">Ultra Plan</h6>
                                <ul class="list-unstyled pricing-content-2">
                                    <li>$20,000 - $49,999 </li>
                                    <li>15% Daily </li>
                                    <li>25 days Duration</li>
                                    <li>5% Referral Bonus</li>
                                </ul>
                                <hr class="hr-dashed my-4">

                                <a href="{{ route('investment', ['investment_id' => 3])}}"
                                    class="btn btn-primary btn-block btn-skew btn-outline-dashed py-2"><span>Join
                                        Plan</span></a>
                            </div>
                            <!--end pricingTable-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="pricingTable1 text-center">
                                <h6 class="title1 py-3 mt-2 mb-0">Commercial Plan</h6>
                                <ul class="list-unstyled pricing-content-2">
                                    <li>$50,000 – Unlimited </li>
                                    <li>20% Daily </li>
                                    <li>25 days Duration</li>
                                    <li>5% Referral Bonus</li>
                                </ul>
                                <hr class="hr-dashed my-4">

                                <a href="{{ route('investment', ['investment_id' => 4])}}"
                                    class="btn btn-primary btn-block btn-skew btn-outline-dashed py-2"><span>Join
                                        Plan</span></a>
                            </div>
                            <!--end pricingTable-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    </div>
    <!-- .page-content -->
    @include('user.layouts.footer')
</body>

</html>
