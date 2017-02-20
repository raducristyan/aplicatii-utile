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
	<div id="app">
		@include('partials.navbar')
		<div class="container-fluid">
			@yield('content')
			<app></app>
		</div>
	</div>
	@include('partials.footer')
</body>
</html>
