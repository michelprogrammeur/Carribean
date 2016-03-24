@extends('layouts.master')

@section('content')
	<p>galerie d'image caribbean planner</p>
	
	<div class="container-galerie">
		<ul>
		@foreach($pictures as $picture)
			<li>
				<img src="{{ url($picture->file) }}">
			</li>
		@endforeach
		</ul>
	</div>
@stop