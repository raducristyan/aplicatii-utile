@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-2 col-sm-3 sidebar">
            @yield('sidebar')
        </div>

        <div class="col-md-10 offset-md-2 col-sm-9 offset-sm-3 main-wrapper">
            @yield('main-wrapper')
        </div>
    </div>
@endsection
