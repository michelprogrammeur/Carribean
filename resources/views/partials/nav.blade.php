
<header id="header">
	<a class="logo" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}"></a>

	<nav class="navbar">
		<ul>

			<li><a href="{{url('/')}}">Accueil</a></li>
			<li><a href="{{url('agence')}}">L'agence</a></li>
			<li><a href="{{url('')}}">Les îles de Guadeloupe</a></li>
			<li>
				<a href="{{url('prestations')}}">Prestations</a>
				<ul>
					<li><a href="{{url('')}}">Mariage</a></li>
					<li><a href="{{url('formules-evenements-prives')}}">Evenements privés</a></li>
					<li><a href="{{url('conciergerie')}}">Conciergerie</a></li>
				</ul>
			</li>
			<li><a href="{{url('galerie-categories')}}">Galerie</a></li>

			<li><a href="{{url('livredor')}}">Livre d'or</a></li>
			<li>
				<a href="{{url('contact')}}">Contact</a>
				<ul>
					<li><a href="{{url('livredor')}}">Mentions légales</a></li>
				</ul>
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
