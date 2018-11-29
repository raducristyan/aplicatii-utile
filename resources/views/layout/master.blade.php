<!DOCTYPE html>
<html lang="ro">

	@include('partials.head')
	<body>
		<div id='app'>
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
