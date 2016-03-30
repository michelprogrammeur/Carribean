@extends('layouts.admin')

@section('content')

<section class="section-galerie-admin">
	<div class="galerieAdmin-container">
	@if(count($pictures) > 0)
	     <div class="btnAddPicture-container" >
	     	@include('admin.picture.error-notification')
	        <a href="{{ url('/picture/create') }}" class="" role="button">
	           <p>Add New picture</p>
	        </a>
	     </div>
	@endif
	<div class="container-pictures">
	    <ul>
			@forelse($pictures as $picture)
	    
		        <li>
		           <img src="{{asset($picture->file)}}" />
		           <div class="picture-content">
		              <h3>{{$picture->category->title}}</h3>
		              <p>
		                 <div class="picture-btn-container" style="padding-left:1em;">
			                 <a href="{{ url('/picture/'.$picture->id.'/edit') }}" class="btn-modifier">Modifier</a>
			                 <span class="">&nbsp;</span>

			                 <form method="post" action="{{url('/picture', $picture->id)}}" class="">
			                 {{ method_field('DELETE') }}
			                 {{ csrf_field() }}

			                    <input name="_method" type="hidden" value="delete" />
			                    <input class="btn-picture-delete"  type="submit" value="Delete" onclick="return confirm(\'Are you sure?\')"/>
			                 </form>
		                 </div>
		              </p>
		           </div>
		        </li>
			@empty
			     <p>No pictures yet, <a href="{{ url('/picture/create') }}">add a new one</a>?</p>
			@endforelse
	    </ul>
	</div>
	</div>
	<div align="center">{!! $pictures->render() !!}</div>

	</div>
</section>
@stop


	