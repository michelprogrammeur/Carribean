
@extends('layouts.master')

@section('content')
	<section class="slider">
		<div class="swiper-container">
	        <div class="swiper-wrapper">
	            <div class="swiper-slide image1"></div>
	            <div class="swiper-slide image2"></div>
	            <div class="swiper-slide image3"></div>
	            <div class="swiper-slide image4"></div>
	        </div>

	         <p class="accroche">Vivez une aventure inoubliable</p>
	    </div>
    </section>

	<section class="pictos">
		<div class="wrapper">
			<ul>
				<li>
					<img src="../assets/images/ceremonie-2.png">
					<p class="titre-pictos">Cérémonie</p>
				</li>
				<li>
					<img src="../assets/images/reception-2.png">
					<p class="titre-pictos">Réception</p>
				</li>
				<li>
					<img src="../assets/images/conciergerie-2.png">
					<p class="titre-pictos">Conciergerie</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="agence">
		<h2 class="section-title">Caribbean <span>Planner</span></h2>
		<p class="section-citation">Organise le mariage de vos rêves en Guadeloupe</p>
		<div class="agence-img">
			<div class="wrapper">
				<div class="agence-container--text">
					<p>Depuis 2010, nous organisons et coordonnons vos évènements en Guadeloupe. Mariage, renouvellements de voeux, cérémonie laïque, activités touristiques.... Selon vos envies, nous planifions votre semaine de vacances ou uniquement une réception.</p>
					<div class="btnLire">
						<a href="">Lire la suite</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="quota">
		<div class="wrapper">
			<ul>
				<li>
					<span class="quota-nombre">78</span>
					<p class="quota-text">évènements dans les îles de Guadeloupe</p>
				</li>
				<li>
					<span class="quota-nombre">76</span>
					<p class="quota-text">couples mariés depuis 2009</p>
				</li>
				<li>
					<span class="quota-nombre">06</span>
					<p class="quota-text">Années d’expériences</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="prestations">
		<div class="prestation-titles">
			<h2 class="section-title">Nos <span>Prestations</span></h2>
			<p class="section-citation"><span class="saut-ligne">De paris aux îles de Guadeloupe </span><span class="saut-ligne">toute notre équipe est présente pour réaliser vos rêve</span></p>
		</div>

		<div class="wrapper">
			<ul class="formules">
				<li class="formules-container ceremonie">
					<div class="liste">
						<img src="../assets/images/ceremonie_caribbean.jpg">
						<div class="formules-container--motif-rose">
							<h2 class="formules-title">Cérémonie</h2>
							<ul class="liste-domaines">
								<li>
									<p>Organisation</p>
									<p>& Gestion</p>
								</li>
								<li>
									<p>Consulting</p>
									<p>& Conseils</p>
								</li>
								<li>
									<p>Renouvellement</p>
									<p>de vos vœux</p>
								</li>
								<li>
									<p>Recherche</p>
									<p>de lieux</p>
								</li>
							</ul>
							<p class="btnDecouvrir"><a href="">Découvrir</a></p>
						</div>
					</div>
				</li><!--
			 --><li class="formules-container reception">
			 		<div class="liste">
						<img src="../assets/images/reception_caribbean.jpg">
						<div class="formules-container--motif-rose">
							<h2 class="formules-title">Réception de mariage</h2>
							<ul class="liste-domaines">
								<li>
									<p>Organisation</p>
									<p>& Gestion</p>
								</li>
								<li>
									<p>Consulting</p>
									<p>& Conseils</p>
								</li>
								<li>
									<p>Recherche</p>
									<p>de lieux</p>
								</li>
							</ul>
							<p class="btnDecouvrir"><a href="">Découvrir</a></p>
						</div>
					</div>
				</li><!--
			 --><li class="formules-container conciergerie">
			 		<div class="liste">
						<img src="../assets/images/conciergerie_caribbean.jpg">
						<div class="formules-container--motif-rose">
							<h2 class="formules-title">Cérémonie</h2>
							<ul class="liste-domaines">
								<li>
									<p>Disponible</p>
									<p>24h/24</p>
								</li>
								<li> 
									<p>Gestion</p>
									<p>des invités</p>
								</li>
								<li>
									<p>Réservations</p>
									<p>d’activités</p>
								</li>
								<li>
									<p>Et bien d’autres...</p>
								</li>
							</ul>
							<p class="btnDecouvrir"><a href="">Découvrir</a></p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<section class="creation">
		<div class="creation-titles">
			<h2 class="section-title">Nos <span>Création</span></h2>
			<p class="section-citation"><span class="saut-ligne">Christina, Pascale et Laure sont ravies </span><span class="saut-ligne">de participer à votre bonheur</span></p>
		</div>

		<!-- slider hover -->
		<div>
		<div class="slider-nav">
			<div class="formules">
				<div class="form-1">
				</div>
				<div class="container-creation">
					<p class="name-client">Laure & Christophe</p>
					<p class="title-creation">cérémonie sur la plage</p>
					<span>799,00€</span>
				</div>
			</div>
			<div class="formules">
				<div class="form-2">
				</div>
				<div class="container-creation">
					<p class="name-client">Laure & Christophe</p>
					<p class="title-creation">cérémonie sur la plage</p>
					<span>599,00€</span>
				</div>
			</div>
			<div class="formules">
				<div class="form-3">
				</div>
				<div class="container-creation">
					<p class="name-client">Laure & Christophe</p>
					<p class="title-creation">cérémonie sur la plage</p>
					<span>1499,00€</span>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section class="avis">
		<div class="avis-titles">
			<h2 class="section-title">Livre <span>D'or</span></h2>
		</div>

		<div class="background-image-fleur">
		</div>

		<div class="avis-container">
			<div class="owl-carousel owl-theme">
				<div>
					<img src="../assets/images/maries.png">
					<p class="avis-lieu">PARIS - <span>03/01/2014</span></p>
					<p class="avis-text">Déja plus d'un mois,est passé, et il ne se passe pas une journée sans que j'y pense avec beaucoup de nostalgie... Bravo et Merci à Christina de nous avoir aidé à organiser le mariage de nos rêves !</p>
					<p class="remerciment">A Bientôt, <span>Corine & Mohamed</span></p>
				</div>
				<div>
					<img src="../assets/images/avis-img1.png">
					<p class="avis-lieu">Torento - <span>12/04/2013</span></p>
					<p class="avis-text">Thank you very much for everything, you made our ceremony to a fantastic memory ! We wish you all the best in the future with your wedding-company and everything else ! We would gladly recommend you !</p>
					<p class="remerciment">Yours sincerely, <span>Julie & Tony</span></p>
				</div>
				<div>
					<img src="../assets/images/avis-img2.png">
					<p class="avis-lieu">Sydney - <span>20/09/2010</span></p>
					<p class="avis-text">C’était le 12 novembre 2011 et tout le monde en parle encore de notre mariage sur la plage... Une journée inoubliable, un vrai rêve , un pur bonheur. Encore merci a toi Christina pour ta disponibilité, ton efficacité , ton imagination débordante , tu est très professionnelle.</p>
					<p class="remerciment">Bonne continuation, <span>Betty & Robert</span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="flux">
		<img src="../assets/images/instagram.png">
		<p class="suivre">Suivez-nous sur <span>instagram</span></p>
		<p class="section-citation">Suivez les coulisses de nos prestations</p>

		<div class="flux-instagram">
			<ul>
				<li><img src="../assets/images/insta-1.jpg"></li><!--
			 --><li><img src="../assets/images/insta-2.jpg"></li><!--
			 --><li><img src="../assets/images/insta-3.jpg"></li><!--
			 --><li><img src="../assets/images/insta-4.jpg"></li><!--
			 --><li><img src="../assets/images/insta-5.jpg"></li><!--
			 --><li><img src="../assets/images/insta-6.jpg"></li>
			</ul>
		</div>
	</section>

@stop

