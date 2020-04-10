@extends('layout.master')

<!-- Main Content -->
@section('wrapper')
@component('components.actions')
@slot('title')
Înregistrare
@endslot
<form class="" id="loginform" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="flex flex-wrap items-center mt-4">
        <div class="flex items-center w-full">
            <label for="institution" class="mr-2">
                <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor" d="M48 160h480c8.84 0 16-7.16 16-16v-36.91c0-6.67-4.14-12.64-10.38-14.98L299.24 2.04C295.62.68 291.81 0 288 0s-7.62.68-11.24 2.04L42.38 92.11A16.001 16.001 0 0 0 32 107.09V144c0 8.84 7.16 16 16 16zM288 49.14L451.58 112H124.42L288 49.14zM560 464h-16v-64c0-17.67-16.37-32-36.57-32H480V192h-48v176h-64V192h-48v176h-64V192h-48v176h-64V192H96v176H68.57C48.37 368 32 382.33 32 400v64H16c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16h544c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16zm-64 0H80v-48h416v48z"></path>
                </svg>
            </label>

            <input id="institution" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('institution') ? ' border-orange-600' : 'border-purple-400' }}" name="institution" type="institution" required="required" placeholder="Denumirea instituției" value="{{ old('institution')}}">

        </div> @if ($errors->has('institution'))
        <div class="text-sm font-normal text-orange-600 w-full mt-1">
            {{ $errors->first('institution') }}
        </div>
        @endif
    </div>
    <div class="flex flex-wrap items-center mt-4">
        <div class="flex items-center w-full">
            <label for="cif" class="mr-2">
                <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M129.62 176h39.09c1.49-27.03 6.54-51.35 14.21-70.41-27.71 13.24-48.02 39.19-53.3 70.41zm0 32c5.29 31.22 25.59 57.17 53.3 70.41-7.68-19.06-12.72-43.38-14.21-70.41h-39.09zM224 286.69c7.69-7.45 20.77-34.42 23.43-78.69h-46.87c2.67 44.26 15.75 71.24 23.44 78.69zM200.57 176h46.87c-2.66-44.26-15.74-71.24-23.43-78.69-7.7 7.45-20.78 34.43-23.44 78.69zm64.51 102.41c27.71-13.24 48.02-39.19 53.3-70.41h-39.09c-1.49 27.03-6.53 51.35-14.21 70.41zM416 0H64C28.65 0 0 28.65 0 64v384c0 35.35 28.65 64 64 64h352c17.67 0 32-14.33 32-32V32c0-17.67-14.33-32-32-32zm-80 416H112c-8.8 0-16-7.2-16-16s7.2-16 16-16h224c8.8 0 16 7.2 16 16s-7.2 16-16 16zm-112-96c-70.69 0-128-57.31-128-128S153.31 64 224 64s128 57.31 128 128-57.31 128-128 128zm41.08-214.41c7.68 19.06 12.72 43.38 14.21 70.41h39.09c-5.28-31.22-25.59-57.17-53.3-70.41z"></path>
                </svg>
            </label>

            <input id="cif" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('cif') ? ' border-orange-600' : 'border-purple-400' }}" name="cif" type="text" required="required" placeholder="Codul fiscal" value="{{ old('cif')}}">
        </div>
        @if ($errors->has('cif'))
        <div class="text-sm font-normal text-orange-600 w-full mt-1">
            {{ $errors->first('cif') }}
        </div>
        @endif
    </div>
    <div class="flex flex-wrap items-center mt-4">
        <div class="flex items-center w-full">
            <label for="email" class="mr-2">
                <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                </svg>
            </label>

            <input id="email" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" name="email" type="email" required="required" placeholder="Introduceți adresa de email" value="{{ old('email')}}">
        </div>
        @if ($errors->has('email'))
        <div class="text-sm font-normal text-orange-600 w-full mt-1">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex items-center mt-4 w-full md:w-1/2">
            <label for="first_name" class="mr-2">
                <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path fill="currentColor" d="M336 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM144 32h96c8.8 0 16 7.2 16 16s-7.2 16-16 16h-96c-8.8 0-16-7.2-16-16s7.2-16 16-16zm48 128c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H102.4C90 416 80 407.4 80 396.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z"></path>
                </svg>
            </label>
            <input id="first_name" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" type="text" name="first_name" required="required" placeholder="Numele" value="{{ old('first_name')}}">
            @if ($errors->has('first_name'))
            <div class=" text-sm font-normal text-orange-600 mt-1">
                {{ $errors->first('first_name') }}
            </div>
            @endif
        </div>
        <div class="flex items-center mt-4 w-full md:w-1/2">
            <label for="last_name" class="md:ml-2 mr-2">
                <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path fill="currentColor" d="M336 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm0 464H48V48h288v416zM144 112h96c8.8 0 16-7.2 16-16s-7.2-16-16-16h-96c-8.8 0-16 7.2-16 16s7.2 16 16 16zm48 176c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm-89.6 128h179.2c12.4 0 22.4-8.6 22.4-19.2v-19.2c0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6v19.2c0 10.6 10 19.2 22.4 19.2z"></path>
                </svg>
            </label>
            <input id="last_name" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" type="text" name="last_name" required="required" placeholder="Prenumele" value="{{ old('last_name')}}">
            @if ($errors->has('last_name'))
            <div class=" text-sm font-normal text-orange-600 mt-1">
                {{ $errors->first('last_name') }}
            </div>
            @endif
        </div>
    </div>
    <div class="flex flex-wrap flex-col md:flex-row">
        <div class="flex flex-wrap items-center mt-4 w-full md:w-1/2">
            <div class="flex items-center w-full">
                <label for="password" class="mr-2">
                    <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zM264 392c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48zm32-168H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path>
                    </svg>
                </label>
                <input type="password" name="password" id="password" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" required="required" placeholder="Introduceți parola">
            </div>
        </div>
        <div class="flex items-center mt-4 w-full md:w-1/2">
            <label for="password_confirmation" class="md:ml-2 mr-2">
                <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M224 412c-15.5 0-28-12.5-28-28v-64c0-15.5 12.5-28 28-28s28 12.5 28 28v64c0 15.5-12.5 28-28 28zm224-172v224c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V240c0-26.5 21.5-48 48-48h32v-48C80 64.5 144.8-.2 224.4 0 304 .2 368 65.8 368 145.4V192h32c26.5 0 48 21.5 48 48zm-320-48h192v-48c0-52.9-43.1-96-96-96s-96 43.1-96 96v48zm272 48H48v224h352V240z"></path>
                </svg>
            </label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" required="required" placeholder="Confirmați parola">
        </div>
        @if ($errors->has('password'))
        <div class="text-sm font-normal text-orange-600 w-full mt-1">
            {{ $errors->first('password') }}
        </div>
        @endif

    </div>
    <div class="flex items-center my-6 text-gray-200">
        <div class="w-full flex items-center justify-between">
            <div class="flex items-center">
                <label for="checkbox-signup" class="relative cursor-pointer">
                    <input id="checkbox-signup" type="checkbox" class="absolute w-0 h-0 top-0 left-0 opacity-0">
                    <span class="absolute top-0 mt-1 left-0 w-4 h-4 bg-gray-200 rounded-sm"></span>
                    <span class="ml-6">
                        Sunt de acord cu <a href="#" class="text-orange-500 font-semibold hover:underline">Termenii și condițiile</a>
                    </span>
                </label>
            </div>

        </div>
    </div>
    <div class="flex items-center my-8">
        <div class="w-2/3 mx-auto">
            <button class="w-full border-2 border-orange-500  py-3 rounded-full text-indigo-700 font-bold text-lg focus:outline-none focus:shadow-outline hover:text-gray-200 hover:bg-indigo-500 hover:border-indigo-700 hover:shadow-lg transition-4" type="submit">Creează contul</button>
        </div>
    </div>
    <div class="flex items-center mt-6">
        <div class="flex mx-auto">
            <span class="mr-2 text-gray-200">
                Ai deja un cont?
            </span>
            <a href="{{ route('login') }}" class="flex items-center">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 fill-current text-gray-200" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M144 112v51.6H48c-26.5 0-48 21.5-48 48v88.6c0 26.5 21.5 48 48 48h96v51.6c0 42.6 51.7 64.2 81.9 33.9l144-143.9c18.7-18.7 18.7-49.1 0-67.9l-144-144C195.8 48 144 69.3 144 112zm192 144L192 400v-99.7H48v-88.6h144V112l144 144zm80 192h-84c-6.6 0-12-5.4-12-12v-24c0-6.6 5.4-12 12-12h84c26.5 0 48-21.5 48-48V160c0-26.5-21.5-48-48-48h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96z"></path>
                </svg>
                <span class="ml-2 text-gray-200 font-semibold">
                    Login
                </span>
            </a>
        </div>
    </div>
</form>
@endcomponent
@endsection