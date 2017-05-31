<ul class="nav sidebar-nav">

    <li>
        <h4>
            <i class="fa fa-cogs" aria-hidden="true"></i> Aplicatii
        </h4>
    </li>

    <li @if (Request::is('apps/vehicle*')) class="active" @endif>
        <a href="{{route('apps.vehicle.index')}}">Certificate de inregistrare</a>
    </li>
</ul>
