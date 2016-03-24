@extends('layouts.master')

@section('content')

	<form class="" enctype="multipart/form-data" action="{{url('/mariage', $mariage->id)}}" method="POST">
	{{csrf_field()}}

	<div class="form-group">
		<label for="title">title</label>
		<input type="text" class="form-control" name="title">
	</div>

	<div class="form-group">
		<label for="mariageDate">Date du mariage</label>
		<input type="text" class="form-control" name="mariageDate" value="">
	</div>

	<div class="form-group">
		<label for="lieu">Lieu du mariage</label>
		<input type="text" class="form-control" name="lieu" value="">
	</div>

	<div class="form-group">
		<label for="contenu">contenu</label>
		<textarea class="form-control" name="contenu" value=""></textarea>
	</div>


	<button type="submit" class="btn btn-primary">creater</button>
	<a href="{{ url('/mariage', $mariage->id) }}" class="btn btn-warning">Cancel</a>
    </form>
@stop