@extends('layouts.app')
@section('Title')All movies @endsection

@section('content')
<!-- <div class="searchMovie">
  <form class="" action="/moviesList/all/search" method="get">
    <div class="form-group">
      <input type="search" name="search" class="form-control">
      <a href=" {{ route('moovies-search') }}"><button type="submit" class="btn btn-primary">Search</button></a>
    </div>
  </form>
</div> -->
<div class="db-allMovie">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Gender</th>
        <th scope="col">Cover</th>
        <th scope="col">DrodCountry</th>
        <th scope="col">Buttons</th>
      </tr>
    </thead>
    <tbody>
      <h1>Moviest List:</h1>
      @foreach($data as $el)
          <tr>
            <td>{{$el->title}}</td>
            <td >{{$el->gender}}</td>
            <td >{{$el->cover}}</td>
            <td >{{$el->prodCountry}}</td>
            <td><a href="{{ route('moovies-Desc', $el->id) }}"><button >Description</button></td></a>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection
