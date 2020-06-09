@extends('apps.layout')
@php
@endphp

@section('page-name')
Aplicații
@endsection
@section('content')
@if ($apps && $apps->count())
@foreach ($apps as $app)
<div class="flex flex-wrap">
    <div class="flex flex-col bg-orange-300 m-2 px-12 py-6 border rounded-lg border-gray-400 shadow hover:border-orange-500 hover:shadow-md transition duration-300 opacity-75">
        <div class="flex items-center justify-center mx-auto w-24 h-24 my-2 p-4 bg-orange-200 shadow-md rounded-lg">
            <svg aria-hidden="true" focusable="false" class="w-12 h-12 fill-current text-indigo-400" viewBox="0 0 640 512">
                <path fill="currentColor" d="M512.9 192c-14.9-.1-29.1 2.3-42.4 6.9L437.6 144H520c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24h-45.3c-6.8 0-13.3 2.9-17.8 7.9l-37.5 41.7-22.8-38C392.2 68.4 384.4 64 376 64h-80c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h66.4l19.2 32H227.9c-17.7-23.1-44.9-40-99.9-40H72.5C59 104 47.7 115 48 128.5c.2 13 10.9 23.5 24 23.5h56c24.5 0 38.7 10.9 47.8 24.8l-11.3 20.5c-13-3.9-26.9-5.7-41.3-5.2C55.9 194.5 1.6 249.6 0 317c-1.6 72.1 56.3 131 128 131 59.6 0 109.7-40.8 124-96h84.2c13.7 0 24.6-11.4 24-25.1-2.1-47.1 17.5-93.7 56.2-125l12.5 20.8c-27.6 23.7-45.1 58.9-44.8 98.2.5 69.6 57.2 126.5 126.8 127.1 71.6.7 129.8-57.5 129.2-129.1-.7-69.6-57.6-126.4-127.2-126.9zM128 400c-44.1 0-80-35.9-80-80s35.9-80 80-80c4.2 0 8.4.3 12.5 1L99 316.4c-8.8 16 2.8 35.6 21 35.6h81.3c-12.4 28.2-40.6 48-73.3 48zm463.9-75.6c-2.2 40.6-35 73.4-75.5 75.5-46.1 2.5-84.4-34.3-84.4-79.9 0-21.4 8.4-40.8 22.1-55.1l49.4 82.4c4.5 7.6 14.4 10 22 5.5l13.7-8.2c7.6-4.5 10-14.4 5.5-22l-48.6-80.9c5.2-1.1 10.5-1.6 15.9-1.6 45.6-.1 82.3 38.2 79.9 84.3z"></path>
            </svg>
        </div>
        <h4 class="my-2 text-gray-700 text-xl font-normal">{{ $app->name }}</h4>
        <div class="flex text-center my-2 justify-center">
            <a class="cursor-pointer" href="{{ route( 'apps.'.$app->path )}}">
                <button class="text-indigo-500 font-medium border border-indigo-500 rounded-full hover:font-bold focus:outline-none">
                    <div class="inline-block mx-8 my-2">Deschide
                        <svg aria-hidden="true" focusable="false" class="inline-block w-5 h-5 fill-current p-b-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <g class="fa-group">
                                <path class="fa-secondary" fill="currentColor" d="M0 424V88a23.94 23.94 0 0 1 24-24h16a23.94 23.94 0 0 1 24 24v336a23.94 23.94 0 0 1-24 24H24a23.94 23.94 0 0 1-24-24z" opacity="0.4"></path>
                                <path class="fa-primary" fill="currentColor" d="M254.52 120.13l17-17.06a23.86 23.86 0 0 1 33.91 0L441 239a24 24 0 0 1 0 34L305.43 408.93a23.86 23.86 0 0 1-33.91 0l-17-17.06a24 24 0 0 1 0-34l65.61-65.81H120A24 24 0 0 1 96 268v-24.09a24 24 0 0 1 24-24.07h200.13L254.52 154a23.9 23.9 0 0 1 0-33.87z"></path>
                            </g>
                        </svg>
                    </div>
                </button>
            </a>
        </div>
    </div>

</div>
@endforeach
@else
Nu aveti aplicatii
@endif
@endsection