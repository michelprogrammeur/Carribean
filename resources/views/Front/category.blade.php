@extends('layouts.master')

@section('content')
	<p>galerie d'image </p>

	<ul>
		@foreach($pictures as $picture)
			@if($category->id == $picture->category_id)
	 <!----><li>
				<img src="{{ url($picture->file) }}">
			</li><!---->
			@endif
		@endforeach
	</ul>
@stop