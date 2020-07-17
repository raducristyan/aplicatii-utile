@extends('layouts.apps.default')

@section('page-name')
Utilizator nou
@endsection

@section('breadcrumbs-links')
@each('partials.breadcrumbsLinks', [['name' => 'Acasă', 'url' => route('dashboard.')]], 'link')
@endsection

@section('last-link')
Utilizator nou
@endsection

@section('content')

<div class="w-full flex flex-wrap">
    <!-- Tab links -->
    <a class="w-full lg:w-1/2 xl:w-1/4 mb-2 xl:mb-0 cursor-pointer" @click="setActiveTab('account')">
        <div class="flex bg-white border border-gray-100 shadow-md rounded-md py-6 xl:rounded-b-none lg:mr-1 border-b-0 flex-grow-0" :class="[activeTab == 'account' ? 'bg-white' : 'bg-gray-100']">
            <div class="w-full px-8">
                <div class=" flex items-center">
                    <div class="py-1 px-3 inline-block text-lg font-bold rounded" :class="[activeTab == 'account' ? 'bg-indigo-500 text-white' : 'bg-gray-200 text-indigo-500']">1</div>
                    <div class="flex flex-col ml-4 overflow-hidden">
                        <div class="text-base font-bold select-none" :class=" [activeTab=='account' ? 'text-indigo-500' : 'text-gray-700' ]">Cont</div>
                        <div class="whitespace-no-wrap select-none">Cont și setări utilizator</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="w-full lg:w-1/2 xl:w-1/4 mb-2 xl:mb-0 cursor-pointer" @click="setActiveTab('profile')">
        <div class="flex bg-white border border-gray-100 shadow-md rounded-md py-6 xl:rounded-b-none lg:ml-1 lg:mr-1 border-b-0 flex-grow-0" :class="[activeTab == 'profile' ? 'bg-white' : 'bg-gray-100']">
            <div class="w-full px-8">
                <div class=" flex items-center">
                    <div class="py-1 px-3 inline-block text-lg font-bold rounded" :class="[activeTab == 'profile' ? 'bg-indigo-500 text-white' : 'bg-gray-200 text-indigo-500']">2</div>
                    <div class="flex flex-col ml-4 overflow-hidden">
                        <div class="text-base font-bold select-none" :class="[activeTab == 'profile' ? 'text-indigo-500' : 'text-gray-700']">Profil</div>
                        <div class="whitespace-no-wrap select-none">Informații personale</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="w-full lg:w-1/2 xl:w-1/4 mb-2 xl:mb-0 cursor-pointer" @click="setActiveTab('address')">
        <div class="flex bg-white border border-gray-100 shadow-md rounded-md py-6 xl:rounded-b-none xl:ml-1 lg:mr-1 border-b-0 flex-grow-0" :class="[activeTab == 'address' ? 'bg-white' : 'bg-gray-100']">
            <div class="w-full px-8">
                <div class=" flex items-center">
                    <div class="py-1 px-3 inline-block text-lg font-bold rounded" :class="[activeTab == 'address' ? 'bg-indigo-500 text-white' : 'bg-gray-200 text-indigo-500']">3</div>
                    <div class="flex flex-col ml-4 overflow-hidden">
                        <div class="text-base font-bold select-none" :class="[activeTab=='address' ? 'text-indigo-500' : 'text-gray-700' ]">Adresa</div>
                        <div class=" whitespace-no-wrap select-none">Adresa utilizatorului</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="w-full lg:w-1/2 xl:w-1/4 mb-2 xl:mb-0 cursor-pointer" @click="setActiveTab('review')">
        <div class="flex bg-white border border-gray-100 shadow-md rounded-md py-6 xl:rounded-b-none lg:ml-1 border-b-0 flex-grow-0" :class="[activeTab == 'review' ? 'bg-white' : 'bg-gray-100']">
            <div class="w-full px-8">
                <div class=" flex items-center">
                    <div class="py-1 px-3 inline-block text-lg font-bold rounded" :class="[activeTab == 'review' ? 'bg-indigo-500 text-white' : 'bg-gray-200 text-indigo-500']">4</div>
                    <div class="flex flex-col ml-4 overflow-hidden">
                        <div class="text-base font-bold select-none" :class="[activeTab == 'review' ? 'text-indigo-500' : 'text-gray-700']">Finalizare</div>
                        <div class=" whitespace-no-wrap select-none">Revizuire informații</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<!-- End tab links -->

