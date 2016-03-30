@extends('layouts.admin')

@section('content')
<section class="section-liste-mariages">
   <div class="section-mariage-container">
	

	@include('admin.picture.error-notification')
	<form class="create-picture-formulaire" enctype="multipart/form-data" action="{{url('/picture')}}" method="POST">
	{{csrf_field()}}
      <h1 class="titleCreationPicture">Nouvelle Photo</h1>

      <div class="">
         <select class="pictureChamps" name="category_id">
            <option class="option-category" value="0">Non catégorisé</option>
            @foreach($categories as $id => $title)
               <option class="option-category" value="{{$id}}">{{ $title }}</option>
            @endforeach
         </select>
      </div>

      <div class="input-file-picture">
         <input type="file" class="input-file" name="userfile">
      </div>

      <div class="">
         <input type="text" class="pictureChamps" name="caption" placeholder="Titre de la photo" value="">
      </div>

      <button type="submit" class="loginBtnSumit">Upload</button>
    </form>
    </div>
</section>
@stop