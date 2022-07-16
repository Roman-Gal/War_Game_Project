@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Login</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
  
@foreach ($gamers as $gamer)
    <tr>
      <th scope="row">{{$gamer->id}}</th>
      <td>{{$gamer->email}}</td>
      <td>{{$gamer->name}}</td>
      <td>_</td>
      <td>_</td>
    </tr>
 @endforeach

  </tbody>
</table>
</div>
@endsection
