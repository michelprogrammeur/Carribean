@extends('layouts.admin')

@section('content')
	<h1 class="pageListeMariagesTitle">Liste des mariages actuels<h1>
	<a class="btnCreateMariage" href="{{ url('mariage/create') }}" role="button">Creater un mariage</a>
	
	<div class="container-cartClient">
	@forelse($mariages as $mariage)
		<a class="cartClient" href="{{url('mariage/'.$mariage->id)}}">
			<ul>
				<h2 class="cartClientTitle">Mariage n°{{ $mariage->id }}</h2>
				@forelse ($mariage->users as $user)
			    	<li>
			    		<span class="cartClientDonneesName">{{ $user->name }}</span>
			    	</li><li>
			    		<p class="cartClientDonneesTitle">Email:</p>
			    		<span class="cartClientDonnees">{{ $user->email }}</span>
			    	</li><li>
			    		<p class="cartClientDonneesTitle">Mot de passe:</p>
			    		<span class="cartClientDonnees">{{ $user->password }}</span>
			    	</li>
				@empty
					<p>no tags</p>
				@endforelse

			</ul>
		</a>
		<a href="{{url('mariageDelete', $mariage->id)}}">Delete</a>
	@empty
	     <p>Pas encore de mariage</p>
	@endforelse
	</div>
@stop