<div class="w-full mt-2 absolute z-50">
    <div class="w-11/12 md:w-2/3 lg:w-1/2 mx-auto bg-green-100 border-green-500 text-green-700 border-t-4 p-4 rounded-b-lg relative animated" :class="[{'fadeInDown': activeClass}, {'fadeOutUp': !activeClass}]">
        <div class="mr-4" role="alert">

            @if ( session()->has('flash.type') )
            <p class="font-bold capitalize">Succes!</p>
            @endif

            <p class="capitalize">{{ session()->get('flash.body') }}</p>
        </div>
        <svg aria-hidden="true" focusable="false" @click="closeModal('flash-message')" class="w-6 h-6 fill-current text-green-500 hover:text-green-700 cursor-pointer top-0 right-0 m-2 absolute" viewBox="0 0 512 512">
            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2 62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17z"></path>
        </svg>
    </div>
</div>