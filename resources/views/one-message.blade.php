@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="coll">Description</th>
      <th scope="col">Buttons</th>
    </tr>
  </thead>
  <tbody>
        <tr>
          <td>{{$data->title}}</td>
          <td >{{$data->descriprion}}</td>
          <td><a  href="{{ route('moovies-edit', $data->id) }}"><button>Edit</button></a>
              <a  href="{{ route('moovies-delete', $data->id) }}"><button>Delete</button></a></td>
        </tr>
  </tbody>
</table>

@endsection
