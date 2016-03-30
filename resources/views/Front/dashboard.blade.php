@extends('layouts.master')

@section('content')

<div class="container-dashboard">
	<ul>
		<li><a class="dash-galerie" href="{{url('picture')}}">
			<p><span>Galerie</span></p>
		</a></li><!--
	 --><li><a class="dash-mariage" href="{{url('mariage')}}">
	 		<p><span>Mariage</span></p>
	 	</a></li>
	</ul>
</div>
@stop