<x-card.card class="flex-col xl:rounded-t-none xl:border-t-0">
    <!-- Form -->
    <x-form.form method="POST" url="{{ route('dashboard.admin.user.store') }}" id="user_store">
        <!-- Account tab -->
        <div v-if="activeTab == 'account'" id="account">
            <div class="w-full flex justify-end mt-12">
                <div class="w-full md:w-9/12">
                    <x-section.title text="Detalii cont utilizator:" class="text-xl" />
                </div>
            </div>

            <div class="flex flex-col pb-8">
                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:flex-row md:mt-1">
                        <div class="w-full md:w-1/4 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="first_name">Prenume</label>
                        </div>
                        <div class="w-full md:w-3/4 md:ml-6">
                            <input name="first_name" type="text" min="2" max="50" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('first_name')) border-orange-600 @endif" value="{{ old('first_name') }}" required>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                            @if ($errors->has('first_name'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('first_name') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:flex-row md:mt-1">
                        <div class="w-full md:w-1/4 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="last_name">Nume</label>
                        </div>
                        <div class="w-full md:w-3/4 md:ml-6">
                            <input name="last_name" type="text" min="2" max="50" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('last_name')) border-orange-600 @endif" value="{{ old('last_name') }}" required>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                            @if ($errors->has('last_name'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('last_name') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:flex-row md:mt-1">
                        <div class="w-full md:w-1/4 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="email">Email</label>
                        </div>
                        <div class="w-full md:w-3/4 md:ml-6">
                            <input name="email" type="email" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('email')) border-orange-600 @endif" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                            @if ($errors->has('email'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('email') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:flex-row md:mt-1">
                        <div class="w-full md:w-1/4 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="password">Parola</label>
                        </div>
                        <div class="w-full md:w-3/4 md:ml-6">
                            <input name="password" type="password" min="8" max="50" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('password')) border-orange-600 @endif" value="{{ old('password') }}" required>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                            @if ($errors->has('password'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('password') }}
                            </small>
                            @else
                            <small class="font-normal text-sm text-gray-600">Parola trebuie să conțină litere mici, litere mari și cifre, minim 8 caractere.</small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:flex-row md:mt-1">
                        <div class="w-full md:w-1/4 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="password_confirmation">Confirmați parola</label>
                        </div>
                        <div class="w-full md:w-3/4 md:ml-6">
                            <input name="password_confirmation" type="password" min="8" max="50" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('password_confirmation')) border-orange-600 @endif" value="{{ old('password_confirmation') }}" required>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                            @if ($errors->has('password_confirmation'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('password_confirmation') }}
                            </small>
                            @else
                            <small class="font-normal text-sm text-gray-600">Introduceți parola din nou pentru confirmare.</small>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End account tab -->

        <!-- Profile tab -->
        <div v-if="activeTab == 'profile'" id="profile">
            <div class="w-full flex justify-end mt-12">
                <div class="w-full md:w-9/12">
                    <x-section.title text="Detalii profil utilizator:" class="text-xl" />
                </div>
            </div>
            <div class="flex flex-col pb-8">
                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:flex-row md:mt-1">
                        <div class="w-full md:w-1/4 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="avatar">Foto</label>
                        </div>
                        <div class="w-full md:w-3/4 md:ml-6">
                            <div class="inline-block relative">
                                @include('partials.svg.user-duotone', ['class' => 'h-32 px-4 pt-4 bg-gray-200 text-gray-700 border-4 border-white rounded-md shadow-xl'])
                                <div class="absolute top-0 right-0 p-2 text-gray-500 bg-white border border-gray-200 rounded-full z-10 shadow-md hover:bg-gray-100 hover:text-gray-700 cursor-pointer transform translate-x-2 -translate-y-2">
                                    @include('partials.svg.pencil-solid', ['class' => 'w-3'])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-3/4  md:pl-6 -mt-1">
                            @if ($errors->has('avatar'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('avatar') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:flex-row md:mt-1">
                        <div class="w-full md:w-1/4 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="job">Funcție</label>
                        </div>
                        <div class="w-full md:w-3/4 md:ml-6">
                            <input name="job" type="text" min="2" max="50" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('job')) border-orange-600 @endif" value="{{ old('job') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                            @if ($errors->has('job'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('job') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:flex-row md:mt-1">
                        <div class="w-full md:w-1/4 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="compartment">Compartiment</label>
                        </div>
                        <div class="w-full md:w-3/4 md:ml-6">
                            <input name="compartment" type="text" min="2" max="50" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('compartment')) border-orange-600 @endif" value="{{ old('compartment') }}" required>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                            @if ($errors->has('compartment'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('compartment') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:flex-row md:mt-1">
                        <div class="w-full md:w-1/4 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="mobile">Mobil</label>
                        </div>
                        <div class="w-full md:w-3/4 md:ml-6">
                            <input name="mobile" type="text" min="2" max="50" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('mobile')) border-orange-600 @endif" value="{{ old('mobile') }}" required>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                            @if ($errors->has('mobile'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('mobile') }}
                            </small>
                            @else
                            <small class="w-full md:w-2/3 md:pl-6 font-normal text-sm text-gray-600">Format: 0000-000-000</small>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End profile tab-->

        <!-- Address tab -->
        <div v-if="activeTab == 'address'" id="address">
            <div class="w-full flex justify-end mt-12">
                <div class="w-full md:w-9/12">
                    <x-section.title text="Completați adresa utilizatorului:" class="text-xl" />
                </div>
            </div>
            <div class="flex flex-col pb-8">
                <div class="flex flex-col w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full flex flex-col items-center md:mt-1">
                        <div class="w-full">
                            <label class="text-gray-800 whitespace-no-wrap" for="address">Adresa</label>
                        </div>
                        <div class="w-full">
                            <input name="address" type="text" min="2" max="50" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('address')) border-orange-600 @endif" value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                            @if ($errors->has('address'))
                            <small class="font-normal text-sm text-orange-600">
                                {{ $errors->first('address') }}
                            </small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full md:w-1/2 md:pr-2">
                        <div class="w-full flex flex-col items-center md:mt-1">
                            <div class="w-full">
                                <label class="text-gray-800 whitespace-no-wrap" for="postal_code">Codul poștal</label>
                            </div>
                            <div class="w-full">
                                <input name="postal_code" type="text" min="6" max="6" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('postal_code')) border-orange-600 @endif" value="{{ old('postal_code') }}">
                            </div>
                        </div>
                        <div class="w-full flex justify-end">
                            <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                                @if ($errors->has('postal_code'))
                                <small class="font-normal text-sm text-orange-600">
                                    {{ $errors->first('postal_code') }}
                                </small>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 md:pl-2">
                        <div class="w-full flex flex-col items-center md:mt-1">
                            <div class="w-full">
                                <label class="text-gray-800 whitespace-no-wrap" for="county">Județul</label>
                            </div>
                            <div class="w-full">
                                <input name="county" type="text" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('county')) border-orange-600 @endif" value="{{ old('county') }}">
                            </div>
                        </div>
                        <div class="w-full flex justify-end">
                            <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                                @if ($errors->has('county'))
                                <small class="font-normal text-sm text-orange-600">
                                    {{ $errors->first('county') }}
                                </small>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row w-full md:w-10/12 lg:w-8/12 mx-auto items-center mt-3">
                    <div class="w-full md:w-1/2 md:pr-2">
                        <div class="w-full flex flex-col items-center md:mt-1">
                            <div class="w-full">
                                <label class="text-gray-800 whitespace-no-wrap" for="city">Localitate</label>
                            </div>
                            <div class="w-full">
                                <input name="city" type="text" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('city')) border-orange-600 @endif" value="{{ old('city') }}">
                            </div>
                        </div>
                        <div class="w-full flex justify-end">
                            <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                                @if ($errors->has('city'))
                                <small class="font-normal text-sm text-orange-600">
                                    {{ $errors->first('city') }}
                                </small>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 md:pl-2">
                        <div class="w-full flex flex-col items-center md:mt-1">
                            <div class="w-full">
                                <label class="text-gray-800 whitespace-no-wrap" for="village">Localitate componentă</label>
                            </div>
                            <div class="w-full">
                                <input name="village" type="text" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('village')) border-orange-600 @endif" value="{{ old('village') }}">
                            </div>
                        </div>
                        <div class="w-full flex justify-end">
                            <div class="w-full md:w-3/4 md:pl-6 -mt-1">
                                @if ($errors->has('village'))
                                <small class="font-normal text-sm text-orange-600">
                                    {{ $errors->first('village') }}
                                </small>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End address tab-->

        <!-- Review tab -->
        <div v-if="activeTab == 'review'" id="address">
            <div class="w-full flex justify-end mt-12">
                <div class="w-full md:w-9/12">
                    <x-section.title text="Vizualizați informațiile și salvați:" class="text-xl" />
                </div>
            </div>
            <div class="flex flex-col pb-8">
                <div class="flex flex-col items-center w-full mt-3">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="first_name">Prenume</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="first_name" type="text" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('first_name')) border-orange-600 @endif" id="first_name" value="{{ old('first_name') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('first_name'))
                            <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                                {{ $errors->first('first_name') }}
                            </small>
                            @else
                            <small class="w-full h-auto md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center w-full mt-3">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="last_name">Nume</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="last_name" type="text" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('last_name')) border-orange-600 @endif" id="last_name" value="{{ old('last_name') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('last_name'))
                            <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                                {{ $errors->first('last_name') }}
                            </small>
                            @else
                            <small class="w-full md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center w-full mt-3">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="job">Funcție</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="job" type="text" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('job')) border-orange-600 @endif" id="job" value="{{ old('job') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('job'))
                            <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                                {{ $errors->first('job') }}
                            </small>
                            @else
                            <small class="w-full md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center w-full mt-3">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="job">Compartiment</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="compartment" type="text" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('compartment')) border-orange-600 @endif" id="compartment" value="{{ old('compartment') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('compartment'))
                            <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                                {{ $errors->first('compartment') }}
                            </small>
                            @else
                            <small class="w-full md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center w-full mt-3">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="mobile">Mobil</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="mobile" type="tel" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('mobile')) border-orange-600 @endif" id="mobile" value="{{ old('mobile') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('mobile'))
                            <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                                {{ $errors->first('mobile') }}
                            </small>
                            @else
                            <small class="w-full md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center w-full mt-3">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="phone">Telefon</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="phone" type="tel" class="w-full px-4 py-2 my-2 bg-gray-200  text-gray-800 font-normal border focus:border-indigo-500 focus:outline-none rounded-md transition duration-500 @if ($errors->has('phone')) border-orange-600 @endif" id="phone" value="{{ old('phone') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('phone'))
                            <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                                {{ $errors->first('phone') }}
                            </small>
                            @else
                            <small class="w-full md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End review tab-->


    </x-form.form>
    <!-- End form -->

    <x-slot name="footer">
        <div class="flex flex-col justify-center items-center py-6">
            <div class="w-full md:w-10/12 lg:w-8/12">
                <div class="w-full text-right">
                    <x-button.submit text="Salvează" color="green" for="user_store" class="flex justify-end px-0" />
                </div>
            </div>
        </div>
    </x-slot>
</x-card.card>
@endsection