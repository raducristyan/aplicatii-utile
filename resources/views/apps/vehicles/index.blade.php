@extends('layouts.apps.layout')

@section('sidebar')
    @include('apps.partials.left-menu')
@endsection

@section('main-wrapper')
    <div class="row py-2 px-2 main-bar">
        <div class="col-8">
            <h4>
                Certificate de înregistrare
                <small><i class="fa fa-angle-double-right" aria-hidden="true"></i> vehicule neînmatriculabile</small>
            </h4>
        </div>
        <div class="col-4 text-right">
            <a href="{{route('apps.vehicles.create')}}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Adaugă certificat
            </a>
        </div>
    </div>
    @include('../flash.message')
    @if (!isset($vehicles) || count($vehicles) == 0)
        <div class="row justify-content-center">
            <div class="col-10 offset-1 py-5">
                <h1>Nu aveti certificate de inregistrare</h1>
            </div>
        </div>
    @else
        @include('apps.vehicles.partials._vehiclesCertificates')
    @endif
@endsection
