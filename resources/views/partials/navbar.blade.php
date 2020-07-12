<nav id="header" class="fixed w-full z-20 top-0 shadow-md">

    <div class="">
        <div class="bg-blue-900 w-full px-8 mx-auto flex items-center justify-between mt-0 py-2">
            <div class="inline-block md:hidden pr-4">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none transition duration-500" @click="navBarToggle = !navBarToggle">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>

            <div class="flex items-center w-auto md:pl-0">
                <a class="inline-block text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                    @include('partials.svg.primary-logo', ['class' => 'h-8'])
                </a>
            </div>
            <div class="pr-0">
                <div class="flex relative float-right">

                    <div class="relative text-sm">

                        <button id="userButton" class="flex items-center focus:outline-none mr-3" ref="userMenuBtn" @click="userMenu.isVisible = !userMenu.isVisible">
                            @include('partials.svg.user-circle-duotone', ['class' => 'w-6 h-6 text-gray-500'])

                            <span class="hidden md:inline-block ml-2 text-gray-500">{{ auth()->user()->full_name }} </span>
                            @include('partials.svg.chevron-down-regular', ['class' => 'w-4 h-4 ml-1 text-gray-600'])
                        </button>
                        <div id="userMenu" class="bg-white absolute py-3 mt-10 top-0 right-0 min-w-full overflow-auto z-30 rounded shadow-lg" :class="{invisible: !userMenu.isVisible}" v-closable=" { exclude: ['userMenuBtn'], handler: 'onClose' }">
                            <ul class=" list-reset">
                                <li><a href="#" class="px-3 py-2 block text-gray-900 hover:bg-gray-200 no-underline hover:no-underline">My account</a></li>
                                <li><a href="#" class="px-3 py-2 block text-gray-900 hover:bg-gray-200 no-underline hover:no-underline">Notifications</a></li>
                                <li>
                                    <hr class="border-t px-3 my-1 border-gray-200">
                                </li>
                                <li><a href="#" class="px-3 py-2 block text-red-800 hover:bg-gray-200 no-underline hover:no-underline" @click="logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w-full md:flex md:flex-grow items-center md:w-auto md:visible lg:mt-0 bg-white px-8 py-2 md:py-0 z-20" id="nav-content" :class="{hidden: !navBarToggle}">
            <ul class="list-reset md:flex flex-1 items-end md:px-0">
                <li class="md:mr-6 mt-4 md:mt-0">
                    <a href="{{ route('dashboard.') }}" class="flex items-center py-1 md:py-3 pl-1 align-middle no-underline hover:text-gray-900 border-b-2 transition duration-500 @if (Request::is('dashboard*')) text-orange-600 border-orange-600 @else text-gray-600 hover:text-gray-900 border-white hover:border-orange-600 @endif">
                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 fill-current text-gray-800 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
                        </svg>
                        <span class="pb-1 md:pb-0 text-sm">Dashboard</span>
                    </a>
                </li>
                <li class="md:mr-6 mt-4 md:mt-0">
                    <a href="{{ route('apps.') }}" class="flex items-center py-1 md:py-3 pl-1 no-underline border-b-2 transition duration-500 @if (Request::is('apps*')) text-pink-600 border-pink-600 @else text-gray-600 hover:text-gray-900 border-white hover:border-pink-600 @endif">
                        <svg aria-hidden="true" focusable="false" class="w-5 h-5 fill-current text-gray-800 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path fill="currentColor" d="M248 104c-84.02 0-152 68-152 152 0 84.02 68 152 152 152 84.02 0 152-68 152-152 0-84.02-68-152-152-152zm0 256c-57.35 0-104-46.65-104-104s46.65-104 104-104 104 46.65 104 104-46.65 104-104 104zm0-352C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm0 448c-110.28 0-200-89.72-200-200S137.72 56 248 56s200 89.72 200 200-89.72 200-200 200zm0-256c-30.88 0-56 25.12-56 56s25.12 56 56 56 56-25.12 56-56-25.12-56-56-56z"></path>
                        </svg>
                        <span class="pb-1 md:pb-0 text-sm">Aplicații</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>