<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
	@if (isset($title)) <title>{{$title}}</title>
	@else <title>Aplicatii Utile</title>
	@endif
	@include('partials.head')
</head>
<body>
	<div class="wrapper">
		@include('partials.navbar')
		<div class="main">
			@yield('content')
		</div>
		@include('partials.footer')
	</div>
</body>
</html>
