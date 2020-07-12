@extends('layouts.master')

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
                @include('partials.svg.landmark-regular', ['class' => 'w-6 h-6 fill-current text-gray-200'])
            </label>

            <input id="institution" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none transition duration-500 {{ $errors->has('institution') ? ' border-orange-600' : 'border-purple-400' }}" name="institution" type="institution" required="required" placeholder="Denumirea instituției" value="{{ old('institution')}}">

        </div>
        @error('institution')
        <div class="w-full text-sm font-normal text-orange-600 mt-1">
            {{ $errors->first('institution') }}
        </div>
        @enderror
    </div>
    <div class="flex flex-wrap items-center mt-4">
        <div class="flex items-center w-full">
            <label for="cif" class="mr-2">
                @include('partials.svg.passport-solid', ['class' => 'w-6 h-6 fill-current text-gray-200'])
            </label>

            <input id="cif" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none transition duration-500 {{ $errors->has('cif') ? ' border-orange-600' : 'border-purple-400' }}" name="cif" type="text" required="required" placeholder="Codul fiscal" value="{{ old('cif')}}">
        </div>
        @error('cif')
        <div class="w-full text-sm font-normal text-orange-600 mt-1">
            {{ $errors->first('cif') }}
        </div>
        @enderror
    </div>
    <div class="flex flex-wrap items-center mt-4">
        <div class="flex items-center w-full">
            <label for="email" class="mr-2">
                @include('partials.svg.envelope-solid', ['class' => 'w-6 h-6 fill-current text-gray-200'])
            </label>

            <input id="email" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none transition duration-500 {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" name="email" type="email" required="required" placeholder="Introduceți adresa de email" value="{{ old('email')}}">
        </div>
        @error('email')
        <div class="w-full text-sm font-normal text-orange-600 mt-1">
            {{ $errors->first('email') }}
        </div>
        @enderror
    </div>
    <div class="flex flex-col md:flex-row">
        <div class="flex items-center mt-4 w-full md:w-1/2">
            <label for="first_name" class="mr-2">
                @include('partials.svg.id-badge-solid', ['class' => 'w-6 h-6 fill-current text-gray-200'])
            </label>
            <input id="first_name" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none transition duration-500 {{ $errors->has('first_name') ? ' border-orange-600' : 'border-purple-400' }}" type="text" name="first_name" required="required" placeholder="Numele" value="{{ old('first_name')}}">
            @error('first_name')
            <div class="w-full text-sm font-normal text-orange-600 mt-1">
                {{ $errors->first('first_name') }}
            </div>
            @enderror
        </div>
        <div class="flex items-center mt-4 w-full md:w-1/2">
            <label for="last_name" class="md:ml-2 mr-2">
                @include('partials.svg.id-badge-regular', ['class' => 'w-6 h-6 fill-current text-gray-200'])
            </label>
            <input id="last_name" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none transition duration-500 {{ $errors->has('last_name') ? ' border-orange-600' : 'border-purple-400' }}" type="text" name="last_name" required="required" placeholder="Prenumele" value="{{ old('last_name')}}">
            @error('last_name')
            <div class="w-full text-sm font-normal text-orange-600 mt-1">
                {{ $errors->first('last_name') }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap flex-col md:flex-row">
        <div class="flex flex-wrap items-center mt-4 w-full md:w-1/2">
            <div class="flex items-center w-full">
                <label for="password" class="mr-2">
                    @include('partials.svg.lock-alt-solid', ['class' => 'w-6 h-6 fill-current text-gray-200'])
                </label>
                <input type="password" name="password" id="password" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none transition duration-500 {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" required="required" placeholder="Introduceți parola">
            </div>
        </div>
        <div class="flex items-center mt-4 w-full md:w-1/2">
            <label for="password_confirmation" class="md:ml-2 mr-2">
                @include('partials.svg.lock-alt-regular', ['class' => 'w-6 h-6 fill-current text-gray-200'])
            </label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none transition duration-500 {{ $errors->has('password') ? ' border-orange-600' : 'border-purple-400' }}" required="required" placeholder="Confirmați parola">
        </div>
        @error('password')
        <div class="w-full text-sm font-normal text-orange-600 mt-1">
            {{ $errors->first('password') }}
        </div>
        @enderror

    </div>
    <div class="flex flex-wrap my-6 text-gray-200">
        <div class="w-full flex items-center">
            <div class="flex items-center">
                <label for="signup" class="relative cursor-pointer checkbox">
                    <input id="signup" type="checkbox" name="terms_and_conditions" class="absolute w-0 h-0 opacity-0  transition duration-500">
                    <span class="checkmark absolute bg-gray-200 w-4 h-4 top-0 left-0 mt-1 rounded-sm"></span>
                    <span class="ml-6">
                        Sunt de acord cu <a href="#" class="text-orange-500 font-semibold hover:underline">Termenii și condițiile</a>
                    </span>
                </label>
            </div>
        </div>
        @error('terms_and_conditions')
        <div class="text-sm font-normal text-orange-600 w-full mt-1">
            {{ $errors->first('terms_and_conditions') }}
        </div>
        @enderror
    </div>
    <div class="flex items-center my-8">
        <div class="w-2/3 mx-auto">
            <button class="w-full border-2 border-orange-500  py-3 rounded-full text-indigo-700 font-bold text-lg focus:outline-none focus:shadow-outline hover:text-gray-200 hover:bg-indigo-500 hover:border-indigo-700 hover:shadow-lg transition duration-500" type="submit">Creează contul</button>
        </div>
    </div>
    <div class="flex items-center mt-6">
        <div class="flex mx-auto">
            <span class="mr-2 text-gray-200">
                Ai deja un cont?
            </span>
            <a href="{{ route('login') }}" class="flex items-center">
                @include('partials.svg.sign-in-alt-regular', ['class' => 'w-4 h-4 fill-current text-gray-200'])
                <span class="ml-2 text-gray-200 font-semibold">
                    Login
                </span>
            </a>
        </div>
    </div>
</form>
@endcomponent
<a class=" bottom-0 right-0 mr-6 mb-6 fixed" href="https://www.freepik.com/free-photos-vectors/background">Background vector created by freepik - www.freepik.com</a>
@endsection