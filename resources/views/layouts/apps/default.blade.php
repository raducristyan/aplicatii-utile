@extends('layouts.master')

@section('wrapper')

<div class="flex w-full flex-wrap justify-center">
    @include('partials.navbar')
    <div class="flex flex-col w-11/12 lg:w-10/12 pt-12 md:pt-24 pb-20">

        <div class="flex flex-col w-full">
            @include('partials.breadcrumb')
        </div>
        @yield('content')
    </div>
    @include('partials.footer')
</div>

@endsection