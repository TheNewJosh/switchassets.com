
 <!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Assets Group | Withdrawal</title>
    @include('user.layouts.meta')
</head>

<body class="dark-sidenav">

    <!-- Left Sidenav -->
        @include('user.layouts.sidebar')
    <!-- end left-sidenav-->

    <div class="page-wrapper">
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

                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Withdrawal Request</h4>
                    </div>
                    <div class="card-body">
                        <form class="" action="/withdrawal" method="POST">
                            <input type="hidden" name="_token" value="3FRxGDHlOjOTIuRPdNbt1ia0dL95BCKbv8saBy2j">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" value="" class="form-control" required>
                                <small> ROI: <span class="text-warning">$0.0000
                                </span></small>
                                                            </div>
                            <div class="form-group">
                                <label class="mb-3">Payout Option</label> <select class="select2 form-control mb-3 custom-select"
                                    style="width: 100%; height:36px;" name="method">
                                    <option value="BTC">Bitcoin</option>
                                    <option value="ETH">Ethereum</option>
                                    <option value="BCH">Bitcoin Cash</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="amount">Wallet Address</label>
                                <input type="text" name="wallet_address" value="" class="form-control" required />
                            </div>
                            <div class="row">
                                <div class="col-sm-12"><button type="submit" class="btn btn-primary btn-block px-4">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end card-->
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
