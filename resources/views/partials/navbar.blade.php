<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-purple align-middle py-0">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler navbar-toggler-right mt-1" type="button" data-toggle="collapse" data-target="#topNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" @if ( Auth::check() ) href="{{ route('admin.dashboard') }}" @else href="/" @endif>
        <img src="/img/logo_brand_hight50.png" alt="Aplicații utile" class="logo-brand">
    </a>

        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" @if ( Request::is('/') || Request::is('dashboard') ) class="active" @endif>
                <a class="nav-link" @if ( Auth::guest() ) href="{{ route('welcome') }}" @else href="{{ route('admin.dashboard') }}" @endif >
                    <i class="fa fa-home"></i><span > Acasă</span>
                </a>
            </li>
            <li class="nav-item" @if ( Request::is('apps*') || Request::is('myapps*') ) class="active" @endif >
                <a class="nav-link" @if ( Auth::guest() ) href="{{ route('apps') }}" @else href="{{route('myapps.all')}}" @endif>
                    <i class="fa fa-cogs"></i><span > Aplicații</span>
                </a>
            </li>
            <li class="nav-item" @if (Request::is('contact.index')) class="active" @endif>
                <a class="nav-link" href="{{ route('contact.index') }}">
                    <i class="fa fa-envelope"></i><span> Contact</span>
                </a>
            </li>
            <li class="nav-item" @if (Request::is('help')) class="active" @endif>
                <a class="nav-link" href="{{ route('help') }}" >
                    <i class="fa fa-question"></i><span > Ajutor</span>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav">
            @if (Auth::guest())
            <li class="nav-item mr-2 mb-md-1">
                <a class="btn btn-md btn-outline-danger btn-auth" href="/login">
                    <i class="fa fa-user-secret"></i>  <span>Autentificare</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-md btn-danger" href="{{ route('register') }}">
                    <i class="fa fa-user-plus"></i> <span>Creează cont</span>
                </a>
            </li>
            @else
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbar-dropdown-menu-right" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i> {{ Auth::user()->full_name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-menu-right">
                        <a class="dropdown-item" href="/settings" >
                            <i class="fa"></i><span> Setări</span>
                        </a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off" ></i><span> Ieșire</span>
                        </a>
                    <form id="logout-form"
                    action="{{ url('/logout') }}"
                    method="POST"
                    style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </div>
            </li>
            @endif
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
