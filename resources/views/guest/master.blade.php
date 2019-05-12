<!DOCTYPE html>
<html lang="ro">
	@include('guest.partials.head')
	<body>
		<div id='app'>
			<!-- ============================================================== -->
			<!-- Preloader - style you can find in spinners.css -->
			<!-- ============================================================== -->

			@include('partials.preloader')

			<!-- ============================================================== -->
			<!-- Main wrapper - style you can find in pages.scss -->
			<!-- ============================================================== -->
			<div id="main-wrapper">

				@include('guest.partials.navbar')

				<!-- ============================================================== -->
				<!-- Page wrapper  -->
				<!-- ============================================================== -->
				<div class="page-wrapper">

					@yield('page-wrapper')
					@include('guest.partials.footer')

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
		</div>

		@include('partials.scripts')
		<script>
			function fadeOutMsg () {
				$('.app-msg').not('.alert-important').removeClass('fadeInDown').addClass('fadeOutUp');
			};

			$(function(){
				window.setTimeout("fadeOutMsg()", 5000);
			});

			$('#flash-overlay-modal').modal();

			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		</script>
	</body>
</html>
