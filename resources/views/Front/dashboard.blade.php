@extends('layouts.master')

@section('content')
<p>Bonjour Christina</p>

<div class="container-dashboard">
	<ul>
		<li><a href="{{url('picture')}}">Gallerie images</a></li>
		<li><a href="{{url('mariage')}}">Création mariage</a></li>
	</ul>
</div>
@stop

