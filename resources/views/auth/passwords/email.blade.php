@extends('layouts.master')

<!-- Main Content -->
@section('wrapper')
@component('components.actions')
@slot('title')
Recuperare parolă
@endslot
<form class="" id="loginform" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}
    <div class="flex flex-wrap items-center mt-6">
        <div class="flex items-center w-full">
            <label for="email" class="mr-2">
                <svg aria-hidden="true" focusable="false" class="w-6 h-6 fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                </svg>
            </label>

            <input id="email" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" name="email" type="email" required="required" placeholder="Introduceți adresa de email" value="{{ old('email')}}">
        </div>
        @error('email')
        <div class="w-full text-sm font-normal text-orange-600 mt-1">
            {{ $errors->first('email') }}
        </div>
        @enderror
    </div>
    <div class="flex items-center my-12">
        <div class="w-2/3 mx-auto outline-none">
            <button class="w-full border-2 border-orange-500  py-3 rounded-full text-indigo-700 font-bold text-lg focus:outline-none focus:shadow-outline hover:text-gray-200 hover:bg-indigo-500 hover:border-indigo-700 hover:shadow-lg transition duration-500" type="submit">Trimite linkul</button>
        </div>
    </div>
</form>
@endcomponent
@endsection