
        <!-- Top Bar Start -->
        <div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown"><a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false"><span class="mx-3 nav-user-name hidden-sm">Ayo stephen</span>
                    <div class="avatar-box thumb-sm align-self-center mr-2"><span class="avatar-title bg-purple rounded-circle"><i
                                class="fas fa-user"></i></span></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i>
                        Ayo stephen</a>
                    <a class="dropdown-item" href="#"><i data-feather="mail" class="align-self-center icon-xs icon-dual mr-1"></i>
                        loshonine@gmail.com</a>
                    <a class="dropdown-item" href="/change-password"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i>Change Password</a>
                    <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i>
                        Logout</a>
                    <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <!--end topbar-nav-->
        <ul class="list-unstyled topbar-nav mb-0">
            <li><button class="nav-link button-menu-mobile"><i data-feather="menu" class="align-self-center topbar-icon"></i></button></li>
        </ul>
    </nav><!-- end navbar-->
</div><!-- Top Bar End -->