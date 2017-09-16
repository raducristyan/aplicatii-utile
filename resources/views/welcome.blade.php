<!DOCTYPE html>
<html lang="ro">
    <head lang="ro">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta name="csrf-token" content="{{ Session::token() }}">
        <title>Aplicatii utile</title>
        <!-- Bootstrap Core CSS -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/css/style-lp.css" rel="stylesheet">

        @stack('styles')
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

	<body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topheader">
                <div class="fix-width">
                    <nav class="navbar navbar-toggleable-md navbar-light">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <!-- Logo will be here -->
                        <a class="navbar-brand" href="index.html"><img src="images/favicon/favicon-32x32.png" alt="aplicații utile" /> <h2 class="d-inline"><strong>aplicatii</strong> utile</h2></a>
                        <!-- This is the navigation menu -->
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto stylish-nav">
                                <li class="nav-item"> <a class="nav-link" href="../Documentation/document.html" target="_blank">Documentație</a> </li>
                                <li class="nav-item"> <a class="m-t-5 btn btn-rounded btn-outline-success" href="{{ route('login') }}">Log in</a> </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="fix-width">
                        <div class="row justify-content-center banner-text">
                            <div class="col-md-10 m-b-20">
                                <h1>Aplicatii utile</h1>
                                <p class="subtext">
                                    <span class="font-medium">Toate aplicatiile de care ai nevoie, într-un singur loc. </span>
                                    <span class="font-medium text-info">Împreună facem lucrurile mai simple!</span>
                                </p>
                                <div class="down-btn"> 
                                    <a href="{{ route('register') }}" class="btn btn-rounded btn-info m-b-10">ÎNREGISTRARE</a> 
                                    <a href="{{ route('login') }}" class="btn btn-rounded btn-success m-b-10">AUTENTIFICARE</a> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="hero-banner m-t-30"> <img src="images/hero.jpg" class="img-responsive" alt="Monster admin template" /> </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    <footer class="footer row">
                    <div class="fix-width">
                        <div class="row">
                            <div class="col-lg-3 col-md-6"><img src="images/logo-light-icon.png" alt="logo" /> <img src="images/logo-light-text.png" alt="logo" />
                                <p class="m-t-30">
                                    <span class="text-white">Monstrous Admin</span> is premium quality admin dashboard template with flat design. It is fully responsive admin dashboard template built with Bootstrap Framework, HTML5 & CSS3, Media query. 
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <ul class="footer-link list-icons">
                                    <li><a href="../minimal/index.html"><i class="ti-angle-right"></i> Modern Dashboard</a></li>
                                    <li><a href="../minimal/index2.html"><i class="ti-angle-right"></i> Awesome Dashboad</a></li>
                                    <li><a href="../minimal/index3.html"><i class="ti-angle-right"></i> Classy Dashboad</a></li>
                                    <li><a href="../minimal/index4.html"><i class="ti-angle-right"></i> Analytical Dashboard</a></li>
                                    <li><a href="../minimal/index5.html"><i class="ti-angle-right"></i> Minimal Dashboard</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <ul class="footer-link list-icons">
                                    <li><a href="../minimal/widget-apps.html"><i class="ti-angle-right"></i> Widget Sections</a></li>
                                    <li><a href="../minimal/chart-chartist.html"><i class="ti-angle-right"></i> Chart Options</a></li>
                                    <li><a href="../minimal/form-layout.html"><i class="ti-angle-right"></i> Lots of Form Layouts</a></li>
                                    <li><a href="../minimal/table-data-table.html"><i class="ti-angle-right"></i> Data Table Options</a></li>
                                    <li><a href="../minimal/index.html"><i class="ti-angle-right"></i> Calendar Designs</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <ul class="footer-link list-icons">
                                    <li><a href="../minimal/app-email.html"><i class="ti-angle-right"></i> Inbox Layout</a></li>
                                    <li><a href="../minimal/pages-treeview.html"><i class="ti-angle-right"></i> Tree View Options</a></li>
                                    <li><a href="../minimal/ui-carousel.html"><i class="ti-angle-right"></i> Carousel Slider Option</a></li>
                                    <li><a href="../minimal/pages-gallery.html"><i class="ti-angle-right"></i> Gallery Option</a></li>
                                    <li><a href="../minimal/starter-kit.html"><i class="ti-angle-right"></i> Starter Pages</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 sub-footer">
                                <span>Copyright 2017. All Rights Reserved by <a class="text-white" href="#" target="_blank">Monstrous Admin</a></span>
                                <span class="pull-right">Design & Developed by <a class="text-white" href="https://wrappixel.com" target="_blank">WrapPixel</a></span>
                            </div>
                        </div>
                    </div>
                </footer>
                    <!-- ============================================================== -->
                    <!-- End footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Scripts -->
        <!-- ============================================================== -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/tether.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/vendor.js"></script>
        @stack('scripts')
        <script src="/js/custom.js"></script>
        {{-- <script src="js/app.js"></script> --}}
	</body>
</html>