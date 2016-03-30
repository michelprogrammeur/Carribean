@extends('layouts.master')

@section('content')
<section class="section-content-maries">
   <div class="section-content-container">
	<form class="create-article-formulaire" enctype="multipart/form-data" action="{{url('article-maries/update', $article->id)}}" method="post">
	{{csrf_field()}}
	<h2 class="titleCreationArticle">Modifier cet article</h2>

	<input type="text" class="articleChamps" name="articleTitle" value="{{$article->title}}">


	<input type="file" class="input-file" name="articlePicture" value="">

	<textarea class="articleChamps textarea-article" name="articleContenu">{{$article->content}}</textarea>

	<button type="submit" class="articleBtnSumit">Modifier</button>
    </form>
   	</div>
</section>
@stop