@extends('apps.layout')

@section('main-wrapper')
    @if(isset($institution))
        <div class="row col-md-10 offset-md-1 col-12 p-4">
            @foreach ($institution[0]->applications as $app)
                <div class="col-sm-6 col-lg-4">
                    <div class="card app-card my-1">
                        <div class="card-block text-center">
                            <i class="fa fa-motorcycle fa-5x"></i>
                        </div>
                        <div class="app-divider mx-2"></div>
                        <div class="card-block">
                            <h4 class="card-title">{{$app->name}}</h4>
                            <p class="card-text">{{$app->description}}</p>
                            <a href="{{route('apps.vehicle.index')}}" class="btn btn-primary">Deschide</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="row col-md-10 offset-md-1 col-12 p-4 justify-content-center">
            <h2 class="">Nu sunt aplicatii disponibile.</h2>
        </div>
    @endif
@endsection