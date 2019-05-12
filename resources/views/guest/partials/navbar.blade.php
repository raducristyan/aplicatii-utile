<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topheader fixed-top">
    <div class="fix-width">
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <!-- Logo will be here -->
            <a class="navbar-brand" href="/">
                <img class="navbar-logo" src="./assets/images/icon/logo.svg" alt="Aplicații utile">
            </a>
            <!-- This is the navigation menu -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto stylish-nav">
                    <li class="nav-item"> <a class="btn btn-rounded btn-outline-success text-white" href="{{ route('login') }}">Log in</a> </li>
                </ul>
            </div>
        </nav>
    </div>
</header>