@extends('layouts.admin')

@section('content')
	<p>Ajouter une nouvelle picture</p>

	@include('admin.picture.error-notification')
	<form class="" enctype="multipart/form-data" action="{{url('/picture')}}" method="POST">
	{{csrf_field()}}

      <div class="form-group">
         <label for="userfile">picture File</label>
         <input type="file" class="form-control" name="userfile">
      </div>

      <div class="form-group">
         <label for="caption">Caption</label>
         <input type="text" class="form-control" name="caption" value="">
      </div>

      <button type="submit" class="btn btn-primary">Upload</button>
      <a href="{{ url('/picture') }}" class="btn btn-warning">Cancel</a>
    </form>
@stop