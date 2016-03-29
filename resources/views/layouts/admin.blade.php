<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{url('assets\bootstrap\css\bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/app.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{url('assets/css/lightGallery.css')}}">
	
</head>

<body>

	<header  id="header">
		@include('partials.nav')
	</header>
	

	<div id="main">
		<div class="show-alert">
			@include('partials.flash')
		</div>
		<div class="content">
			@yield('content')  <!-- blade -->
		</div>
	</div>

	<footer>
	</footer>

	@yield('scripts')
	<script src="{{url('assets/js/jquery.min.js')}}"></script>
	<script src="{{url('assets/js/lightGallery.min.js')}}"></script>
</body>
</html>