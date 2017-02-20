<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" @if (Auth::check()) href="{{route('dashboard')}}" @else href="/" @endif>
                <img src="/img/logo_brand.png" alt="Aplicații utile" class="logo_brand">
            </a>
        </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li @if (Request::is('/') || Request::is('dashboard')) class="active" @endif>
                    <a @if (Auth::guest()) href="{{route('welcome')}}" @else href="{{route('dashboard')}}" @endif >
                        <i class="fa fa-home fa-lg"></i><span > Acasă</span>
                    </a>
                </li>
                <li @if (Request::is('apps*') || Request::is('myapps*')) class="active" @endif >
                    <a @if (Auth::guest()) href="{{route('apps')}}" @else href="{{route('myapps')}}" @endif>
                        <i class="fa fa-cogs fa-lg"></i><span > Aplicații</span>
                    </a>
                </li>
                <li @if (Request::is('contact.index')) class="active" @endif>
                        <a href="{{route('contact.index')}}">
                            <i class="fa fa-envelope fa-lg"></i><span > Contact</span>
                        </a>
                    </li>
                    <li @if (Request::is('help')) class="active" @endif>
                        <a href="{{route('help')}}" >
                            <i class="fa fa-question fa-lg"></i><span > Ajutor</span>
                        </a>
                    </li>
                </ul>

                <div class="nav navbar-nav navbar-right">
                    <div class="container-fluid">
                        @if (Auth::guest())
                            <a href="/login">
                                <button type="button" class="btn navbar-btn btn-sm btn-outline">
                                        <i class="fa fa-user-secret fa-lg"></i> <span> Autentificare</span>
                                </button>
                            </a>
                            <a href="/register">
                                <button type="button" class="btn navbar-btn btn-sm btn-orange">
                                    <i class="fa fa-user-plus fa-lg"></i><span> Creează cont</span>
                                </button>
                            </a>
                        @else
                            <a href="#" class="btn navbar-btn btn-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user fa-lg"></i> {{Auth::user()->full_name}} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li >
                                    <a href="/setings" >
                                        <i class="fa fa-cog"></i><span> Setări</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider" ></li>
                                <li>
                                    <a href="{{url('/logout')}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off" ></i><span> Ieșire</span>
                                    </a>
                                </li>
                                <form id="logout-form"
                                action="{{ url('/logout') }}"
                                method="POST"
                                style="display: none;">
                                {{ csrf_field() }}
                                </form>
                            </ul>
                        @endif
                    </div>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
