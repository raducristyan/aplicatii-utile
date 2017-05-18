@extends('layouts.master')

@section('content')
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center text-center">
                <img class="welcome-logo-img" src="/img/@logo.png" alt="Aplicatii utile" />
                <h1 class="logo_text">Aplicații Utile</h1>
                <p>”Împreună facem lucrurile mai simple”</p>
                <p><a class="btn btn-primary btn-lg" href="{{url('login')}}" role="button">Afla mai multe...</a></p>
            </div>
        </div>
    </div>
@endsection
