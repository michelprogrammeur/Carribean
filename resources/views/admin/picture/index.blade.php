@extends('layouts.admin')

@section('content')
	<p>Page CRUD gallerie images</p>

	<div class="row">
	@if(count($pictures) > 0)
	     <div class="col-md-12 text-center" >
	        <a href="{{ url('/picture/create') }}" class="btn btn-primary" role="button">
	           Add New picture
	        </a>
	        <hr />
	        @include('admin.picture.error-notification')
	     </div>
	@endif
	@forelse($pictures as $picture)
	    <div class="col-md-2">
	        <div class="thumbnail">
	           <img src="{{asset($picture->file)}}" />
	           <div class="caption">
	              <h3>{{$picture->caption}}</h3>
	              <p>
	                 <div class="row text-center" style="padding-left:1em;">
		                 <a href="{{ url('/picture/'.$picture->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
		                 <span class="pull-left">&nbsp;</span>

		                 <form method="post" action="{{url('/picture', $picture->id)}}" class="pull-left">
		                 {{ method_field('DELETE') }}
		                 {{ csrf_field() }}

		                    <input name="_method" type="hidden" value="delete" />
		                    <input class="btn btn-danger"  type="submit" value="Delete" onclick="return confirm(\'Are you sure?\')"/>
		                 </form>
	                 </div>
	              </p>
	           </div>
	        </div>
	     </div>
	@empty
	     <p>No pictures yet, <a href="{{ url('/picture/create') }}">add a new one</a>?</p>
	@endforelse
	</div>
	<div align="center">{!! $pictures->render() !!}</div>
@stop


	