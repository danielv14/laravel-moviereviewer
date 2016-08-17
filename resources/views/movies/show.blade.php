@extends('app')

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$review->title}}</h1>
    <p>A review of {{$review->movieTitle}}</p>

  </div>
  <div class="container">

      {!! Markdown::convertToHtml($review->body) !!}

      <a href="/movies/{{$review->id}}/edit" class="btn btn-primary">Update review</a>

      <br>
      <br>

      @include('movies._deleteAction')

  </div>



@endsection
