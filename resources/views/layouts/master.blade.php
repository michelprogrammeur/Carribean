<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panier Laravel</title>
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
	
	<script src="{{url('assets/js/modernizr.custom.js')}}"></script>
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
	<script src="{{url('assets/js/lightbox.min.js')}}"></script>

	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/ScrollToPlugin.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>

	<script src="{{url('assets/js/slick.min.js')}}"></script>

	<script src="{{url('assets/js/jquery.dlmenu.js')}}"></script>
	<script src="{{url('assets/js/swiper.min.js')}}"></script>

	<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{url('assets/js/scrollreveal.min.js')}}"></script>

	<script src="{{url('assets/js/windows_viewport.js')}}"></script>
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
		$(document).ready(function() {
	 		if (!('open' in document.createElement('details'))) {
				$("details").each(function() {
			      	$(this).find("summary").show().click(function() {
			        	$(this).siblings().toggle();
			        	$(this).parent('details').toggleClass('open');
			    	});
				    var opened = $(this).attr("open");
				    if(opened==undefined) {
				        $(this).children().hide();
				        $(this).children("summary").show();
				    }
	    		});
		  	// Fermeture de la condition et de $(document).ready
		  	}
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.slider-nav').slick({
				centerMode: true,
				centerPadding: '60px',
				slidesToShow: 1,
				autoplay: true,
				autoplaySpeed: 3000,
				arrows: false,
			  responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '80px',
			        slidesToShow: 1
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        arrows: false,
			        centerMode: true,
			        centerPadding: '80px',
			        slidesToShow: 1
			      }
			    }
			  ]
			});
		});
	</script>

	<script>
	$(function() {
		$( '#dl-menu' ).dlmenu({
			animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
		});
	});
	</script>

	<script>
	    lightbox.option({
	      'resizeDuration': 200,
	      'wrapAround': true
	    })
	</script>

	<script>
		window.sr = ScrollReveal();

		sr.reveal('.logo', { 
			origin      : 'top',
			distance    : '20px',
			duration    : 500,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0,
		});

		sr.reveal('.navbar', { 
			origin      : 'top',
			distance    : '0px',
			duration    : 1300,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0,
		});

		sr.reveal('.accroche', { 
			origin      : 'bottom',
			distance    : '40px',
			duration    : 1300,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0,
		});


		sr.reveal('.quota li', { 
			origin      : 'top',
			distance    : '0px',
			duration    : 1100,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0.8,
		});



		sr.reveal('.pictos', { 
			origin      : 'bottom',
			distance    : '80px',
			duration    : 1000,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0,
		});

		sr.reveal('.ceremonie', { 
			origin      : 'bottom',
			distance    : '60px',
			duration    : 600,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0,
		});

		sr.reveal('.reception', { 
			origin      : 'bottom',
			distance    : '60px',
			duration    : 1200,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0,
		});

		sr.reveal('.conciergerie', { 
			origin      : 'bottom',
			distance    : '60px',
			duration    : 1800,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0,
		});


		sr.reveal('.slider-nav', { 
			origin      : 'bottom',
			distance    : '40px',
			duration    : 1000,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0,
		});

		sr.reveal('.avis-container', { 
			origin      : 'bottom',
			distance    : '40px',
			duration    : 1000,
			delay       : 0,
			rotate      : { x: 0, y: 0, z: 0 },
			opacity     : 0,
			scale       : 0,
		});
	</script>
</body>
</html>