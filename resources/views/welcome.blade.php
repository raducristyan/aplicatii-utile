@extends('layouts.master')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-12">
                <img class="logo_img" src="/img/@logo.png" alt="Aplicatii utile" />
                <h1 class="logo_text">Aplicații Utile</h1>
                <p>”Împreună facem lucrurile mai simple”</p>
                <p><a class="btn btn-primary btn-lg" href="{{url('login')}}" role="button">Afla mai multe...</a></p>
            </div>
        </div>
    </div>
@endsection
