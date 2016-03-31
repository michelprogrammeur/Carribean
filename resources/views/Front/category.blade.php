@extends('layouts.master')

@section('content')
<section class="section-images-galerie">
	<div class="section-images-galerie-container">
		<ul>
			@foreach($pictures as $picture)
				@if($category->id == $picture->category_id)
				<a class="example-image-link" href="{{ url($picture->file)}}" data-lightbox="example-set">
		 <!----><li>
					<img class="example-image" src="{{ url($picture->file) }}">
					<i class="plus fa fa-plus"></i>
				</li><!---->
				</a>
				@endif
			@endforeach
		</ul>
	</div>
</section>
@stop