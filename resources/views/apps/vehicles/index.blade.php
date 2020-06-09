@extends('apps.layout')

@section('buttons')
<button class="flex items-center bg-indigo-500 text-gray-200 text-semibold px-4 py-2 hover:bg-indigo-700 focus:underline-none focus:shadow-outline border-indigo-800 border-b-4 rounded-t shadow transition duration-300" @click="">
    <span>Adaugă vehicul</span>
    <svg aria-hidden="true" focusable="false" data-icon="plus" class="w-4 h-4 ml-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
        <path fill="currentColor" d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path>
    </svg>
</button>
@endsection

@section('content')
<div class="w-full h-full p-4 my-6 bg-white rounded shadow-md">
    <div class="w-full flex flex-row justify-between">
        <div class="w-5/12">
            <p class="font-semibold">Certificate de înregistrare</p>
            <small><i class="fal fa-angle-double-right" aria-hidden="true"></i> vehicule neînmatriculabile</small>
        </div>


        <div class="w-5/12"></div>
    </div>

    @if (!isset($vehicles) || count($vehicles) == 0)
    <div class="flex justify-center">
        <div class=" py-20 text-center">
            <h1 class="text-4xl font-light">Nu aveti certificate de inregistrare</h1>
        </div>
    </div>
</div>
@else
@include('apps.vehicles.partials._vehiclesCertificates')
@endif
@endsection