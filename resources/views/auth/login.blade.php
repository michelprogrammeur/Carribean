@extends('layouts.master')

@section('content')
<section  class="section-formulaire-connexion">
	<div class="section-formulaire-container">
		<form class="loginFormulaire" name="form" action="{{url('login')}}" method="post" >
			{{csrf_field()}}
			<h2 class="loginTitle">Connexion</h2>
			<div class="container-loginChamps">
				<input name="email" class="inputLoginChamps" type="email" placeholder="identifiant*" value="{{old('email')}}"/>
			</div>

			@if($errors->has('email')) 
				<span class="error">{{$errors->first('email')}}</span>
			@endif

			<div class="container-loginChamps">
				<input name="password" class="inputLoginChamps" type="text" placeholder="Mot de passe*" value="{{old('password')}}"/>
			</div>

			<input class="loginBtnSumit" type="submit" value="Envoyer">

			@if(Session::has('password'))
				<span class="warming {{Session::get('alert')}}"> {{Session::get('message')}}</span>
			@endif
		</form>
	</div>
</section>
@stop