@extends('apps.layout')

@section('sidebar')
    @include('apps.partials.left-menu')
@endsection

@section('main-wrapper')
        <div class="col-md-8 col-md-offset-2">
            @include('../../flash.message')

            @include('apps.vehicles.partials.forms._formAddVehicleCertificate')
        </div>
@endsection

@section('scripts')
    <script type="text/javascript">

    $(document).ready(function(){

        // Initializare tooltip
        $('body').tooltip({selector: '[data-toggle="tooltip"]'})
    })

    </script>
@endsection
