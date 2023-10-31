@extends('layouts.app')

@section('mytitle', 'Eloquent Relationship')

@section('bodyContent')

<div class="d-flex justify-content-between mt-3">
    <h2>Data Table</h2>
    {{-- <a href="" class="btn btn-outline-primary">Add New</a> --}}
</div>
<table class="mt-3 table table-bordered">
  <thead>
    <tr>
      <th class="col">Name</th>
      <th class="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($owners as $owner)
      <tr>
        <td>{{$owner->name}}</td>
        <td>{{$owner->car->name}}</td>
      </tr>
    @endforeach
    
  </tbody>
</table>



@endsection