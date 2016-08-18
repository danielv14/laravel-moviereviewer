@extends('app')

@section('title', 'Movie Reviewer | ' . $review->title)

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$review->title}}</h1>
    <p>A review of {{$review->movieTitle}}</p>

  </div>
  <div class="container-fluid text-center">
    <div class="btn-group btn-group-container">
      <a href="{{$review->rottenLink}}" class="btn btn-info" title="Rotten Tomatoes page">RT</a>
      <a href="{{$review->imdbLink}}" class="btn btn-info" title="IMDb page">IMDb</a>
      <a href="{{$review->trailer}}" class="btn btn-info" title="Watch trailer on YouTube">Trailer</a>
    </div>
  </div>

  <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <article class="review">
            {!! Markdown::convertToHtml($review->body) !!}
          </article>
        </div>
      </div>

      <div class="row text-center btn-action-wrapper">
        <div class="col-xs-6">
          @include('movies._deleteAction')
        </div>
        <div class="col-xs-6">
          <a href="/movies/{{$review->id}}/edit" class="btn btn-primary">Update review</a>
        </div>
      </div>


  </div> {{-- end of container --}}

  </div>


@endsection
