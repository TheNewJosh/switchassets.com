
 <!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Assets Group | Referral Bonus</title>
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
                        <div class="col">
                            <h4 class="page-title">Referral</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Switch Assets Group</a></li>
                                <li class="breadcrumb-item active">Referral Account</li>
                            </ol>
                        </div>
                        <div class="col-auto align-self-center"><a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date"><span
                                    class="day-name" id="Day_Name">Today:</span>&nbsp; <span class="" id="Select_date"></span> <i
                                    data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="card-title">Bonus History</h4>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end card-header-->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="withdrawalHistory">
                    <thead class="">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                                                                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
</div>
<!-- .page-content -->
    @include('user.layouts.footer')
</body>

</html>
