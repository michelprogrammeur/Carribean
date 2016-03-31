
<header id="header">

<section class="menu-site">
	<a class="logo" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}"></a>

	<nav class="navbar">
		<ul>
			<li><a class="hvr-underline-from-center" href="{{url('/')}}">Accueil</a></li>
			<li><a class="hvr-underline-from-center" href="{{url('agence')}}">L'agence</a></li>
			<li><a class="hvr-underline-from-center" href="{{url('guadeloupe')}}">Les îles de Guadeloupe</a></li>
			<li class="prestation">
				<a class="hvr-underline-from-center" href="{{url('prestations')}}">Prestations</a>

				<ul class="nav-nv2">
					<li>
						<a href="{{url('ceremonie')}}">Cérémonie</a>
						<p>Formule Alpinia</p>
					</li>
					<li>
						<a href="{{url('formules-evenements-prives')}}">Evenements privés</a>
						<p>Formule Anthurium</p>
						<p>Formule Allamanda</p>
					</li>
					<li>
						<a href="{{url('conciergerie')}}">Conciergerie</a>
						<p>Formule Hibiscus</p>
					</li>
				</ul>

			</li>
			<li><a class="hvr-underline-from-center" href="{{url('galerie-categories')}}">Galerie</a></li>

			<li><a class="hvr-underline-from-center" href="{{url('livredor')}}">Livre d'or</a></li>
			<li>
				<a class="hvr-underline-from-center" href="{{url('contact')}}">Contact</a>
			</li>

		@if(Auth::check())
			<li class="dashboard"><a href="{{url('dashboard')}}">Dashboard</a></li>

			<li class="deco"><a href="{{url('logout')}}">Déconnexion</a></li>
		@else 
			
		@endif

		</ul>
	</nav>

	<span class="btnEvenement">
		<a href="{{url('login')}}">Mon évènement</a>
	</span>
</section>

<section class="responsive-menu">
	<div class="bar-menu">
		<p>FR/EN</p>
		<img src="{{ asset('assets/images/logo.png') }}">
	</div>

	<div id="dl-menu" class="dl-menuwrapper">
		<button class="dl-trigger btnMenuResponsive"></button>
		<ul class="dl-menu">
			<li>
				<a href="{{url('/')}}">Accueil</a>
			</li>
			<li>
				<a href="{{url('agence')}}">L'agence</a>
			</li>
			<li>
				<a href="{{url('')}}">Les îles de Guadeloupe</a>
			</li>
			<li>
				<a href="#">Prestation</a>
				<ul class="dl-submenu">
					<li>
						<a href="{{url('')}}">Cérémonie</a>
					</li>
					<li>
						<a href="{{url('formules-evenements-prives')}}">Evenements privés</a>
					</li>
					<li>
						<a href="{{url('conciergerie')}}">Conciergerie</a>
					</li>
				</ul>
			</li>
			<li><a href="{{url('galerie-categories')}}">Galerie</a></li>

			<li><a href="{{url('livredor')}}">Livre d'or</a></li>
			<li>
				<a href="{{url('contact')}}">Contact</a>
			</li>
			@if(Auth::check())
				<li class="dashboard"><a href="{{url('dashboard')}}">Dashboard</a></li>

				<li class="deco"><a href="{{url('logout')}}">Déconnexion</a></li>
			@else 
				
			@endif
			<li>
				<span class="btnEventResposive">
					<a href="{{url('login')}}">Mon évènement</a>
				</span>
			</li>
			<li>
				<ul class="reseaux">
					<li class="picto-reseaux"><a href=""><img src="../assets/images/facebook-responsive-footer.png"></a></li>
					<li class="picto-reseaux"><a href=""><img src="../assets/images/insta-responsive-footer.png"></a></li>
					<li class="picto-reseaux"><a href=""><img src="../assets/images/pinterest-responsive-footer.png"></a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /dl-menuwrapper -->
</section>

</header>
