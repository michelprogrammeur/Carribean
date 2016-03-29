@extends('layouts.master')

@section('content')

<section class="section-maries">
	<div class="container-dashboard">
		<ul>
			<li><a href="{{url('dashboard-maries', $mariage->id)}}">Dashboard</a></li>
		</ul>
	</div>

	<div class="container-contentMaries">
		<span class="compte-a-rebours">J-160</span>
		<h2>{{$mariage->title}}</h2>
		<p>{{$mariage->datemariage}}</p>
	</div>
</section>

<div class="container-contentMaries">
	@foreach($articles as $article)
		<h2>{{$article->title}}</h2>

		<img src="{{url($article->pictureArticle->file) }}">

		<span>{{$article->published_at}}</span>

		<p>{{$article->content}}</p>

		<a href="{{ url('edit-article', $article->id) }}">Modifier</a>
		<form method="post" action="{{url('/article-maries/delete', $article->id)}}" class="pull-left">
         {{ method_field('DELETE') }}
         {{ csrf_field() }}

            <input name="_method" type="hidden" value="delete" />
            <input class="btn btn-danger"  type="submit" value="Delete" onclick="return confirm(\'Are you sure?\')"/>
        </form>

	@endforeach
</div>
@stop