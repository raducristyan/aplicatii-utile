@extends('layouts.apps.default')

@section('last-link')
Acasă
@endsection

@section('content')

<div class="w-full flex flex-col md:flex-row justify-between">
    <!-- Column -->
    <div class="w-full md:w-6/12 lg:w-4/12 md:mr-6">
        <x-card.card class="py-6 mb-6 lg:mb-0">
            <div class="flex flex-col border-b border-gray-300">
                @include('partials.svg.logo', ['class' => 'w-32 md:w-48'])
                <h4 class="py-2 text-gray-700 text-lg text-center uppercase tracking-wider"><strong>{{ auth()->user()->institution->name }}</strong></h4>
                <h6 class="text-gray-600 text-center">Codul fiscal {{ auth()->user()->institution->cif }}</h6>
                <div class="flex py-4">
                    <a href="" class="w-1/2 flex justify-center items-center cursor-pointer hover:text-indigo-600">
                        @include('partials.svg.users-duotone', ['class' => 'w-6 h-6 mr-2'])
                        <span class=" font-medium text-lg">
                            {{ auth()->user()->institution->users()->count()}}
                        </span>
                    </a>
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
                    <small class="text-gray-800 text-sm font-semibold">Adresa de email </small>
                    <h6 class="break-words text-gray-700 font-normal">{{ auth()->user()->institution->email ?? 'Nu ați completat adresa de email.'}}</h6>
                </div>
                <div class="py-2">
                    <small class="text-gray-800 text-sm font-semibold">Telefon</small>
                    <h6 class="text-gray-700 font-normal">{{ auth()->user()->institution->mobile ?? 'Nu ați completat numărul de telefon.'}}</h6>
                </div>
                <div class="py-2">
                    <small class="text-gray-800 text-sm font-semibold">Adresa</small>
                    @forelse ( auth()->user()->institution->address as $address )
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

            @admin
            <div class="w-full flex-grow-0">
                <div class="flex justify-center pt-3 text-sm">

                    <x-button.link url="{{ route('dashboard.admin.institution.edit', $institution) }}" color='indigo' text="Editează">
                        @include('partials.svg.pencil-regular')
                    </x-button.link>
                </div>
            </div>
            @endadmin
        </x-card.card>
    </div>
    <!-- Column -->
    <div class="w-full md:w-6/12 lg:w-8/12">
        @yield('dashboard-content')
    </div>
</div>

@endsection