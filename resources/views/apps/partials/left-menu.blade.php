<ul class="nav sidebar-nav">

  <li>
    <h4>
      <i class="fa fa-cogs" aria-hidden="true"></i> Aplicatii
    </h4>
  </li>

  <li @if (Request::is('myapps/rc*')) class="active" @endif>
    <a href="{{route('myapps.rc.index')}}">Certificate de inregistrare</a>
  </li>

  <li>
    <a href="{{route('myapps.rc.index')}}">Certificate de producator</a>
  </li>

  <li>
    <a href="{{route('myapps.rc.index')}}">Registru intrare iesire</a>
  </li>
  
</ul>
