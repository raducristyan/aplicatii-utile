<nav class="sidebar">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <h5>
                <i class="fa fa-cogs" aria-hidden="true"></i> Aplicatii
            </h5>
        </li>
        <li class="nav-item" @if (Request::is('apps/vehicles*')) @endif>
            <a class="nav-link active" href="{{route('apps.vehicles.index')}}">Vehicule</a>
        </li>
    </ul>
</nav>
