<!DOCTYPE html>
<html lang="ro">

	@include('partials.head')
	<body>
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div class="preloader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
		</div>
		
		<!-- ============================================================== -->
		<!-- Main wrapper - style you can find in pages.scss -->
		<!-- ============================================================== -->
		@yield('wrapper')
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
