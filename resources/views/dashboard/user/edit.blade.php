@extends('layouts.apps.default')

@section('page-name')
Editare profil
@endsection

@section('breadcrumbs-links')
@each('partials.breadcrumbsLinks', [['name' => 'Acasă', 'url' => route('dashboard.')], ['name' => 'Utilizatori', 'url' => route('dashboard.admin.user.index')]], 'link')
@endsection

@section('last-link')
{{ $user->full_name }}
@endsection

@section('content')


<x-card.card class="flex-col">
    <x-slot name="title">
        <x-section.title text="Editare profil utilizator" />
    </x-slot>
    <x-form.form url="{{ route('dashboard.admin.user.update', $user) }}" method="PATCH" id="user_update">
        <div class="flex flex-col py-8">
            <div class="flex flex-col items-center w-full mt-2">
                <div class="flex flex-col md:flex-row md:items-center w-full  md:mt-1">
                    <div class="md:w-1/3 md:text-right">
                        <label class="text-gray-800 whitespace-no-wrap md:text-right" for="email">Prenume</label>
                    </div>
                    <div class="md:w-5/12 text-left md:ml-6">
                        <input name="email" type="email" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:outline-none rounded-md shadow-sm" readonly value="{{ $user->email }}">
                    </div>
                </div>
                <div class="w-full flex justify-end -mt-1">
                    <div class="w-full md:w-2/3">
                        @if ($errors->has('email'))
                        <small class="w-full md:w-1/2 md:ml-6 font-normal text-sm text-orange-600">
                            {{ $errors->first('email') }}
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
                        <label class="text-gray-800 whitespace-no-wrap md:text-right" for="first_name">Prenume</label>
                    </div>
                    <div class="md:w-5/12 text-left md:ml-6">
                        <input name="first_name" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('first_name')) border-orange-600 @endif" id="first_name" value="{{ $user->first_name }}">
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
                        <label class="text-gray-800 whitespace-no-wrap md:text-right" for="last_name">Nume</label>
                    </div>
                    <div class="md:w-5/12 text-left md:ml-6">
                        <input name="last_name" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('last_name')) border-orange-600 @endif" id="last_name" value="{{ $user->last_name }}">
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
                        <label class="text-gray-800 whitespace-no-wrap md:text-right" for="job">Funcție</label>
                    </div>
                    <div class="md:w-5/12 text-left md:ml-6">
                        <input name="job" type="text" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('job')) border-orange-600 @endif" id="job" value="{{ $user->job }}">
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
                        <label class="text-gray-800 whitespace-no-wrap md:text-right" for="mobile">Mobil</label>
                    </div>
                    <div class="md:w-5/12 text-left md:ml-6">
                        <input name="mobile" type="tel" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('mobile')) border-orange-600 @endif" id="mobile" value="{{ $user->mobile }}">
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
                        <label class="text-gray-800 whitespace-no-wrap md:text-right" for="phone">Telefon</label>
                    </div>
                    <div class="md:w-5/12 text-left md:ml-6">
                        <input name="phone" type="tel" class="w-full p-2 my-2 bg-gray-100 border border-gray-200 text-gray-800 font-normal focus:border-indigo-500 focus:outline-none focus:bg-gray-200 rounded-md shadow-sm transition duration-500 @if ($errors->has('phone')) border-orange-600 @endif" id="phone" value="{{ $user->phone }}">
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
    </x-form.form>

    <x-slot name="footer">
        <div class="w-full flex justify-end py-6">
            <div class="w-full md:w-2/3">
                <div class="w-full md:w-1/2 md:ml-6">
                    <x-button.submit text="Salvează" color="green" for="user_update" />
                </div>
            </div>
        </div>
    </x-slot>
</x-card.card>

@endsection