@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-3 sidebar">
                @yield('sidebar')
            </div>

            <div class="col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3 main">
                @yield('main')
            </div>
        </div>
    </div>


@endsection
