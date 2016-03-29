@extends('layouts.master')

@section('content')

	<div class="container-galerie">
		<ul>
		@foreach($categories as $category)
			<a href="{{ url('category', $category->id)}}">
				<li class="category{{$category->id}}">
					<div class="container-category">
						<p>{{$category->title}}</p>
						<img src="{{ asset($category->file) }}">
					</div>
				</li>
			</a>
		@endforeach
		</ul>
	</div>

@stop