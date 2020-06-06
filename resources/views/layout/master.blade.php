<!DOCTYPE html>
<html lang="ro">

@include('partials.head')

<body class="leading-normal bg-gray-200 .tracking-normal">
    <div id="app" class="flex w-full justify-center">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        @include('partials.preloader')

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @yield('wrapper')
        <!-- ============================================================== -->
        <!-- Message -->
        <!-- ============================================================== -->
        @component('components.flash')
        @endcomponent

    </div>
    @include('partials.scripts')

</body>

</html>