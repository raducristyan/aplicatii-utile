<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" @if (Auth::check()) href="/home" @else href="/" @endif>
        <img src="/img/logo_brand.png" alt="Aplicații utile" class="logo_brand">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li @if (Request::is('/') || Request::is('home')) class="active" @endif>
          <a @if (Auth::guest()) href="{{route('welcome')}}" @else href="{{route('home')}}" @endif >
            <i class="fa fa-home fa-lg"></i><span > Acasă</span>
          </a>
        </li>
        <li @if (Request::is('apps*') || Request::is('myapps*')) class="active" @endif >
          <a @if (Auth::guest()) href="{{route('apps')}}" @else href="{{route('myapps')}}" @endif>
            <i class="fa fa-cogs fa-lg"></i><span > Aplicații</span>
          </a>
        </li>
        <li @if (Request::is('contact')) class="active" @endif>
          <a href="{{route('contact')}}">
            <i class="fa fa-envelope fa-lg"></i><span > Contact</span>
          </a>
        </li>
        <li @if (Request::is('help')) class="active" @endif>
          <a href="{{route('help')}}" >
            <i class="fa fa-question fa-lg"></i><span > Ajutor</span>
          </a>
        </li>
      </ul>
      @if (Auth::check())
      <form action="#" class="navbar-form navbar-left" role="search">
         <div class="input-group">
          <input type="text" class="form-control" placeholder="Caută...">
          <div class="input-group-btn">
            <button class="btn btn-default" type="button">
              <i class="fa fa-search fa-lg"></i>
            </button>
          </div>
        </div><!-- /input-group -->
      </form>
      @endif
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li >
            <a href="/register" >
              <i class="fa fa-user-plus fa-lg"></i> <span > Creează cont</span>
            </a>
          </li>
          <li >
            <a href="/login" >
              <i class="fa fa-user-secret fa-lg"></i><span > Autentificare</span>
            </a>
          </li>
        @else
          <li class="dropdown" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" v>
              <i class="fa fa-user fa-lg"></i> {{Auth::user()->first_name.' '.Auth::user()->last_name}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li ><a href="/setings" ><i class="fa fa-cog"></i><span> Setări</span></a></li>
              <li role="separator" class="divider" ></li>
              <li ><a href="/logout"><i class="fa fa-power-off" ></i><span> Ieșire</span></a></li>
            </ul>
          </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
