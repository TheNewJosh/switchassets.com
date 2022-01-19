
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
                                <h4 class="page-title">Investment</h4>
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
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="pricingTable1 text-center">
                                    <h6 class="title1 py-3 mt-2 mb-0">Basic plan </h6>
                                    <ul class="list-unstyled pricing-content-2">
                                        <li>$1,000+</li>
                                        <li>25 Days Duration</li>
                                    </ul>
                                    <hr class="hr-dashed my-4">

                                    <a href="{{ url('investmentPackages')}}"
                                        class="btn btn-primary btn-block btn-skew btn-outline-dashed py-2"><span>Back</span></a>
                                </div>
                                <!--end pricingTable-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="/investment" method="post">
                                    <input type="hidden" name="_token" value="3FRxGDHlOjOTIuRPdNbt1ia0dL95BCKbv8saBy2j">                                    <input class="form-control" type="hidden" name="plan" value="Basic">
                                    <input class="form-control" type="hidden" name="min" value="1000">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"><label for="example-input01"
                                                    class="col-form-label">Amount</label>
                                                <div class="input-group">
                                                    <div class="input-group-append"><span class="input-group-text">$</span>
                                                    </div><input type="number" class="form-control" name="amount"
                                                        min="1000" required />
                                                </div>
                                                <small> Available Balance: <span
                                                        class="text-warning">$0.00
                                                    </span></small>
                                                                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        
                                        <div class="col-md-12">
                                            <button class="btn btn-primary">Proceed</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
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
