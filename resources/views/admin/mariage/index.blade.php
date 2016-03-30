@extends('layouts.admin')

@section('content')
<section class="section-liste-mariages">
	<div class="section-mariage-container">

		<h1 class="pageListeMariagesTitle"><span>mariages en cours</span> / historique<h1>
		<a class="btnCreateMariage" href="{{ url('mariage/create') }}" role="button"><p class="">Nouveau mariage</p></a>

		<ul>
			@forelse($mariages as $mariage)
			<li class="container-cartClient">
				<a class="cartClient" href="{{url('mariage/'.$mariage->id)}}">
					<ul>
						<li><img src="../assets/images/couple.jpg"></li>
						<li class="cartClientTitle">Mariage#{{ $mariage->id }}</li>
						@forelse ($mariage->users as $user)
					    	<li>
					    		<span class="cartClientDonneesName">{{ $user->name }}</span>
					    	</li><li>
					    		<p class="cartClientMariageDate">25/07/2017</p>
					    	</li><li>
					    		<p class="cartClientDonneesTitle">Id:
					    		<span class="cartClientDonnees">{{ $user->email }}</span></p>
					    	</li><li>
					    		<p class="cartClientDonneesTitle">Mdp:
					    		<span class="cartClientPassword">{{ $user->password }}</span></p>
					    	</li>
						@empty
							<p>no tags</p>
						@endforelse

					</ul>
				</a>
				<p class="btn-mariage-container"><a class="btn-mariage-delete" href="{{url('mariageDelete', $mariage->id)}}"></a></p>
			@empty
			     <p>Pas encore de mariage</p>
			</li>
			@endforelse
		</ul>
	</div>
</section>
@stop