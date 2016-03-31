@extends('layouts.master')

@section('content')
	<section class="avis-livredor">
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

		<section class="section-form-livredor">
			<img src="../assets/images/img-form-livredor.jpg">

			<div class="formulaire-livredor">
				<div class="article-livredor">
					<p class="date-form-livredor"><span>PARIS - </span> 03/01/2014</p>
					<p class="date-form-name">Corine & Mohamed</p>
					<p class="form-text-livredor">Déja plus d'un mois,est passé, et il ne se passe pas une journée sans que j'y pense avec beaucoup de nostalgie... Bravo et Merci à Christina de nous avoir aidé à organiser le mariage de nos rêves !</p>
					<img class="form-img-livredor" src="../assets/images/maries.png">
				</div>

				<div class="article-livredor">
					<p class="date-form-livredor"><span>Torento - </span>12/04/2013</p>
					<p class="date-form-name">Julie & Tony</p>
					<p class="form-text-livredor">Thank you very much for everything, you made our ceremony to a fantastic memory ! We wish you all the best in the future with your wedding-company and everything else ! We would gladly recommend you !</p>
					<img class="form-img-livredor" src="../assets/images/avis-img1.png">
				</div>

				<div class="article-livredor">
					<p class="date-form-livredor"><span>Sydney - </span>20/09/201</p>
					<p class="date-form-name">Betty & Robert</p>
					<p class="form-text-livredor">C’était le 12 novembre 2011 et tout le monde en parle encore de notre mariage sur la plage... Une journée inoubliable, un vrai rêve , un pur bonheur. Encore merci a toi Christina pour ta disponibilité, ton efficacité , ton imagination débordante , tu est très professionnelle.</p>
					<img class="form-img-livredor" src="../assets/images/avis-img2.png">
				</div>

				<p class="pagination-livredor">1 2 3 4 5 <span>...</span><span> 12</span></p>

				<div class="formulaire-livredor-champs">
					<input name="email" class="mariageChampsleft" type="email" id="input-4" value="" placeholder="Nom*"/>
					<input name="email" class="mariageChampsmiddle" type="email" id="input-4" value="" placeholder="Pays"/>
					<input name="email" class="mariageChampsright" type="email" id="input-4" value="" placeholder="Photo"/>

					<textarea class="textarea-livredor"	placeholder="Laissez nous un joli mot..."></textarea>

					<div class="btn-container-livredor">
						<span class="btnFormulaire-livredor">
							<a href="{{url('contact-formulaire')}}">Envoyer</a>
						</span>
					</div>
				</div>
			</div>
		</section>
	</section>
@stop