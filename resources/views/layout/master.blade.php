<!DOCTYPE html>
<html lang="ro">

@include('partials.head')

<body class="leading-normal bg-gray-200">
	<div id="app" class="flex w-full">
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
		@include('vendor.flash.message')
	</div>
	@include('partials.scripts')

</body>

</html>