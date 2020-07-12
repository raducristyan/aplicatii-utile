@extends('layouts.apps.dashboard')
@section('dashboard-content')
<div class="flex justify-between flex-wrap">
    <div class="flex w-full md:w-1/2 lg:w-1/3 my-2 md:my-0">
        <x-card.card class="w-full md:mx-4 p-0 justify-center mb-4">
            <a href="" class="w-full flex flex-col justify-between p-4 cursor-pointer">
                <div class="flex justify-center text-indigo-500 hover:text-indigo-700  transition duration-500">
                    @include('partials.svg.user-circle-duotone', ['class' => 'h-24 w-24'])
                </div>
                <p class="text-center text-xl text-gray-700 font-medium py-2">Profil</p>
            </a>
        </x-card.card>
    </div>
    @admin
    <div class="flex w-full md:w-1/2 lg:w-1/3 my-2 md:my-0">
        <x-card.card class="w-full md:mx-4 p-0 justify-center mb-4">
            <a href="{{ route('dashboard.admin.user.index') }}" class="w-full flex flex-col justify-between p-4 cursor-pointer">
                <div class="flex justify-center text-indigo-500 hover:text-indigo-700  transition duration-500">
                    @include('partials.svg.users-duotone', ['class' => 'h-24 w-24'])
                </div>
                <p class="text-center text-xl text-gray-700 font-medium py-2">Utilizatori</p>
            </a>
        </x-card.card>
    </div>
    @endadmin
    <div class="flex w-full md:w-1/2 lg:w-1/3 my-2 md:my-0">
        <x-card.card class="w-full md:mx-4 p-0 justify-center mb-4">
            <a href="" class="w-full flex flex-col justify-between p-4 cursor-pointer">
                <div class="flex justify-center text-indigo-500 hover:text-indigo-700  transition duration-500">
                    @include('partials.svg.history-duotone', ['class' => 'h-24 w-24'])
                </div>
                <p class="text-center text-xl text-gray-700 font-medium py-2">Activitate</p>
            </a>
        </x-card.card>
    </div>
    <div class="flex w-full md:w-1/2 lg:w-1/3 my-2 md:my-0">
        <x-card.card class="w-full md:mx-4 p-0 justify-center mb-4">
            <a href="" class="w-full flex flex-col justify-between p-4 cursor-pointer">
                <div class="flex justify-center text-indigo-500 hover:text-indigo-700  transition duration-500">
                    @include('partials.svg.sliders-v-duotone', ['class' => 'h-24 w-24'])
                </div>
                <p class="text-center text-xl text-gray-700 font-medium py-2">Setări</p>
            </a>
        </x-card.card>
    </div>
</div>
@endsection