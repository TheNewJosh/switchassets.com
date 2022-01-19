<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand"><a href="{{ url('/')}}" class="logo"><span> </span><span><img
                    style="height:50px; width:50px;margin-top:30px" src="{{ asset('images/logo.png')}}" alt=""
                    class="logo-lg logo-light">
                <img src="{{ asset('images/logo.png')}}" alt="" class="logo-lg logo-dark"></span></a></div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li><a class="nav-link" href="{{ url('dashboard')}}"><i data-feather="home"
                        class="align-self-center menu-icon"></i><span class="font-14">Dashboard</span></a>
            </li>
            <li><a href="javascript: void(0);"><i data-feather="credit-card"
                        class="align-self-center menu-icon"></i><span class="font-14">Deposit</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ url('deposit')}}"><i
                                class="ti-control-record"></i>Make
                            Deposit</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('depositHistory')}}"><i
                                class="ti-control-record"></i>Deposit History</a></li>
                </ul>
            </li>
            <li><a href="javascript: void(0);"><i data-feather="briefcase" class="align-self-center menu-icon"></i><span
                        class="font-14">Investment</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ url('investmentPackages')}}"><i
                                class="ti-control-record"></i>New Investment</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('investmentHistory')}}"><i
                                class="ti-control-record"></i>My Investments</a></li>
                </ul>
            </li>
            <li><a href="javascript: void(0);"><i data-feather="shuffle" class="align-self-center menu-icon"></i><span
                        class="font-14">Withdrawal</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ url('withdrawal')}}"><i
                                class="ti-control-record"></i>Make
                            Withdrawal</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('withdrawalHistory')}}"><i
                                class="ti-control-record"></i>Withdrawal History</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="#" data-toggle="modal" data-target="#reinvest-modal"><i
                        data-feather="repeat" class="align-self-center menu-icon"></i><span
                        class="font-14">Reinvest ROi</span></a>
            </li>
            <li><a class="nav-link" href="{{ url('transaction')}}"><i data-feather="list"
                        class="align-self-center menu-icon"></i><span>Transaction
                        History</span></a>
            </li>
            <li><a href="javascript: void(0);"><i data-feather="users" class="align-self-center menu-icon"></i><span
                        class="font-14">Referral</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ url('referral')}}"><i
                                class="ti-control-record"></i>Referrals</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('referralBonus')}}"><i
                                class="ti-control-record"></i>Referral Bonus</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="{{ url('/')}}"><i data-feather="home" class="align-self-center menu-icon"></i><span
                        class="font-14">Home</span></a>
            </li>
            
    </div>
</div>