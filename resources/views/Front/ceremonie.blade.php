@extends('layouts.master')

@section('content')
	<section class="section-head-ceremonie">

		<div class="ceremonie-container">
	        <img src="{{ asset('assets/images/slider-home.jpg') }}" alt="">
 			<p class="accroche-ceremonie">Cérémonie</p>
	    </div>

		<section class="formules-ceremonie">
			<h2 class="section-title">Caribbean <span>Planner</span></h2>
			<p class="section-citation"><span class="title-ceremonie">Nos Forfaits de érémonie.</span> Toutes les photos sont des créations de Caribbean Planner</p>

			<div class="formule-container">
				<div class="formule-container-img">
					<img class="mg-formule-1" src="{{ asset('assets/images/img-formule-1.jpg') }}">
					<img class="mg-formule-2" src="{{ asset('assets/images/img-formule-2.jpg') }}">
				</div>

				<div class="formule-container-text">
					<h2 class="formule-ceremonie-title">Cérémonie intimiste de 2 à 10 personnes</h2>
					<p class="formule-ceremonie-name">f a i t : C P 6</p>
					<ul>
						<li>L’organisation et la gestion d’une magnifique cérémonie d’engagement sur la plage ou en jardin</li>
						<li>Toute la documentation et toutes les informations utiles à la bonne réalisation de celle-ci</li>
						<li>Des contacts réguliers afin de planifier l’événement</li>
						<li>Elle peut être totalement intime avec uniquement votre couple ou avec jusqu’à 10 personnes (supplément pour + de 10 personnes)</li>
						<li>Vous lirez vos voeux au milieu d’un coeur de pétales creusé dans le sable ou déposé sur l’herbe</li>
						<li>La décoration d’une partie du lieu sera assurée par notre équipe</li>
						<li>Le tarif inclus jusqu’à 10 chaises en bois pour vos convives</li>
						<li>Nous vous servirons un cocktail créole par personne à base de jus locaux et d’alcool** des îles</li>
						<li>Un fond musical créole sera diffusé à la fin</li>
						<li>Il y aura une personne spécialement dédiée pour vous qui immortalisera votre cérémonie</li>
						<li>Toutes les photos vous serons transmises par internet</li>
					</ul>
					<div class="btn-container-ceremonie">
						<span class="btnFormule-1">
							<a href="{{url('contact-formulaire')}}">Réserver</a>
						</span>
					</div>
				</div>
			</div>

			<div class="formule-container">
				<div class="formule-container-img">
					<img class="mg-formule-3" src="{{ asset('assets/images/img-formule-3.jpg') }}">
					<img class="mg-formule-4" src="{{ asset('assets/images/img-formule-4.jpg') }}">
				</div>

				<div class="formule-container-text">
					<h2 class="formule-ceremonie-title">cérémonie totalement personnalisée</h2>
					<p class="formule-ceremonie-name">
					F o r f a i t : C P 11</p>
					<ul>
						<li>Conseil et organisation d’une magnifique cérémonie d’engagement sur la plage ou en jardin</li>
						<li>Toute la documentation et toutes les informations utiles à la bonne réalisation de celle-ci</li>
						<li>La recherche de prestataires diverses selon vos souhaits</li>
						<li>a création d’une proposition globale</li>
						<li>Des contacts réguliers afin de planifier votre événement</li>
						<li>Validation du planning général avec l’ensemble de vos intervenants</li>
						<li>Elaboration d’un déroulé de Jour J</li>
						<li>Des propositions sur planches décoration</li>
						<li>Mise en place de votre décoration de mariage</li>
						<li>La possibilité de faire un cocktail dinatoire sur le sable</li>
						<li>La possibilité de faire un diner sur le sable</li>
					</ul>
					<div class="btn-container-ceremonie">
						<span class="btnFormule-1">
							<a href="{{url('contact-formulaire')}}">Réserver</a>
						</span>
					</div>
				</div>
			</div>

		</section>
	</section>
@stop