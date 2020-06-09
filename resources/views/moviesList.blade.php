@extends('layouts.app')
@section('Title')add Movie @endsection

@section('content')
  <h1>Add movie</h1>


<form class="" action="{{route('moovies-form')}}" method="post">
  @csrf

  <div class="form-group">
    <label for="Title">Title:</label>
    <input type="text" name="Title" placeholder="write the Title" id="Title">
  </br>
    <label for="Gender">Gender:</label>
    <input type="text" name="Gender" placeholder="write the Gender" id="Gender">
  </br>
    <label for="cover">Cover:</label>
    <input type="text" name="cover" placeholder="write the cover" id="cover">
  </br>
    <label for="descriprion">Descriprtion:</label>
    <input type="descriprion" name="descriprion" placeholder="write the descriprtion" id="descriprion">
  </br>
    <label for="prodCountry">prodCountry:</label>
    <input type="text" name="prodCountry" placeholder="write the prodCountry" id="prodCountry">
  </div>
  <button type="submit"class="btn btn-success">add</button>
</form>
@endsection
