@extends('app')

@section('content')
  <div class="container">
      <h1>{{$review->title}}</h1>
      <p>{!! Markdown::convertToHtml($review->body) !!}</p>

      <a href="/movies/{{$review->id}}/edit" class="btn btn-primary">Update review</a>

      <br>
      <br>

      @include('movies._deleteAction')

  </div>



@endsection
