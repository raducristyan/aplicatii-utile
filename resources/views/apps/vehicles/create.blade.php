@extends('apps.layout')

@section('sidebar')
    @include('apps.partials.left-menu')
@endsection

@section('main')
    <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
            @include('../../partials.success')
            @include('../../partials.errors')

            @include('apps.vehicles.partials.forms._formAddVehicleCertificate')
        </div>
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
