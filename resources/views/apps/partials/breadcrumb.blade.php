<!-- ============================================================== -->
<!-- Bread crumb -->
<!-- ============================================================== -->
<div class="py-3">
    <div class="w-full flex flex-col md:flex-row justify-between items-center">
        <div class="flex flex-col items-start">
            <h3 class="text-indigo-600 font-semibold text-2xl">@yield('page-name', 'Dashboard')</h3>
            <ol class="flex items-center text-base">
                <li class="inline-block"><a href="{{ route('dashboard') }}">Acasă</a></li>
                <li class="flex items-center">

                    <svg aria-hidden="true" focusable="false" class="inline-block w-3 h-3 text-gray-400 mx-1 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                        <path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path>
                    </svg>
                </li>
                <li class="inline-block">Dashboard</li>
            </ol>
        </div>

        <div>
            @yield('buttons')
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb -->
<!-- ============================================================== -->