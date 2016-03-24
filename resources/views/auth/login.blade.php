@extends('layouts.master')

@section('content')
	<form class="loginFormulaire" name="form" action="{{url('login')}}" method="post" >
		{{csrf_field()}}
		<h2 class="loginTitle">Connexion</h2>
		<div class="container-loginChamps">
			<label class="labelLoginChamps">Email</label>
			<input name="email" class="inputLoginChamps" type="email" value="{{old('email')}}"/>
		</div>

		@if($errors->has('email')) 
			<span class="error">{{$errors->first('email')}}</span>
		@endif

		<div class="container-loginChamps">
			<label class="labelLoginChamps">Mot de passe</label>
			<input name="password" class="inputLoginChamps" type="text" value="{{old('password')}}"/>
		</div>

		<div class="container-loginChamps">
			<label class="loginRememberTitle">Se souvenir de moi:</label>
			<input class="loginRememberRadio" name="remember" type="radio" value="remember">
		</div>
		
		<input class="loginBtnSumit" type="submit" value="Envoyer">

		@if(Session::has('password'))
			<span class="warming {{Session::get('alert')}}"> {{Session::get('message')}}</span>
		@endif
	</form>
@stop