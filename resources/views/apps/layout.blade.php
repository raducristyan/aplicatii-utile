@extends('layout.master')

@section('wrapper')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        @include('apps.partials.navbar')
        @include('apps.partials.left-sidebar')
        
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @include('apps.partials.breadcrumb')
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                @yield('page-wrapper')
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                @include('apps.partials.right-sidebar')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            @include('partials.footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    </div>

    @push('scripts')
        <script>
            $('body').addClass('fix-header card-no-border');
            $('.logout').on('click', function(e){
                e.preventDefault();
                $('#logout-form').submit();
            });
        </script>
    @endpush
@endsection