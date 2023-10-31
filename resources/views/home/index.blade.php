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
      <th class="col">Owner Name</th>
      <th class="col">Owner Age</th>
      <th class="col">Car Name</th>
      <th class="col">Car Brand</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($owners as $owner)
      <tr>
        <td>{{$owner->name}}</td>
        <td>{{$owner->age}}</td>
        <td>{{$owner->car->name}}</td>
        <td>{{$owner->car->brand}}</td>
      </tr>
    @endforeach
    
  </tbody>
</table>

<div class="row mt-3">
  @foreach ($posts as $post)
    <div class="card m-2" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$post->post_title}}</h5>
        <p class="card-text">{{ $post->post_details }}</p>
        <h6 class="card-title">Comments:</h6>
        <div>
          <ul class="list-group list-group-flush">
            @foreach ($post->comments as $comment)
              <div class="">
                <div class="card-body">
                  <h6 class="font-weight-bold">{{$comment->commentator_name}}</h6>
                  <small class="text">{{ $comment->comment }}</small>
                </div>
              </div>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  @endforeach
</div>


@endsection