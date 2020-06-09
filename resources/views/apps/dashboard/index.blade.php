@extends('apps.layout')
@section('content')

<div class="flex flex-wrap w-full">
    <!-- Column -->
    <div class="w-full lg:w-1/4">
        <div class="bg-white px-4 py-8 lg:mr-6 mb-6 lg:mb-0 rounded shadow-md border border-gray-400">
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
                        @if ( $address->street ) {{ ", ".$address->street }} @endif
                        @if ( $address->number ) {{ ", ".$address->number }} @endif
                        @if ( $address->bl ) {{ ", ".$address->bl }} @endif
                        @if ( $address->sc ) {{ ", ".$address->sc }} @endif
                        @if ( $address->ap ) {{ ", ".$address->ap }} @endif
                        @if ( $address->postal_code ) {{ ", ".$address->postal_code }} @endif
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
    <div class="w-full lg:w-3/4">

        <!-- Nav tabs -->
        <div class="flex flex-col md:flex-row items-center bg-white border-b border-gray-300 rounded shadow-md border border-gray-400">

            <a class="w-full md:w-auto text-center px-4 py-3 border-b-2 border-gray-200 md:border-transparent -mb-px text-gray-700 hover:text-indigo-500 hover:border-indigo-400  font-semibold transition duration-300 @if (Request::is('activity')) text-indigo-500 border-indigo-500 md:border-indigo-500 @endif" @click="setActiveTab('activity')" href="#activity">Activitate</a>

            <a class="w-full md:w-auto text-center px-4 py-3 border-b-2 border-gray-200 md:border-transparent -mb-px text-gray-700 hover:text-indigo-500 hover:border-indigo-400  font-semibold transition duration-300 @if (Request::is('profile')) text-indigo-500 border-indigo-500 md:border-indigo-500 @endif" @click="setActiveTab('profile')" href="#profile">Profil</a>

            @admin

            <a class="w-full md:w-auto text-center px-4 py-3 border-b-2 border-gray-200 md:border-transparent -mb-px text-gray-700 hover:text-indigo-500 hover:border-indigo-400  font-semibold transition duration-300 @if (Request::is('institution')) text-indigo-500 border-indigo-500 md:border-indigo-500 @endif" @click="setActiveTab('institution')" href="#institution">Instituție</a>

            <a class="w-full md:w-auto text-center px-4 py-3 border-b-2 border-gray-200 md:border-transparent -mb-px text-gray-700 hover:text-indigo-500 hover:border-indigo-400  font-semibold transition duration-300 @if (Request::is('users')) text-indigo-500 border-indigo-500 md:border-indigo-500 @endif" @click="setActiveTab('users')" href="#users">Utilizatori</a>

            <a class="w-full md:w-auto text-center px-4 py-3 border-b-2 border-gray-200 md:border-transparent -mb-px text-gray-700 hover:text-indigo-500 hover:border-indigo-400  font-semibold transition duration-300 @if (Request::is('settings')) text-indigo-500 border-indigo-500 md:border-indigo-500 @endif" @click="setActiveTab('settings')" href="#settings">Setări</a>
            @endadmin
        </div>
        <!-- Tab panes -->
        <div class="">
            @include('apps.partials.tabs.activity')
            @include('apps.partials.tabs.profile')
            @admin
            @include('apps.partials.tabs.institution')
            @include('apps.partials.tabs.users')
            @include('apps.partials.tabs.settings')
            @endadmin
        </div>
    </div>
    <!-- Column -->
</div>

@include('apps.partials.modals.profilePassword')
@include('apps.partials.modals.editProfile')
@include('apps.partials.modals.profileAddress')
@admin
@include('apps.partials.modals.editUser')
@include('apps.partials.modals.newUser')
@include('apps.partials.modals.deleteUser')
@include('apps.partials.modals.institutionProfile')
@include('apps.partials.modals.institutionAddress')
@endadmin
@endsection