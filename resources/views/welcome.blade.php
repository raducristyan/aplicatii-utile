@extends('layouts.master')

@section('content')
<div class="jumbotron">
  <div class="container">
    <div class="row col-md-7">
      <img class="logo_img" src="/img/@logo.png" alt="Aplicatii utile" />
      <h1 class="logo_text">Aplicații Utile</h1>
      <p>”Împreună facem lucrurile mai simple”</p>
      <p><a class="btn btn-primary btn-lg" href="{{url('login')}}" role="button">Afla mai multe...</a></p>
    </div>

  </div>
  <div class="col-md-5">

  </div>
</div>
@endsection
