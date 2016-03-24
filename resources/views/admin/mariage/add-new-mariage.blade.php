@extends('layouts.admin')

@section('content')
	<h1>Données du mariage<h1>

	<form class="" enctype="multipart/form-data" action="{{url('/mariage')}}" method="POST">
	{{csrf_field()}}

		<div class="form-group">
			<label for="name">Nom du mariage ex:(Mr. et Mrs XXXXX)</label>
			<input type="text" class="form-control" name="name">
		</div>

		<div class="form-group">
			<label for="email">email les mariés</label>
			<input type="email" class="form-control" name="email" value="">
		</div>

		<div class="form-group">
			<label for="password">Mot de passe pour les mariés</label>
			<input type="text" class="form-control" name="password" value="">
		</div>

		<div class="form-group">
			<label for="urlkey">URL complexe pour les invités</label>
		</div>

		<button type="submit" class="btn btn-primary">Créer</button>
		<a href="{{ url('/mariage') }}" class="btn btn-warning">Retour</a>
    </form>
@stop 