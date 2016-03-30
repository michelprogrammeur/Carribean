@extends('layouts.admin')

@section('content')
<section class="section-liste-mariages">
	<div class="section-mariage-container">

	<form class="mariageCreationFormulaire " enctype="multipart/form-data" action="{{url('/mariage')}}" method="POST">
	{{csrf_field()}}
		<h1 class="titleCreationMariage">Édit<h1>

		<div class="inputContainer">
			<input type="text" class="mariageChamps" name="name" placeholder="Nom des maries*">
		</div><!--

	 --><div class="inputContainer">
			<input type="email" class="mariageChamps" name="email" placeholder="Email de maries" value="">
		</div><!--

	 --><div class="inputContainer">
			<input type="text" class="mariageChamps" name="password" placeholder="id des maries" value="">
		</div><!--

	 --><div class="inputContainer">
			<input type="text" class="mariageChamps" name="url" placeholder="Document de Gestion" value="">
		</div>

		<button type="submit" class="loginBtnSumit">Créer</button>
    </form>
	</div>
</section>
@stop 