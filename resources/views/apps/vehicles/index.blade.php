@extends('layouts.apps.default')

@section('buttons')
<x-button.link text="Adaugă certificat" url="{{ route('apps.vehicles.create') }}" />
@endsection

@section('page-name')
Certificate de înregistrare
@endsection

@section('breadcrumbs-links')
@each('partials.breadcrumbsLinks', [['name' => 'Aplicații', 'url' => route('apps')]], 'link')
@endsection

@section('last-link')
Vehicule
@endsection

@section('content')
<x-section.title text="Certificate" />

<div class="w-full h-full p-4 my-2 bg-white rounded shadow-md">
    <div class="w-full flex flex-row justify-between">

    </div>

    @if (!isset($vehicles) || count($vehicles) == 0)
    <div class="h-full flex justify-center flex-grow">
        <div class="flex items-center py-20 text-center">
            <h1 class="text-4xl font-light">Nu aveți vehicule înregistrate</h1>
        </div>
    </div>
    @else
    @include('apps.vehicles.partials._certificates')
    @endif
</div>
@endsection