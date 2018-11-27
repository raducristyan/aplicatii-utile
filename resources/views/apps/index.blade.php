@extends('apps.layout')

@section('page-wrapper')
    @if ($apps && $apps->count())
        @foreach ($apps as $app)
            <a href="{{ route('apps.vehicles')}}">
                <div class="col-lg-4 col-md-6">
                    <div class="card app-card">
                        <div class="card-body text-center">
                            <div class="app-logo">
                                <i class="fal fa-motorcycle fa-4x"></i>
                            </div>
                            <h4 class="card-title">{{ $app->name }}</h4>
                            <div class="app-separator"></div>
                            <div class="text-center py-2">
                                <button class="btn btn-primary">Încearcă</button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    @else
        Nu aveti aplicatii
    @endif
@endsection