@extends('app')

@section('title', 'Movie Reviewer | ' . $review->title)

@section('content')
  <div class="jumbotron text-center">
    <h1>{{$review->title}}</h1>
    <p>A review of {{$review->movieTitle}}</p>

  </div>
  <div class="container-fluid text-center">
    <div class="btn-group btn-group-container">
      <a href="{{$review->rottenLink}}" class="btn btn-success">Rotten Tomatoes</a>
      <a href="{{$review->imdbLink}}" class="btn btn-success">IMDb</a>
      <a href="{{$review->trailer}}" class="btn btn-success">Youtube Trailer</a>
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

  </div> {{-- end of container --}}

  </div>


@endsection
