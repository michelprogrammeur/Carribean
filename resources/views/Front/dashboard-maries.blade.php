@extends('layouts.master')

@section('content')
<section class="section-dashboard-maries">
	<a class="btnCreateMariage" href="{{ url('dashboard-maries/create', $mariage->id) }}" role="button"><p>Creation contenu</p></a>

	<a class="btnCreateMariage" href="{{ url('article-maries/create', $mariage->id) }}" role="button"><p>Creation Article</p></a>
</section>
@stop