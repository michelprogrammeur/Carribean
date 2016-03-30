@extends('layouts.master')

@section('content')
<section class="section-content-maries">
   <div class="section-content-container">
		<form class="formulaireMariesContenu" enctype="multipart/form-data" action="{{url('createContent', $mariage->id)}}" method="post">
		{{csrf_field()}}
		<h2 class="titleContent">contenu mariage</h2>

		<input class="inputContentChamps" type="text" class="form-control" name="title" value="{{$mariage->title}}">

		<input class="inputContentChamps" type="text" class="form-control" name="mariageDate" value="{{$mariage->datemariage}}">

		<input class="inputContentChamps" type="text" class="form-control" name="lieu" value="{{$mariage->lieu}}">

		<textarea class="inputContentChamps textareaContent" name="contenu">{{$mariage->content}}</textarea>

		<button class="contentBtnSumit" type="submit" class="btn btn-primary">creater</button>
	    </form>
	</div>
</section>
@stop