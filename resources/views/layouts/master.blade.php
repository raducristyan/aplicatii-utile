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
	@include('partials.navbar')
	<div class="container-fluid">
		@yield('content')
	</div>
	@include('partials.footer')
</body>
</html>
