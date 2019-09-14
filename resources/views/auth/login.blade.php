@extends('layout.master')

<!-- Main Content -->
@section('wrapper')
@component('components.actions')
@slot('title')
Autentificare
@endslot
<form class="" id="loginform" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="flex flex-wrap items-center mt-6">
        <div class="flex w-full items-center">
            <label for="email" class="mr-2">
                <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                </svg>
            </label>

            <input id="email" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" name="email" type="email" required="required" placeholder="Introduceți adresa de email" value="{{ old('email')}}">
        </div>
        @if ($errors->has('email'))
        <div class="w-full text-sm font-normal text-orange-600 mt-1">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>
    <div class="flex items-center mt-6">
        <label for="password" class="mr-2">
            <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zM264 392c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48zm32-168H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path>
            </svg>
        </label>
        <input id="password" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" type="password" name="password" required="required" placeholder="Introduceți parola">
    </div>
    <div class="flex items-center my-6 text-gray-200">
        <div class="w-full flex items-center justify-between">
            <div class="flex items-center">
                <label for="checkbox-remembter" class="relative cursor-pointer">
                    <input id="checkbox-remembter" type="checkbox" class="absolute w-0 h-0 top-0 left-0 opacity-0">
                    <span class="absolute top-0 mt-1 left-0 w-4 h-4 bg-gray-200 rounded-sm"></span>
                    <span class="ml-6">
                        Ține-mă autentificat
                    </span>
                </label>
            </div>
            <div>
                <a href="{{ route('password.request') }}" class="flex items-center">
                    <svg aria-hidden="true" focusable="false" class="w-4 h-4 fill-current text-gray-200" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M423.5 0C339.5.3 272 69.5 272 153.5V224H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48h-48v-71.1c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v80c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-80C576 68 507.5-.3 423.5 0zM264 392c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48z"></path>
                    </svg>
                    <span class="ml-2">
                        Ai uitat parola?
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="flex items-center my-12">
        <div class="w-1/3 mx-auto">
            <button class="w-full border-2 border-orange-500  py-3 rounded-full text-indigo-700 font-bold text-lg focus:outline-none focus:shadow-outline hover:text-gray-200 hover:bg-indigo-500 hover:border-indigo-700 hover:shadow-lg transition-4" type="submit">Login</button>
        </div>
    </div>
    <div class="flex items-center mt-6">
        <div class="flex items-center mx-auto">
            <span class="text-gray-200">Nu ai cont?</span>
            <a href="{{ route('register') }}" class="ml-2 flex items-center">
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 fill-current text-gray-200 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path fill="currentColor" d="M224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96zm89.6 256c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zm224-248h-72v-72c0-8.8-7.2-16-16-16h-16c-8.8 0-16 7.2-16 16v72h-72c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h72v72c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16v-72h72c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16z"></path>
                </svg>
                <span class="font-semibold text-gray-200">
                    Crează cont
                </span>
            </a>
        </div>
    </div>
</form>
@endcomponent
@endsection