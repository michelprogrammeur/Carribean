@extends('layouts.master')

@section('content')
	<section class="section-prestation">
        <div class=" prestations-container">
            <figure>
                <img src="{{ asset('assets/images/ceremonie-2.png') }}">
                <figcaption>CEREMONIE</figcaption>
            </figure>

            <figure>
                <img src="{{ asset('assets/images/reception-2.png') }}" alt="">
                <figcaption>CHAMPAGNE</figcaption>
            </figure>

            <figure>
               <img src="{{ asset('assets/images/conciergerie-2.png') }}" alt="" >
                <figcaption>BATEAU</figcaption>
            </figure>
        </div>
    </section>
@stop