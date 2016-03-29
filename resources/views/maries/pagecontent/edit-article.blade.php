@extends('layouts.master')

@section('content')
	<form class="" enctype="multipart/form-data" action="{{url('article-maries/update', $article->id)}}" method="post">
	{{csrf_field()}}
	<h2>Modifier cet article</h2>

	<div class="form-group">
		<label for="articleTitle">title</label>
		<input type="text" class="form-control" name="articleTitle" value="{{$article->title}}">
	</div>

	<div class="form-group">
		<label for="articlePicture">Image</label>
		<input type="file" class="form-control" name="articlePicture" value="">
	</div>


	<div class="form-group">
		<label for="articleContenu">contenu</label>
		<textarea class="form-control" name="articleContenu">{{$article->content}}</textarea>
	</div>

	<button type="submit" class="btn btn-primary">Modifier</button>
	<a href="{{ url('/article-maries', $article->id) }}" class="btn btn-warning">Retour</a>
    </form>
@stop