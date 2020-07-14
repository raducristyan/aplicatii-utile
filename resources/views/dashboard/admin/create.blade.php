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
    <a class="w-full lg:w-1/2 xl:w-1/4 mb-2 xl:mb-0 cursor-pointer" @click="setActiveTab('profile')">
        <div class="flex bg-white border border-gray-100 shadow-md rounded-md py-6 xl:rounded-b-none lg:mr-2 border-b-0 flex-grow-0" :class="[activeTab == 'profile' ? 'bg-white' : 'bg-gray-100']">
            <div class="w-full px-8">
                <div class=" flex items-center">
                    <div class="py-1 px-3 inline-block text-lg font-bold rounded" :class="[activeTab == 'profile' ? 'bg-indigo-500 text-white' : 'bg-gray-200 text-indigo-500']">1</div>
                    <div class="flex flex-col ml-4 overflow-hidden">
                        <div class="text-base font-bold select-none" :class="[activeTab == 'profile' ? 'text-indigo-500' : 'text-gray-700']">Profil</div>
                        <div class="whitespace-no-wrap select-none">Informații personale</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="w-full lg:w-1/2 xl:w-1/4 mb-2 xl:mb-0 cursor-pointer" @click="setActiveTab('account')">
        <div class="flex bg-white border border-gray-100 shadow-md rounded-md py-6 xl:rounded-b-none xl:mr-2 border-b-0 flex-grow-0" :class="[activeTab == 'account' ? 'bg-white' : 'bg-gray-100']">
            <div class="w-full px-8">
                <div class=" flex items-center">
                    <div class="py-1 px-3 inline-block text-lg font-bold rounded" :class="[activeTab == 'account' ? 'bg-indigo-500 text-white' : 'bg-gray-200 text-indigo-500']">2</div>
                    <div class="flex flex-col ml-4 overflow-hidden">
                        <div class="text-base font-bold select-none" :class=" [activeTab=='account' ? 'text-indigo-500' : 'text-gray-700' ]">Cont</div>
                        <div class="whitespace-no-wrap select-none">Cont și setări utilizator</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="w-full lg:w-1/2 xl:w-1/4 mb-2 xl:mb-0 cursor-pointer" @click="setActiveTab('address')">
        <div class="flex bg-white border border-gray-100 shadow-md rounded-md py-6 xl:rounded-b-none lg:mr-2 border-b-0 flex-grow-0" :class="[activeTab == 'address' ? 'bg-white' : 'bg-gray-100']">
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
        <div class="flex bg-white border border-gray-100 shadow-md rounded-md py-6 xl:rounded-b-none border-b-0 flex-grow-0" :class="[activeTab == 'review' ? 'bg-white' : 'bg-gray-100']">
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
        <!-- Profile tab -->
        <div v-if="activeTab == 'profile'" id="profile">
            <div class="w-full flex justify-end mt-12">
                <div class="w-full md:w-9/12">
                    <x-section.title text="Detalii profil utilizator:" class="text-xl" />
                </div>
            </div>
            <div class="flex flex-col py-8">
                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="avatar">Foto</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <div class="inline-block relative">
                                @include('partials.svg.user-duotone', ['class' => 'h-32 px-4 pt-4 bg-gray-200 text-gray-700 border-4 border-white rounded-md shadow-xl'])
                                <div class="absolute top-0 right-0 p-2 text-gray-500 bg-white border border-gray-200 rounded-full z-10 shadow-md hover:bg-gray-100 hover:text-gray-700 cursor-pointer transform translate-x-2 -translate-y-2">
                                    @include('partials.svg.pencil-solid', ['class' => 'w-3'])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('avatar'))
                            <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                                {{ $errors->first('avatar') }}
                            </small>
                            @else
                            <small class="w-full h-auto md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="first_name">Prenume</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="first_name" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('first_name')) border-orange-600 @endif" id="first_name" value="{{ old('first_name') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="last_name">Nume</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="last_name" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('last_name')) border-orange-600 @endif" id="last_name" value="{{ old('last_name') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="job">Funcție</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="job" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('job')) border-orange-600 @endif" id="job" value="{{ old('job') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="job">Compartiment</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="compartment" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('compartment')) border-orange-600 @endif" id="compartment" value="{{ old('compartment') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="mobile">Mobil</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="mobile" type="tel" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('mobile')) border-orange-600 @endif" id="mobile" value="{{ old('mobile') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="phone">Telefon</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="phone" type="tel" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('phone')) border-orange-600 @endif" id="phone" value="{{ old('phone') }}">
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
        <!-- End profile tab-->

        <!-- Account tab -->
        <div v-if="activeTab == 'account'" id="account">
            <div class="w-full flex justify-end mt-12">
                <div class="w-full md:w-9/12">
                    <x-section.title text="Detalii cont utilizator:" class="text-xl" />
                </div>
            </div>
            <div class="flex flex-col py-8">
                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="email">Adresa de email</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="email" type="email" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('email')) border-orange-600 @endif" id="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('email'))
                            <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                                {{ $errors->first('email') }}
                            </small>
                            @else
                            <small class="w-full md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="password">Parola</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="password" type="password" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('password')) border-orange-600 @endif" id="password" value="{{ old('password') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('password'))
                            <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                                {{ $errors->first('password') }}
                            </small>
                            @else
                            <small class="w-full md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="password_confirmation">Confirmare parola</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="password_confirmation" type="password" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('password_confirmation')) border-orange-600 @endif" id="password_confirmation" value="{{ old('password_confirmation') }}">
                        </div>
                    </div>
                    <div class="w-full flex justify-end -mt-1">
                        <div class="w-full md:w-2/3">
                            @if ($errors->has('password_confirmation'))
                            <small class=" font-normal text-sm text-orange-600">
                                {{ $errors->first('password_confirmation') }}
                            </small>
                            @else
                            <small class="w-full md:w-2/3 md:pl-6 font-normal text-sm text-gray-600"></small>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End account tab -->

        <!-- Address tab -->
        <div v-if="activeTab == 'address'" id="address">
            <div class="w-full flex justify-end mt-12">
                <div class="w-full md:w-9/12">
                    <x-section.title text="Completați adresa utilizatorului:" class="text-xl" />
                </div>
            </div>
            <div class="flex flex-col py-8">
                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="first_name">Prenume</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="first_name" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('first_name')) border-orange-600 @endif" id="first_name" value="{{ old('first_name') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="last_name">Nume</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="last_name" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('last_name')) border-orange-600 @endif" id="last_name" value="{{ old('last_name') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="job">Funcție</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="job" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('job')) border-orange-600 @endif" id="job" value="{{ old('job') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="job">Compartiment</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="compartment" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('compartment')) border-orange-600 @endif" id="compartment" value="{{ old('compartment') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="mobile">Mobil</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="mobile" type="tel" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('mobile')) border-orange-600 @endif" id="mobile" value="{{ old('mobile') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="phone">Telefon</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="phone" type="tel" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('phone')) border-orange-600 @endif" id="phone" value="{{ old('phone') }}">
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
        <!-- End address tab-->

        <!-- Review tab -->
        <div v-if="activeTab == 'review'" id="address">
            <div class="w-full flex justify-end mt-12">
                <div class="w-full md:w-9/12">
                    <x-section.title text="Vizualizați informațiile și salvați:" class="text-xl" />
                </div>
            </div>
            <div class="flex flex-col py-8">
                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="first_name">Prenume</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="first_name" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('first_name')) border-orange-600 @endif" id="first_name" value="{{ old('first_name') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="last_name">Nume</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="last_name" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('last_name')) border-orange-600 @endif" id="last_name" value="{{ old('last_name') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="job">Funcție</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="job" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('job')) border-orange-600 @endif" id="job" value="{{ old('job') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="job">Compartiment</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="compartment" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('compartment')) border-orange-600 @endif" id="compartment" value="{{ old('compartment') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="mobile">Mobil</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="mobile" type="tel" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('mobile')) border-orange-600 @endif" id="mobile" value="{{ old('mobile') }}">
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

                <div class="flex flex-col items-center w-full mt-2">
                    <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                        <div class="md:w-1/3 md:text-right">
                            <label class="text-gray-800 whitespace-no-wrap" for="phone">Telefon</label>
                        </div>
                        <div class="md:w-5/12 text-left md:ml-6">
                            <input name="phone" type="tel" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('phone')) border-orange-600 @endif" id="phone" value="{{ old('phone') }}">
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
        <div class="w-full flex py-6 md:ml-6">
            <div class="w-full flex md:w-9/12">
                <div class="w-full justify-end md:ml-6">
                    <x-button.submit text="Salvează" color="green" for="user_store" class="flex justify-end px-0" />
                </div>
            </div>
        </div>
    </x-slot>
</x-card.card>
@endsection