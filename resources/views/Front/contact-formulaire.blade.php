@extends('layouts.master')

@section('content')
		{{csrf_field()}}

	<section class="section-formulaire-command">
		<form class="mariageCreationFormulaire " enctype="multipart/form-data" action="{{url('/mariage')}}" method="POST">
		{{csrf_field()}}
			<h1 class="titleCreationMariage">Contact<h1>

			<div class="inputContainer">
				<input type="text" class="mariageChamps" name="name" placeholder="Nom*">
			</div><!--

		 --><div class="inputContainer">
				<input type="email" class="mariageChamps" name="email" placeholder="Prenom*" value="">
			</div><!--

		 --><div class="inputContainer">
				<input type="text" class="mariageChamps" name="password" placeholder="Telephone*" value="">
			</div><!--

		 --><div class="inputContainer">
				<input type="text" class="mariageChamps" name="url" placeholder="Email*" value="">
			</div>

			<div class="selecteur-formules">
			    <select class="formule-select-Champs" name="">
		            <option class="option-category" value="">Forfait CP6</option>
		            <option class="option-category" value="">Forfait CP7</option>
		            <option class="option-category" value="">Forfait CP8</option>
		            <option class="option-category" value="">Forfait CP9</option>
		            <option class="option-category" value="">Forfait CP10</option>
		            <option class="option-category" value="">Forfait CP11</option>
		        </select>
	    	</div>

			<div class="contact-container-textarea">
				<textarea class="contact-formulaire-textarea" name="message" value="" placeholder="Racompter nous votre mariage de rêve ..."></textarea>
			</div>

			<button type="submit" class="loginBtnSumit">Ajouter</button>
	    </form>
</section>
@stop




				
