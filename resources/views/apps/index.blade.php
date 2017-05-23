@extends('apps.layout')

@section('main-wrapper')
<div class="row col-md-10 offset-md-1 col-12 p-4">
    @if($institution)
    @for ($i=0; $i<3;$i++)
        @foreach ($institution as $inst)
            @foreach ($inst->applications as $app)
                <div class="col-sm-6 col-lg-4">
                    <div class="card app-card my-1">
                        <div class="card-block text-center">
                            <i class="fa fa-motorcycle fa-5x"></i>
                        </div>
                        <div class="app-divider mx-2"></div>
                        <div class="card-block">
                            <h4 class="card-title">{{$app->name}}</h4>
                            <p class="card-text">{{$app->description}}</p>
                            <a href="#" class="btn btn-primary">Deschide</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
        @endfor
    @else
        <p>Nu sunt aplicatii disponibile.</p>
    @endif
</div>
@endsection