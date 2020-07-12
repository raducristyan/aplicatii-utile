<!-- ============================================================== -->
<!-- Bread crumb -->
<!-- ============================================================== -->
<div class="py-4">
    <div class="w-full flex flex-col md:flex-row justify-between items-center">
        <div class="flex flex-col md:flex-row items-baseline">
            <div class="w-full text-center">
                <h3 class="text-indigo-600 font-semibold text-xl">@yield('page-name', 'Dashboard')</h3>
            </div>
            <div class="w-full text-center">
                <ol class="flex items-baseline md:ml-8 text-base">
                    <li class="inline-block">
                        <a href="{{ route('dashboard.') }}">@include('partials.svg.home-duotone', ['class' => 'w-4 h-4'])
                        </a>
                    </li>
                    @yield('breadcrumbs-links')
                    @include('partials.svg.separator')
                    <li class="inline-block whitespace-no-wrap">
                        @yield('last-link')
                    </li>
                </ol>
            </div>
        </div>

        <div>
            @yield('buttons')
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb -->
<!-- ============================================================== -->