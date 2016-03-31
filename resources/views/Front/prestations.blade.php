@extends('layouts.master')

@section('content')
	<section class="section-prestation">
		<div class=" prestations-container">
	        <ul>
	            <li>
	            	<a href="{{url('ceremonie')}}">
		                <img src="{{ asset('assets/images/ceremonie-2.png') }}">
		                <p>CEREMONIE</p>
	                </a>
	            </li>

	            <li>
	            	<a href="">
		                <img src="{{ asset('assets/images/reception-2.png') }}" alt="">
		                <p>CHAMPAGNE</p>
		            </a>
	            </li>

	            <li>
	            	<a href="">
		               <img src="{{ asset('assets/images/conciergerie-2.png') }}" alt="" >
		                <p>BATEAU</p>
	                </a>
	            </li>
	        </ul>
        </div>
    </section>
@stop