@extends('layouts.master')

@section('content')
<p>Page des mariés</p>

<div class="container-dashboard">
	<ul>
		<li><a href="{{url('dashboard-maries', $mariage->id)}}">Dashboard</a></li>
	</ul>
</div>
@stop