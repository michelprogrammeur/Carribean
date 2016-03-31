@extends('layouts.master')

@section('content')

	<section class="container-galerie">
		<div>
			<ul>
			@foreach($categories as $category)
				<a href="{{ url('category', $category->id)}}">
					<li class="category{{$category->id}}">
						<p>{{$category->title}}</p>
						<div class="container-category">
							<img src="{{ asset($category->file) }}">
						</div>
					</li>
				</a>
			@endforeach
			</ul>
		</div>
	</section>

@stop