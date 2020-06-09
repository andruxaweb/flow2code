@extends('layouts.app')
@section('Title')Edit Movie @endsection

@section('content')
  <h1>Edit movie</h1>


<form class="" action="{{route('moovies-edit-save', $data->id)}}" method="post">
  @csrf

  <div class="form-group">
    <label for="Title">Title:</label>
    <input type="text" name="Title" value="{{$data->title}}" placeholder="write the Title" id="Title">
  </br>
    <label for="Gender">Gender:</label>
    <input type="text" name="Gender" value="{{$data->gender}}" placeholder="write the Gender" id="Gender">
  </br>
    <label for="cover">Cover:</label>
    <input type="text" name="cover" value="{{$data->cover}}" placeholder="write the cover" id="cover">
  </br>
     <label for="descriprion">Descriprtion:</label>
     <input type="text" name="descriprion" value="{{$data->descriprion}}" placeholder="write the descriprion" id="descriprion">
   </br>
    <label for="prodCountry">prodCountry:</label>
    <input type="text" name="prodCountry" value="{{$data->prodCountry}}"
     placeholder="write the prodCountry" id="prodCountry">
  </div>
  <button type="submit"class="btn btn-success">Save</button>
</form>
@endsection
