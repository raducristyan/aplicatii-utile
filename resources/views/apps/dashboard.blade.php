@extends('apps.layout')
@section('content')

@php
#dd($institution->address);
#dd(auth()->user()->institution);
@endphp
<div class="flex flex-wrap w-full">
    <!-- Column -->
    <div class="w-full md:w-1/4">
        <div class="bg-white px-4 py-8 md:mr-6 mb-6 md:mb-0 rounded-sm">
            <div class="flex flex-col border-b border-gray-300">
                <img src="../assets/images/users/user-male.png" class="w-40 mx-auto rounded-full shadow" />
                <h4 class="py-2 text-gray-700 mx-auto"><strong>{{ auth()->user()->full_name }}</strong></h4>
                <h6 class="text-gray-600 text-center">{{ auth()->user()->job ?? 'Nu ați completat funcția în cadrul organizației' }}</h6>
                <div class="flex py-4">
                    <div class="w-1/2 flex justify-center">
                        <a href="javascript:void(0)" class="">
                            <i class="fal fa-user-friends"></i>
                            <font>254</font>
                        </a>
                    </div>
                    <div class="w-1/2 flex justify-center">
                        <a href="javascript:void(0)" class="">
                            <i class="fal fa-user-cog"></i>
                            <font>54</font>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pt-2">
                <div class="py-2">
                    <small class="text-gray-600 text-sm">Adresa de email </small>
                    <h6 class="break-words text-gray-700 font-normal">{{ auth()->user()->email }}</h6>
                </div>
                <div class="py-2">
                    <small class="text-gray-600 text-sm">Telefon mobil</small>
                    @if ( auth()->user()->mobile )
                    <h6 class="text-gray-700 font-normal">{{ auth()->user()->mobile ?? 'Nu ați completat numărul de telefon mobil.'}}</h6>
                    @else
                    <h6 class="text-gray-700 font-normal">Nu ați completat numărul de telefon</h6>
                    @endif
                </div>
                <div class="py-2">
                    <small class="text-gray-600 text-sm">Adresa</small>
                    @forelse ( auth()->user()->address as $address )
                    <h6 class="text-gray-700 font-normal">
                        @if ( $address->village->name ) {{ $address->village->name }} @endif
                        @if ( $address->street ) {{ $address->street }} @endif
                        @if ( $address->number ) {{ $address->number }} @endif
                        @if ( $address->bl ) {{ $address->bl }} @endif
                        @if ( $address->sc ) {{ $address->sc }} @endif
                        @if ( $address->ap ) {{ $address->ap }} @endif
                        @if ( $address->postal_code ) {{ $address->postal_code }} @endif
                    </h6>
                    @empty
                    <h6 class="text-gray-700 font-normal">Nu ați compleat adresa</h6>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="w-full md:w-3/4">
        <div class="rounded">
            <!-- Nav tabs -->
            <div class="flex items-center bg-white border-b border-gray-300">

                <a class="px-4 py-3 border-b-2 border-transparent -mb-px text-gray-700 hover:text-indigo-500 font-semibold" :class="activeTab === 'activity' ? 'text-indigo-500 hover:border-b-2 hover:border-indigo-500 border-indigo-500' : ''" @click="setActiveTab('activity')" href="#activity">Activitate</a>

                <a class="px-4 py-3 border-b-2 border-transparent -mb-px text-gray-700 hover:text-indigo-500 font-semibold" :class="activeTab === 'settings' ? 'text-indigo-500 hover:border-b-2 hover:border-indigo-500 border-indigo-500' : ''" @click="setActiveTab('settings')" href="#settings">Setări</a>
                @admin

                <a class="px-4 py-3 border-b-2 border-transparent -mb-px text-gray-700 hover:text-indigo-500 font-semibold" :class="activeTab === 'institution' ? 'text-indigo-500 hover:border-b-2 hover:border-indigo-500 border-indigo-500' : ''" @click="setActiveTab('institution')" href="#institution">Instituție</a>

                <a class="px-4 py-3 border-b-2 border-transparent -mb-px text-gray-700 hover:text-indigo-500 font-semibold" :class="activeTab === 'users' ? 'text-indigo-500 hover:border-b-2 hover:border-indigo-500 border-indigo-500' : ''" @click="setActiveTab('users')" href="#users">Utilizatori</a>
                @endadmin
            </div>
            <!-- Tab panes -->
            <div class="">
                @include('apps.partials.tabs.activity')
                @include('apps.partials.tabs.settings')
                @admin
                @include('apps.partials.tabs.institution')
                @include('apps.partials.tabs.users')
                @endadmin
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

@include('apps.partials.modals.userPassword')
@include('apps.partials.modals.userProfile')
@include('apps.partials.modals.userAddress')
@admin
@include('apps.partials.modals.newUser')
@include('apps.partials.modals.institutionProfile')
@include('apps.partials.modals.institutionAddress')
@endadmin
@endsection