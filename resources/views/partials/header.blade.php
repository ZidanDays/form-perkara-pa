<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">

    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#!" class="b-brand">
            <!-- ======== Change your logo here ============ -->
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="logo">
            <img src="{{ asset('assets/images/logo-icon.png') }}" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" class="img-radius" alt="User-Profile-Image">
                            <span>Admin</span>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;" title="logout">
                                @csrf
                                <button type="submit" class="dud-logout" style="background: none; border: none; cursor: pointer;">
                                    <i class="feather icon-log-out"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
</header>
<!-- [ Header ] end -->
