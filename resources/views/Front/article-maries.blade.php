@extends('layouts.master')

@section('content')
	<form class="" enctype="multipart/form-data" action="{{url('createArticle', $mariage->id)}}" method="post">
	{{csrf_field()}}

	<div class="form-group">
		<label for="articleTitle">title</label>
		<input type="text" class="form-control" name="articleTitle" value="">
	</div>

	<div class="form-group">
		<label for="articlePicture">Image</label>
		<input type="file" class="form-control" name="articlePicture" value="">
	</div>

	<div class="form-group">
		<label for="articleContenu">contenu</label>
		<textarea class="form-control" name="articleContenu"></textarea>
	</div>

	<button type="submit" class="btn btn-primary">creater</button>
	<a href="{{ url('/mariage', $mariage->id) }}" class="btn btn-warning">Retour</a>
    </form>
@stop