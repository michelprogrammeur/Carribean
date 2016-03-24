@extends('layouts.admin')

@section('content')
  <form class="form-horizontal">

    <img src="{{ url('uploads', $picture->uri }}" height="150" />
    <div class="form-group">
        <label class=" control-label">Caption</label>
        <div class="">
            <p class="form-control-static">{{ $picture->caption }}</p>
        </div>
    </div>

    <a href="{{ url('/picture/'.$picture->id.'/edit') }}" class="btn btn-warning">Edit</a>
    <a href="{{ url('/picture') }}" class="btn btn-warning">&lt;Back</a>

  </form>
@stop