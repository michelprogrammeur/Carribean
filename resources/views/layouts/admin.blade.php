<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/swiper.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}">
	<link type="text/css" rel="stylesheet" href="{{url('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/slick.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/component.css')}}">

	<link rel="stylesheet" type="text/css" href="{{url('assets/css/lightbox.min.css')}}">
	<!-- mon css -->
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/app.min.css')}}">

	
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

	<footer id="footer">
		@include('partials.footer')
	</footer>

	@yield('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="{{url('assets/js/lightbox.min.js')}}"></script>

	<script src="{{url('assets/js/scrollreveal.min.js')}}"></script>

	<script src="{{url('assets/js/windows_viewport.js')}}"></script>
</body>
</html>