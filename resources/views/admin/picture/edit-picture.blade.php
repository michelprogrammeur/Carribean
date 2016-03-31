@extends('layouts.admin')

@section('content')
   @include('admin.picture.error-notification')
<section class="section-liste-mariages2">
   <div class="section-mariage-container">
   <form enctype="multipart/form-data" class="create-picture-formulaire" action="{{url('picture/'.$picture->id)}}" method="post">
   {{method_field('PUT')}}
   {{csrf_field()}}
      <h1 class="titleCreationPicture">Modifier</h1>

      <img class="image-picture" src="{{ asset($picture->file) }}" height="150" />
      <div class="input-file-picture">
         <input type="file" class="input-file" name="userfile">
      </div>

      <select class="pictureChamps" name="category_id">
         @foreach($categories as $id=>$title)
            <option value="{{$id}}" {{$picture->category_id==$id? 'selected': ''}}>{{ $title }}</option>
         @endforeach
         <option value="0" {{is_null($picture->category_id)? 'selected': ''}}>Non catégorisé</option>
      </select>

      <input type="text" class="pictureChamps" placeholder="Titre de la photo" name="caption">

      <button type="submit" class="loginBtnSumit">Save</button>
   </form>
   </div>
</section>
@stop