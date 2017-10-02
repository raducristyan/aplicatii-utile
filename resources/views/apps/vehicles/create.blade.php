@extends('layouts.apps.layout')

@section('sidebar')
    @include('apps.partials.left-menu')
@endsection

@section('main-wrapper')
        <div class="main-wrapper">
            @include('../../flash.message')

            @include('apps.vehicles.partials.forms._formAddVehicleCertificate')
        </div>
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection
