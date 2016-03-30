@extends('layouts.master')

@section('content')
	<a class="btnCreateMariage" href="{{ url('dashboard-maries/create', $mariage->id) }}" role="button"><p>Creation contenu</p></a>

	<a class="btnCreateMariage" href="{{ url('article-maries/create', $mariage->id) }}" role="button"><p>Creation Article</p></a>
	
@stop