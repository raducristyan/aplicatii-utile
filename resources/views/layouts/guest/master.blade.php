<!DOCTYPE html>
<html lang="ro">
	@include('partials.guest.head')
	<body>
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->

		@include('partials.preloader')

		<!-- ============================================================== -->
		<!-- Main wrapper - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<div id="main-wrapper">

			@include('partials.guest.navbar')

			<!-- ============================================================== -->
			<!-- Page wrapper  -->
			<!-- ============================================================== -->
			<div class="page-wrapper">
				<!-- ============================================================== -->
				<!-- Container fluid  -->
				<!-- ============================================================== -->
				<div class="container-fluid">

					@yield('page-wrapper')

					@include('partials.footer')

				</div>
				<!-- ============================================================== -->
				<!-- End Container fluid  -->
				<!-- ============================================================== -->
			
			</div>
			<!-- ============================================================== -->
			<!-- End page wrapper  -->
			<!-- ============================================================== -->


			
		</div>
		<!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- Message -->
		<!-- ============================================================== -->
		@include('vendor.flash.message')
		@include('partials.scripts')
		<script>
			function fadeOutMsg () {
				$('.app-msg').not('.alert-important').removeClass('fadeInDown').addClass('fadeOutUp');
			};

			$(function(){
				window.setTimeout("fadeOutMsg()", 5000);
			});

			$('#flash-overlay-modal').modal();
		</script>
	</body>
</html>
