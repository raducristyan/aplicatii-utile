@if ( session()->has('flash.body') )
<div class="w-full mt-2 absolute z-50 animate__animated animate__fadeInDown" :class="flashClass">
    <div class="w-11/12 md:w-2/3 lg:w-1/2 mx-auto bg-{{ $color }}-200 border-{{ $color }}-500 text-{{ $color }}-700 border-t-4 p-4 rounded-b-lg relative">
        <div class="mr-4">
            <p class="font-bold capitalize">{{ session()->get('flash.type') ?? 'Info'}}!</p>
            <p class="">{!! session()->get('flash.body') !!}</p>
        </div>
        <div @click="changeClass" class="text-gray-500 hover:text-gray-700 cursor-pointer top-0 right-0 m-2 absolute">
            @include('partials.svg.times-circle-regular', ['class' => 'w-6 h-6 fill-current'])
        </div>
    </div>
</div>
@endif