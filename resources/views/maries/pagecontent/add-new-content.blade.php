@extends('layouts.master')

@section('content')
<section class="section-content-maries">
   <div class="section-content-container">
		<form class="formulaireMariesContenu" enctype="multipart/form-data" action="{{url('createContent', $mariage->id)}}" method="post">
		{{csrf_field()}}
		<h2 class="titleContent">contenu mariage</h2>

		<input class="inputContentChamps" type="text" class="form-control" name="title" value="{{$mariage->title}}" placeholder="Prenoms des maries*">

		<input class="inputContentChamps" type="text" class="form-control" name="mariageDate" value="{{$mariage->datemariage}}" placeholder="Date du mariage jj/mm/aaaa*">

		<input class="inputContentChamps" type="text" class="form-control" name="lieu" value="{{$mariage->lieu}}" placeholder="Lieu du mariage">

		<textarea class="inputContentChamps textareaContent" placeholder="Information du mariage" name="contenu">{{$mariage->content}}</textarea>

		<button class="contentBtnSumit" type="submit" class="btn btn-primary">creater</button>
	    </form>
	</div>
</section>
@stop