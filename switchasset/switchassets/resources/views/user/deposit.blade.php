
 <!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Assets Group | Deposit</title>
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
                                <h4 class="page-title">Deposit</h4>
                            </div>
                            <div class="col-auto align-self-center"><a href="#" class="btn btn-sm btn-outline-secondary"
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
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center"><img src="{{ asset('dash/images/bitcoin.svg')}}" alt=""
                            class=""
                                        height=" 100">
                        <h6 class="title1 py-3 mt-2 mb-0">Bitcoin</h6>
                        <ul class="list-unstyled pricing-content-2">
                        </ul>
                        <hr class="hr-dashed my-4">
                        <div class="text-center">
                        </div><a href="#" data-toggle="modal" data-target="#btc-fund-modal"
                            class="btn btn-primary btn-block btn-skew btn-outline-dashed py-2"><span>Deposit</span></a>
                    </div>
                    <!--end pricingTable-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center"><img src="{{ asset('dash/images/ethereum.svg')}}" alt=""
                            class=""
                                        height=" 100">
                        <h6 class="title1 py-3 mt-2 mb-0">Ethereum</h6>
                        <ul class="list-unstyled pricing-content-2">
                        </ul>
                        <hr class="hr-dashed my-4">
                        <div class="text-center">
                        </div><a href="#" data-toggle="modal" data-target="#eth-fund-modal"
                            class="btn btn-primary btn-block btn-skew btn-outline-dashed py-2"><span>Deposit</span></a>
                    </div>
                    <!--end pricingTable-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center"><img src="{{ asset('dash/images/bitcoin-cash.svg')}}" alt=""
                            class=""
                                        height=" 100">
                        <h6 class="title1 py-3 mt-2 mb-0">Bitcoin Cash</h6>
                        <ul class="list-unstyled pricing-content-2">
                        </ul>
                        <hr class="hr-dashed my-4">
                        <div class="text-center">
                        </div><a href="#" data-toggle="modal" data-target="#bch-fund-modal"
                            class="btn btn-primary btn-block btn-skew btn-outline-dashed py-2"><span>Deposit</span></a>
                    </div>
                    <!--end pricingTable-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center"><img src="{{ asset('dash/images/tether.svg')}}" alt=""
                            class=""
                                        height=" 100">
                        <h6 class="title1 py-3 mt-2 mb-0">USDT</h6>
                        <ul class="list-unstyled pricing-content-2">
                        </ul>
                        <hr class="hr-dashed my-4">
                        <div class="text-center">
                        </div><a href="#" data-toggle="modal" data-target="#usdt-fund-modal"
                            class="btn btn-primary btn-block btn-skew btn-outline-dashed py-2"><span>Deposit</span></a>
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
