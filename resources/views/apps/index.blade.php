@extends('apps.layout')
@php
@endphp

@section('content')
@if ($apps && $apps->count())
@foreach ($apps as $app)
<div class="flex flex-wrap">
    <div class="flex flex-col bg-white m-2 px-20 py-6 border rounded-sm border-gray-400 shadow hover:border-indigo-500 hover:border-indigo-100 hover:shadow-md transition-4">
        <div class="flex items-center justify-center mx-auto w-20 h-20 my-2 p-4 border-2 border-yellow-600 bg-yellow-500 shadow-md rounded-full">
            <svg aria-hidden="true" focusable="false" class="w-12 h-12 fill-current text-gray-200" viewBox="0 0 640 512">
                <path fill="currentColor" d="M512.9 192c-14.9-.1-29.1 2.3-42.4 6.9L437.6 144H520c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24h-45.3c-6.8 0-13.3 2.9-17.8 7.9l-37.5 41.7-22.8-38C392.2 68.4 384.4 64 376 64h-80c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h66.4l19.2 32H227.9c-17.7-23.1-44.9-40-99.9-40H72.5C59 104 47.7 115 48 128.5c.2 13 10.9 23.5 24 23.5h56c24.5 0 38.7 10.9 47.8 24.8l-11.3 20.5c-13-3.9-26.9-5.7-41.3-5.2C55.9 194.5 1.6 249.6 0 317c-1.6 72.1 56.3 131 128 131 59.6 0 109.7-40.8 124-96h84.2c13.7 0 24.6-11.4 24-25.1-2.1-47.1 17.5-93.7 56.2-125l12.5 20.8c-27.6 23.7-45.1 58.9-44.8 98.2.5 69.6 57.2 126.5 126.8 127.1 71.6.7 129.8-57.5 129.2-129.1-.7-69.6-57.6-126.4-127.2-126.9zM128 400c-44.1 0-80-35.9-80-80s35.9-80 80-80c4.2 0 8.4.3 12.5 1L99 316.4c-8.8 16 2.8 35.6 21 35.6h81.3c-12.4 28.2-40.6 48-73.3 48zm463.9-75.6c-2.2 40.6-35 73.4-75.5 75.5-46.1 2.5-84.4-34.3-84.4-79.9 0-21.4 8.4-40.8 22.1-55.1l49.4 82.4c4.5 7.6 14.4 10 22 5.5l13.7-8.2c7.6-4.5 10-14.4 5.5-22l-48.6-80.9c5.2-1.1 10.5-1.6 15.9-1.6 45.6-.1 82.3 38.2 79.9 84.3z"></path>
            </svg>
        </div>
        <h4 class="my-2 text-gray-700 text-xl font-normal">{{ $app->name }}</h4>
        <div class="flex text-center my-2 justify-center">
            <a class="cursor-pointer" href="{{ route('apps.vehicles')}}">
                <button class="text-indigo-500 font-medium border-2 border-indigo-500 px-8 py-2 shadow-md rounded-full hover:text-gray-200 hover:bg-indigo-500 hover:border-indigo-700 focus:outline-none transition-4">Deschide</button>
            </a>
        </div>
    </div>

</div>
@endforeach
@else
Nu aveti aplicatii
@endif
@endsection