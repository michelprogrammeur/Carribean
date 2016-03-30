
<header id="header">
	<a class="logo" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}"></a>

	<nav class="navbar">
		<ul>

			<li><a href="{{url('/')}}">Accueil</a></li>
			<li><a href="{{url('agence')}}">L'agence</a></li>
			<li><a href="{{url('')}}">Les îles de Guadeloupe</a></li>
			<li class="prestation">
				<a href="{{url('prestations')}}">Prestations</a>
				<div>
				<ul class="nav-nv2">
					<li>
						<a href="{{url('')}}">Cérémonie</a>
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
				</div>
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

		</ul>
	</nav>

	


	<span class="btnEvenement">
		<a href="{{url('login')}}">Mon évènement</a>
	</span>

</header>
