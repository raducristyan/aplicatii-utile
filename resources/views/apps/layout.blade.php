@extends('layout.master')

@section('wrapper')

<div class="flex w-full flex-wrap justify-center">
    @include('apps.partials.navbar')
    <div class="flex flex-wrap w-11/12 pt-12 md:pt-24 pb-20">

        <div class="flex flex-col w-full">
            @include('apps.partials.breadcrumb')
        </div>
        @yield('content')
    </div>
    @include('partials.footer')
</div>

@endsection