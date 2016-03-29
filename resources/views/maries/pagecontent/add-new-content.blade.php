@extends('layouts.master')

@section('content')

	<form class="formulaireMariesContenu" enctype="multipart/form-data" action="{{url('createContent', $mariage->id)}}" method="post">
	{{csrf_field()}}
	<h2>Entrer votre contenu</h2>

	<div class="form-group">
		<label class="labelContentChamps" for="title">Titre de la page</label>
		<input class="inputContentChamps" type="text" class="form-control" name="title" value="{{$mariage->title}}">
	</div>

	<div class="form-group">
		<label class="labelContentChamps" for="mariageDate">Date du mariage</label>
		<input class="inputContentChamps" type="text" class="form-control" name="mariageDate" value="{{$mariage->datemariage}}">
	</div>

	<div class="form-group">
		<label class="labelContentChamps" for="lieu">Lieu du mariage</label>
		<input class="inputContentChamps" type="text" class="form-control" name="lieu" value="{{$mariage->lieu}}">
	</div>

	<div class="form-group">
		<label class="labelContentChamps" for="contenu">Contenu</label>
		<textarea class="inputContentChamps textareaContent" name="contenu">{{$mariage->content}}</textarea>
	</div>



	<button class="contentBtnSumit" type="submit" class="btn btn-primary">creater</button>
	<a class="contentCancel" href="{{ url('/mariage', $mariage->id) }}" class="btn btn-warning">Cancel</a>
    </form>
@stop