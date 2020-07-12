@extends('layouts.apps.default')

@section('page-name')
Aplicații
@endsection

@section('last-link')
Aplicații
@endsection

@section('content')
@if ($apps && $apps->count())
@foreach ($apps as $app)
<div class="flex flex-wrap">
    <div class="flex flex-col bg-white m-2 px-12 py-6 border rounded-lg border-gray-400 shadow hover:border-orange-500 hover:shadow-lg transition duration-300 opacity-75">
        <div class="flex items-center justify-center mx-auto w-24 h-24 my-2 p-4 border border-orange-200 bg-orange-200 shadow-md rounded-full">
            <svg class="w-12 h-12 fill-current text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <g class="fa-group">
                    <path class="fa-secondary" fill="currentColor" d="M528 336a88 88 0 1 0 88 88 88 88 0 0 0-88-88zm0 112a24 24 0 1 1 24-24 24 24 0 0 1-24 24zM330 292h-7.14A152.15 152.15 0 0 0 311 263.28l5.06-5.06a22 22 0 0 0 0-31.11L284.9 196a22 22 0 0 0-31.11 0l-5.06 5.06A152.15 152.15 0 0 0 220 189.15V182a22 22 0 0 0-22-22h-44a22 22 0 0 0-22 22v7.14a152.43 152.43 0 0 0-28.73 11.91l-5-5.05a22 22 0 0 0-31.11 0L36 227.1a22 22 0 0 0 0 31.11l5.06 5.06A152.15 152.15 0 0 0 29.15 292H22a22 22 0 0 0-22 22v44a22 22 0 0 0 22 22h7.14a152.43 152.43 0 0 0 11.91 28.73l-5 5a22 22 0 0 0 0 31.11L67.1 476a22 22 0 0 0 31.11 0l5.06-5.06A152.15 152.15 0 0 0 132 482.85V490a22 22 0 0 0 22 22h44a22 22 0 0 0 22-22v-7.14A152.15 152.15 0 0 0 248.72 471l5.06 5.06a22 22 0 0 0 31.11 0L316 444.9a22 22 0 0 0 0-31.11l-5.06-5.06A152.15 152.15 0 0 0 322.85 380H330a22 22 0 0 0 22-22v-44a22 22 0 0 0-22-22zM176 416a80 80 0 1 1 80-80 80 80 0 0 1-80 80z" opacity="0.4"></path>
                    <path class="fa-primary" fill="currentColor" d="M640 192v50.76a32 32 0 0 1-9.37 22.63l-50.82 50.81A118.61 118.61 0 0 0 528 304c-39.14 0-73.55 19-95.46 48H352v-38a22 22 0 0 0-22-22h-7.14A152.24 152.24 0 0 0 311 263.27l5.06-5.06a22 22 0 0 0 0-31.11L284.9 196a22 22 0 0 0-31.11 0l-5.06 5.06A151.54 151.54 0 0 0 220 189.14V182a22 22 0 0 0-22-22h110l-41.11-96H160v96h-6a22 22 0 0 0-22 22v7.14A152.15 152.15 0 0 0 103.28 201l-5.06-5a22.57 22.57 0 0 0-2.22-1.93V48a48.05 48.05 0 0 1 48-48h133.45a47.91 47.91 0 0 1 44.13 29.14L377.67 160H480v-40.2a128.16 128.16 0 0 1 29.5-81.72 16.28 16.28 0 0 1 24.7-.78l21.63 24.17c4.87 5.43 5.74 13.69 1.32 19.49A64.07 64.07 0 0 0 544 119.8V160h64a32 32 0 0 1 32 32z"></path>
                </g>
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
Nu aveti aplicații disponibile!
@endif
@endsection