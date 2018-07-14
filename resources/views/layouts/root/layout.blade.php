@extends('../layouts.master')

@section('wrapper')
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="asstes/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                    <!-- dark Logo text -->
                    <img src="asstes/images/logo-text.png" alt="homepage" class="dark-logo" />
                    <!-- Light Logo text -->    
                    <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
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
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./assets/images/users/2.jpg" alt="user" class="profile-pic"></a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="row dw-user-box">
                                        <div class="u-img col-5"><img src="assets/images/users/3.jpg" alt="user"></div>
                                        <div class="u-text col-7">
                                            <h4>{{ auth()->user()->full_name }}</h4>
                                            <p class="text-muted">{{ auth()->user()->email }}</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Profil</a>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fal fa-user"></i> Profil</a></li>
                                <li><a href="#"><i class="fal fa-envelope"></i> Mesaje</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fal fa-cog"></i> Setări aplicație</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a class="logout" href="{{ route('logout') }}">
                                <i class="fal fa-power-off"></i>
                                Ieșire
                                </a></li>
                                <form id="logout-form" 
                                    action="{{ route('logout') }}" 
                                    method="POST" 
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
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
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile">
                <!-- User profile image -->
                <div class="profile-img"> <img src="./images/users/shield.png" alt="user" /> </div>
                <!-- User profile text-->
                <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Nume utilizator <span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <a href="#" class="dropdown-item"><i class="fal fa-user"></i> Profil</a>
                        <a href="#" class="dropdown-item"><i class="fal fa-envelope"></i> Mesaje</a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="fal fa-cog"></i> Setări aplicații</a>
                        <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item logout"><i class="fal fa-power-off"></i> Ieșire</a>
                    </div>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">CONT</li>
                    <li class="{{ Route::is('/root/dashboard') ? 'active' : '' }}">
                        <a href="{{ url('/dashboard') }}" aria-expanded="false"><i class="fal fa-cogs"></i><span class="hide-menu"> Dashboard</span></a>
                    </li>
                    <li class="{{ Route::is('/root/apps') ? 'active' : '' }}">
                        <a href="{{ url('/apps') }}" aria-expanded="false"><i class="fal fa-bullseye"></i><span class="hide-menu"> Aplicații</span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="fal fa-cog"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Email"><i class="fal fa-envelope"></i></a>
            <!-- item-->
            <a href="" class="link logout" data-toggle="tooltip" title="Logout"><i class="fal fa-power-off"></i></a>
        </div>
        <!-- End Bottom points-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Acasă</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="fal fa-cog text-white"></i></button>
                    <button class="btn pull-right hidden-sm-down btn-success"><i class="fal fa-plus-circle"></i> Crează</button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            @yield('main-wrapper')
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Interfață <span><i class="fal fa-times right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>Meniu stânga luminos</b></li>
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>Meniu stânga întunecat</b></li>
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2017 Radu Cristian BURDUHOS
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>

    @push('scripts')
        <script>
            $('body').addClass('fix-header card-no-border');
            $('.logout').on('click', function(e){
                e.preventDefault();
                $('#logout-form').submit();
            });
        </script>
    @endpush
@endsection