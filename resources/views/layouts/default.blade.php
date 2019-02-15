<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'mijn blog')</title>
	<link rel="stylessheet" type="text/css" href="{{ asset('css/app.css') }}"
</head>
<body>

	<div class="container">

		@yield('content')

	</div>


	<script src="{{ asset(mix('js/app.js')  }}"
</body>
</html>

<!-- Hier zit er een error hier moeten we op terug komen --?