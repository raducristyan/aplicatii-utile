@extends('apps.layout')

@section('content')
<div class="w-full h-screen bg-white">
    <div class="py-2 px-2">
        <div class="col-8">
            <h4>
                Certificate de înregistrare
                <small><i class="fal fa-angle-double-right" aria-hidden="true"></i> vehicule neînmatriculabile</small>
            </h4>
        </div>
        <div class="col-4 text-right">
            <a href="{{route('apps.vehicles.create')}}" class="btn btn-primary btn-sm">
                <i class="fal fa-plus"></i> Adaugă certificat
            </a>
        </div>
    </div>

    @if (!isset($vehicles) || count($vehicles) == 0)
    <div class="row justify-content-center">
        <div class="col-md-10 py-5 text-center">
            <h1>Nu aveti certificate de inregistrare</h1>
        </div>
    </div>
</div>
@else
@include('apps.vehicles.partials._vehiclesCertificates')
@endif
@endsection