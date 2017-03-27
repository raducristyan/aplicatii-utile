@extends('apps.layout')

@section('sidebar')
    @include('apps.partials.left-menu')
@endsection

@section('main')

    <div class="row v-align">

        <div class="col-md-6 col-sm-6">
            <h3>
                Certificate de înregistrare
                <small><i class="fa fa-angle-double-right" aria-hidden="true"></i> vehicule neînmatriculabile</small>
            </h3>
        </div>

        <div class="col-md-6 col-sm-6 text-right">
            <a href="{{route('myapps.vehicles.create')}}" class="btn btn-success btn-md">
                <i class="fa fa-plus"></i> Adaugă certificat
            </a>
        </div>

    </div>

    @include('../../partials.success')
    @include('../../partials.errors')

    @if (!isset($v) || count($v) == 0)

        <div class="container main-container">
            <div class="no-content">
                <h1>Nu aveti certificate de inregistrare</h1>
            </div>
        </div>

    @else
        @include('apps.vehicles.partials._registrationCertificates')
    @endif

    $file = base_path()."/database/seeds/counties.csv";

    if (($handle = fopen($file, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            for ($c=0; $c < $num; $c++) {
                echo $data[$c][0]."-".$data[$c][1];
                ]);
            }
        }
        fclose($handle);
    }


@endsection
