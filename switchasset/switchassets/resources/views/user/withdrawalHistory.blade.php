
 <!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Assets Group | Withdrawal History</title>
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
                            <h4 class="page-title">Withdrawal History</h4>
                        </div>
                        <div class="col-auto align-self-center"><a href="#" class="btn btn-sm btn-outline-secondary" id="Dash_Date"><span
                                    class="day-name" id="Day_Name">Today:</span>&nbsp; <span class="" id="Select_date"></span> <i
                                    data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-centered" id="withdrawalHistory">
                                <thead>
                                  <tr>
                                    <th>S/N</th>
                                    <th>Amount</th>
                                    <th>Payout option</th>
                                    <th>Wallet Address</th>
                                    <th>Date/Time</th>
                                    <th>status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1000</td>
                                        <td>Paid</td>
                                        <td>ikliodj</td>
                                        <td>Jan 10, 2022</td>
                                        <td>Pending</td>
                                        <td>Action</td>
                                    </tr>
                                </tbody>
                              </table>
                        <div class="custom-pagination">
                        </div>

                        </div><!-- .card-innr -->
                    </div><!-- .card -->
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
