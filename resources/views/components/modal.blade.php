<div class="relative z-30">
<!-- Modal overlay -->
    <div class="fixed top-0 left-0 right-0 bottom-0 bg-gray-100 opacity-75 z-20">
    </div>
        <!-- Modal container -->
        <div class="flex items-center justify-center fixed top-0 left-0 right-0 bottom-0 py-16 font-sans z-30 overflow-y-scroll" id="{{ $modal_id }}">
            <!-- Modal -->
            <div class=" bg-white flex flex-col items-center rounded shadow-xl w-5/6 max-w-2xl mx-auto my-auto z-40 p-6">
                <!-- Modal header -->
                <div class="w-full flex justify-between">
                    <h1 class="text-gray-700 font-semibold text-2xl">{{ $title }}</h1>
                    <svg aria-hidden="true" focusable="false" @click="closeModal" class="w-6 h-6 fill-current text-gray-500 hover:text-gray-700 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2 62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17z"></path>
                    </svg>
                </div>
                <!-- Modal content -->
                <div class="flex w-full py-4">
                    {{ $slot }}
                </div>
                <!-- Modal footer -->
                <div class="flex w-full justify-end py-2">
                    <div>
                        {{ $footer }}
                    </div>
                </div>
            </div>
        </div>
</div>