@extends('layouts.admin')

@section('content')
   @include('admin.picture.error-notification')
   
   <form enctype="multipart/form-data" class="" action="{{url('picture/'.$picture->id)}}" method="post">
   {{method_field('PUT')}}
   {{csrf_field()}}

      <img src="{{ asset($picture->file) }}" height="150" />
      <div class="form-group">
         <input type="file" class="form-control" name="userfile">
      </div>

      <div class="form-group">
         <label for="caption">Titre</label>
         <input type="text" class="form-control" name="caption">
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ url('picture') }}" class="btn btn-warning">Cancel</a>

   </form>
@stop