@extends('layouts.master')

@section('content')
	<h1 class="pageListeMariagesTitle">Liste des mariages actuels<h1>
	<a class="btnCreateMariage" href="{{ url('dashboard-maries/create', $mariage->id) }}" role="button">Creater votre contenu</a>

	<a class="btnCreateMariage" href="{{ url('article-maries/create', $mariage->id) }}" role="button">Creation Article</a>
	
	<div class="container-cartClient">
	
	</div>
@stop