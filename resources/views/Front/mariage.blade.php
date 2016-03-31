@extends('layouts.master')

@section('content')

<section class="section-maries">

	<p class="btnDashboard-maries"><a href="{{url('dashboard-maries', $mariage->id)}}">Dashboard</a></p>

	<div class="container-contentMaries">
		<span class="compte-a-rebours">J-160</span>
		<p class="mariage-date">{{$mariage->datemariage}}</p>
		<h2 class="nom-maries">{{$mariage->title}}</h2>
		<p>#mariagedemarineetarthur</p>

		<p class="mariage-btnBlanc"><a href="">aventure</a></p>
	</div>

	<div class="section-conciergerie">
		<div class="section-conciergerie-container">
			<h2>Conciergie :</h2>
			<ul>
				<li><p>+33 6 90 72 86 86</p></li>
				<li><p>conciergerie@caribbean-planner.com</p></li>
				<li><p>Responsable : <span>Laure</span></p></li>
				<li></li>
			</ul>

			<img class="heure" src="../assets/images/24h.png">
		</div>

	</div>
</section>

<section class="section-articles">
	<div class="section-articles-container">
		<div class="article-top">
			<div class="slider-article">
				<h2>Anciens articles</h2>
				<ul>
					<li>Notre mariage</li><!--
				 --><li>Nos alliances</li><!--
				 --><li>RDV avec le traiteur</li><!--
				 --><li>COnseils Make-up</li>
				</ul>
			</div>
			<div class="maries-instagram">
				<h2>live <span>instagram</span></h2>
				<p class="hashtag">#mariagedemarineetarthur</p>
				<ul>
					<li class="image-1"></li><!--
				 --><li class="image-2"></li><!--
				 --><li class="image-3"></li><!--
				 --><li class="image-4"></li><!--
				 --><li class="image-5"></li><!--
				 --><li class="image-6"></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="articles-container">
	<div class="article">
		@foreach($articles as $article)
			<div class="article-donnees">
				<div>
					<h2>{{$article->title}}</h2>
				</div>
			</div>

			<img class="article-img" src="{{url($article->pictureArticle->file) }}">

			<div class="article-donnees">
				<div>
					<p class="article-content">{{$article->content}}</p>
					<span class="article-date">{{$article->published_at}}</span>

					<div class="article-commentaire-container">
						<div>
							<details class="commentaire-form">
								<summary class="ajouter-commentaire">
									Ajouter un commentaire
								</summary>

									<fieldset class="commentaire-formulaire-container">
										<form>
											<input type="text" class="commentaireChamps" placeholder="nom*" name="caption"><!--

										 --><input type="text" class="commentaireChamps" placeholder="Email*" name="caption"><!--

										 --><textarea class="textarea-commentaire" placeholder="Laisser un commentaire">
												
											</textarea>

										</form>
									</fieldset>
							</details><!--

						 --><details class="commentaire">
								<summary class="commentaire-ajouter">
									Commentaire
								</summary>

									<fieldset class="commentaire-container">
										<span class="commentaire-date">03/01/2014</span>
										<p class="commentaire-name">Robert & Betty</p>
										<p class="commetaire-text">C’était le 12 novembre 2011 et tout le monde en parle encore de notre mariage sur la plage... Une journée inoubliable, un vrai rêve , un pur bonheur. Encore merci a toi Christina pour ta disponibilité, ton efficacité , ton imagination débordante , tu est très professionnelle. J'ai beaucoup appréciée la discrétion de ton équipe et je vous dit un grand BRAVO... Bonne continuation.</p>
									</fieldset>
							</details>

							<div class="btnArticleAdmin">
								<a class="btnModifier" href="{{ url('edit-article', $article->id) }}"></a>
								<form method="post" action="{{url('/article-maries/delete', $article->id)}}" class="form-delete">
						         {{ method_field('DELETE') }}
						         {{ csrf_field() }}

						            <input name="_method" type="hidden" value="delete" />
						            <input class="article-delete" type="submit" value="" onclick="return confirm(\'Are you sure?\')"/>
					        	</form>
				        	</div>
						</div>

						
					</div>

			    </div>
		    </div>

		@endforeach
	</div>
</section>
@stop