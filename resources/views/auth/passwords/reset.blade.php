@extends('layouts.master')

<!-- Main Content -->
@section('wrapper')
@component('components.actions')
@slot('title')
Resetare parolă
@endslot
<form class="" id="loginform" method="POST" action="{{ route('password.update') }}">
    {{ csrf_field() }}
    <div class="flex items-center mt-4">
        <label for="email" class="mr-2">
            @include('partials.svg.envelope-solid', ['class' => 'w-6 h-6 fill-current text-gray-200'])
        </label>

        <input id="email" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" name="email" type="email" required="required" placeholder="Introduceți adresa de email" value="{{ old('email')}}">
    </div>
    @error('email')
    <div class="w-full text-sm font-normal text-orange-600 mt-1">
        {{ $errors->first('email') }}
    </div>
    @enderror
    <div class="flex items-center mt-4">
        <label for="password" class="mr-2">
            <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zM264 392c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48zm32-168H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path>
            </svg>
        </label>
        <input id="password" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" type="password" name="password" required="required" placeholder="Introduceți noua parolă">
    </div>
    @error('password')
    <div class="block text-sm font-normal text-orange-600 w-full mt-1">
        {{ $errors->first('password') }}
    </div>
    @enderror
    <div class="flex items-center mt-4 w-full">
        <label for="password_confirmation" class="mr-2">
            <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M224 412c-15.5 0-28-12.5-28-28v-64c0-15.5 12.5-28 28-28s28 12.5 28 28v64c0 15.5-12.5 28-28 28zm224-172v224c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V240c0-26.5 21.5-48 48-48h32v-48C80 64.5 144.8-.2 224.4 0 304 .2 368 65.8 368 145.4V192h32c26.5 0 48 21.5 48 48zm-320-48h192v-48c0-52.9-43.1-96-96-96s-96 43.1-96 96v48zm272 48H48v224h352V240z"></path>
            </svg>
        </label>
        <input id="password_confirmation" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" type="password" name="password_confirmation" required="required" placeholder="Confirmați parola">
    </div>
    <div class="flex items-center my-12 w-2/3 mx-auto">
        <button class="w-full border-2 border-orange-500  py-3 rounded-full text-indigo-700 font-bold text-lg focus:outline-none focus:shadow-outline hover:text-gray-200 hover:bg-indigo-500 hover:border-indigo-700 hover:shadow-lg transition duration-500" type="submit">Resetează parola</button>
    </div>
</form>
@endcomponent
<a class=" bottom-0 right-0 mr-6 mb-6 fixed" href="https://www.freepik.com/free-photos-vectors/background">Background vector created by freepik - www.freepik.com</a>
@endsection