@extends('apps.layout')

{{-- @section('sidebar')
    @include('apps.partials.left-menu')
@endsection --}}
{{-- dd('$vehicles'); --}}
@section('main-wrapper')
    <div class="row py-2 px-2 main-bar">
        <div class="col-md-6 col-sm-6">
            <h4>
                Certificate de înregistrare
                <small><i class="fa fa-angle-double-right" aria-hidden="true"></i> vehicule neînmatriculabile</small>
            </h4>
        </div>
        <div class="col-md-6 col-sm-6 text-right">
            <a href="" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Adaugă certificat
            </a>
        </div>
    </div>
    @include('../partials.message')
    @if (!isset($vehicles) || count($vehicles) == 0)
        <div class="main-container">
            <div class="no-content">
                <h1>Nu aveti certificate de inregistrare</h1>
            </div>
        </div>
    @else
        @include('apps.vehicles.partials._vehiclesCertificates')
    @endif
@endsection
