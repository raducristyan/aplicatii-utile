<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon -->
                <b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="/assets/images/icon/logo-hexagon.svg" alt="au" class="dark-logo logo-icon" />
                    <!-- Light Logo icon -->
                    <img src="/assets/images/icon/logo-hexagon.svg" alt="au" class="light-logo logo-icon" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span>
                <!-- dark Logo text -->
                <img src="/assets/images/icon/logo-text.svg" alt="aplicatii utile" class="dark-logo logo-text" />
                <!-- Light Logo text -->    
                <img src="/assets/images/icon/logo-text.svg" class="light-logo logo-text" alt="aplicatii utile" /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0 ">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fal fa-bars"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fal fa-arrow-circle-left"></i></a> </li>
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item hidden-sm-down">
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Caută..."> <a class="srh-btn"><i class="fal fa-search"></i></a> </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/users/user-male.png" alt="user" class="profile-pic"></a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        <ul class="dropdown-user">
                            <li>
                                <div class="row dw-user-box">
                                    <div class="u-img col-5">
                                        <img src="{{ asset('assets/images/users/user-male-80px.jpg') }}" alt="user">
                                    </div>
                                    <div class="u-text col-7">
                                        <h4>{{ auth()->user()->full_name }}</h4>
                                        <p class="text-muted">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fal fa-user"></i> Profil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fal fa-envelope"></i> Mesaje</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fal fa-cog"></i> Setări cont</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a class="logout" @click='logout'>
                            <i class="fal fa-power-off"></i>
                            Ieșire
                            </a></li>
                            <!-- <form id="logout-form" 
                                action="{{ route('logout') }}" 
                                method="POST" 
                                style="display: none;">
                                {{ csrf_field() }}
                            </form> -->
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->