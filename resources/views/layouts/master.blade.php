<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panier Laravel</title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/swiper.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}">
	<link type="text/css" rel="stylesheet" href="{{url('assets/css/animate.css')}}">
	<!-- mon css -->
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/app.min.css')}}">
	
	
</head>


<body>

	<header  id="header">
		@include('partials.nav')
	</header>

	

	<div id="main">
		<div class="grid-2">
			<div class="sidebar content">
			</div>
			<div class="product content">
				@yield('content')  <!-- blade -->
			</div>
		</div>
	</div>

	<footer id="footer">
		@include('partials.footer')
	</footer>

	@yield('scripts')
	<!-- Initialize Swiper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/ScrollToPlugin.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
	<script src="{{url('assets/js/swiper.min.js')}}"></script>
	<!-- Lightbox Gallery -->
	<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <script>
    	var swiper = new Swiper('.swiper-container');
    </script>

	<script>
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
				animateOut: 'fadeOut',
			    animateIn: 'fadeIn',
			    items:1,
			    margin:30,
			    stagePadding:30,
			    smartSpeed:450,
			    dots: true,
			});
		});
	</script>

	<script>
		$(window).on("load", function() {

		  var $landingWrapper = $(".landing-wrapper"),
		      $landingInnerContent = $(".landing-inner-content");

		  // set initial container to half of .landing-inner-content width
		  //TweenMax.set($landingWrapper, {scrollTo: {x: $landingInnerContent.width()/4}, ease: Power2.easeOut});
		  
		  // scroll left and right
		  $landingInnerContent.on("mousemove touchmove", function(e) {
		    if (e.clientX > $landingWrapper.width() / 2) {
		      TweenMax.to($landingWrapper, 2, {
		        scrollTo: {
		          x: "+=350"
		        },
		        ease: Power2.easeOut
		      });
		    } else {
		      TweenMax.to($landingWrapper, 2, {
		        scrollTo: {
		          x: "-=350"
		        },
		        ease: Power2.easeOut
		      });
		    }
		  });

		});
	</script>
</body>
</html>