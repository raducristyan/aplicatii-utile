@extends('layouts.master')

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
    <div class="flex items-center mt-6">
        <label for="password" class="mr-2">
            @include('partials.svg.lock-alt-solid', ['class' => 'w-6 h-6 fill-current text-gray-200'])
        </label>
        <input id="password" class="w-full bg-transparent border-b-2 focus:border-gray-300 px-2 py-3 text-gray-200 font-normal outline-none transition duration-500 {{ $errors->has('email') ? ' border-orange-600' : 'border-purple-400' }}" type="password" name="password" required="required" placeholder="Introduceți parola">
    </div>
    <div class="flex items-center my-6 text-gray-200">
        <div class="w-full flex items-center justify-between">
            <div class="flex items-center">
                <label for="remember" class="relative cursor-pointer checkbox">
                    <input id="remember" name="remember" type="checkbox" class="absolute w-0 h-0 opacity-0">
                    <span class="checkmark absolute bg-gray-200 w-4 h-4 top-0 left-0 mt-1 rounded-sm"></span>
                    <span class="ml-6">
                        Ține-mă autentificat
                    </span>
                </label>
            </div>
            <div>
                <a href="{{ route('password.request') }}" class="flex items-center">
                    @include('partials.svg.lock-open-alt-solid', ['class' => 'w-4 h-4 fill-current text-gray-200'])
                    <span class="ml-2">
                        Ai uitat parola?
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="flex items-center my-12">
        <div class="w-1/3 mx-auto">
            <button class="w-full border-2 border-orange-500  py-3 rounded-full text-indigo-700 font-bold text-lg focus:outline-none focus:shadow-outline hover:text-gray-200 hover:bg-indigo-500 hover:border-indigo-700 hover:shadow-lg transition duration-500" type="submit">Login</button>
        </div>
    </div>
    <div class="flex items-center mt-6">
        <div class="flex items-center mx-auto">
            <span class="text-gray-200">Nu ai cont?</span>
            <a href="{{ route('register') }}" class="ml-2 flex items-center">
                @include('partials.svg.user-plus-regular', ['class' => 'w-4 h-4 fill-current text-gray-200 mr-1'])
                <span class="font-semibold text-gray-200">
                    Crează cont
                </span>
            </a>
        </div>
    </div>
</form>
@endcomponent
<a class=" bottom-0 right-0 mr-6 mb-6 fixed" href="https://www.freepik.com/free-photos-vectors/background">Background vector created by freepik - www.freepik.com</a>
@endsection