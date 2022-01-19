<!-- Preload start -->
<div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Preload end -->
    <!-- To the top start -->
    <div id="to-the-top" class="to-the-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>
    <!-- To the top end -->
    <aside id="offcanvas-menu" data-pushbar-id="left" class="pushbar from_left">
        <h4 class="title">
            <span>Site Menu</span>
            <span data-pushbar-close> </span>
        </h4>
    </aside>
    <!-- Mobile menu end -->
    <div id="page" class="page">
        <div id="content-wrapper" class="content-wrapper">
            <div class="content-wrapper-inner">
                <!-- Header start -->
<header class="site-header site-header-1">
    <!-- Main bar start -->
    <div class="main-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 main-bar-content">
                    <!-- Logo start -->
                    <a href="index-2.html" title="Switch Assets Group" class="site-logo">
                        <div class="logo-img">
                            <img src="images/logo.png" style="max-height: 50px" alt="Switch Assets Group">
                        </div>
                        <div class="name-and-tagline">
                            <div class="name">Switch Assets Group</div>
                            <div class="tagline">solutions for business</div>
                        </div>
                    </a>
                    <!-- Logo end -->
                    <div class="contacts-and-button">
                        <!-- Contacts start -->
                        <div class="header-contacts">
                            <div class="header-contacts-item hidden-md hidden-sm hidden-xs">
                                <div class="title">
                                    <span class="wicon-iconmonstr-mail-thin"></span> Drop us a line
                                </div>
                                <div class="content">
                                    <a href="#">support@Switchassetsgroup.com</a>
                                </div>
                            </div>
                            <div class="header-contacts-item hidden-sm hidden-xs">
                                <div class="title">
                                    <span class="wicon-iconmonstr-phone-thin"></span> Give us a call
                                </div>
                                <div class="content">+447897049758</div>
                            </div>
                            <div class="header-contacts-item">
                                <div class="title">
                                    <span class="wicon-iconmonstr-location-pin-thin"></span> Windsor, CT
                                    06095
                                </div>
                                <div class="content">11 Pilgrim St, London, UK</div>
                            </div>
                        </div>
                        <!-- Contacts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main bar end -->
    <!-- Menu bar start -->
    <div id="sticked-bar" class="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 menu-bar-content">
                    <!-- Memu start -->
                    <button data-pushbar-target="left" class="hidden-lg">
                        <i class="fa fa-bars"></i>
                    </button>
                    <nav id="site-menu" class="site-menu hidden-sm hidden-xs hidden-md">
                        <ul>
                            <li class="active">
                                <a href="{{ url('/')}}">home</a>
                            </li>
                            <li>
                                <a href="#">the company</a>
                                <ul>
                                    <li>
                                        <a href="{{ url('about')}}">About Us</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ url('faq')}}">faq</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">services</a>
                                <ul>
                                    <li>
                                        <a href="{{ url('cryptocurrency')}}">Cryptocurrency Investment</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('forex')}}">Forex Investment</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('stock')}}">Stock Investment</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('realEstate')}}">Real Estate Investment</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('strategy')}}">Strategy</a>
                            </li>
                            <li>
                                <a href="#">Investor</a>
                                <ul>
                                    @guest
                                        <li>
                                            <a href="{{ url('login')}}">Login</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('register')}}">Register</a>
                                        </li>
                                    @endguest
                                    @auth
                                        <li>
                                            <a href="{{ url('dashboard')}}">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout
                                            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            </a>
                                        </li>
                                    @endauth
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- Memu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Menu bar end -->
</header>
<!-- Header end -->