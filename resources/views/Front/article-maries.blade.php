@extends('layouts.master')

@section('content')
<section class="section-content-maries">
   <div class="section-content-container">
	<form class="create-article-formulaire" enctype="multipart/form-data" action="{{url('createArticle', $mariage->id)}}" method="post">
	{{csrf_field()}}
	<h2 class="titleCreationArticle">Création article</h2>

	<input type="text" class="articleChamps" name="articleTitle" placeholder="Titre de votre article" value="">

	<input class="input-file" type="file" class="form-control" name="articlePicture" value="">

	<textarea class="articleChamps textarea-article" placeholder="Votre contenu" name="articleContenu"></textarea>

	<button type="submit" class="articleBtnSumit">creater</button>
    </form>
    </div>
</section>
@stop