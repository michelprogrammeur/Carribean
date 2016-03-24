

<ul class="navbar">

	<li><a href="{{url('/')}}">Accueil</a></li>
	<li><a href="{{url('agence')}}">L'agence</a></li>
	<li>
		<a href="{{url('prestations')}}">Prestations</a>
		<ul>
			<li><a href="{{url('')}}">Mariage</a></li>
			<li><a href="{{url('formules-evenements-prives')}}">Evenements privés</a></li>
			<li><a href="{{url('conciergerie')}}">Conciergerie</a></li>
		</ul>
	</li>
	<li><a href="{{url('galerie')}}">Galerie</a></li>

	<li><a href="{{url('livredor')}}">Livre d'or</a></li>
	<li>
		<a href="{{url('contact')}}">Contact</a>
		<ul>
			<li><a href="{{url('livredor')}}">Mentions légales</a></li>
		</ul>
	</li>

@if(Auth::check())
	<li><a href="{{url('dashboard')}}">Dashboard</a></li>

	<li><a href="{{url('logout')}}">Déconnexion</a></li>
@else 
	
@endif

</ul>

<a href="{{url('login')}}">Mon evenement</a>


