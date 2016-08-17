@extends('app')

@section('content')
  <div class="jumbotron text-center">
    <h1><span>Scribbles</span> about movies</h1>
    <p>Reviews about all kinds of movies</p>
  </div>
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      @foreach ($movies as $movie)
        <article class="reviews">
          <h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
          <p class="lead">
            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$movie->created_at->diffForHumans()}}
            <i class="fa fa-film" aria-hidden="true"></i> {{$movie->movieTitle}}

          </p>
          {!! str_limit(
              Markdown::convertToHtml($movie->body),
              $limit = 800,
              $end = '...'
              ) !!}
          <br>

          <a href="/movies/{{$movie->id}}" class="btn btn-success">Read review</a>

        </article>
      @endforeach
    </div>

  </div>

  {{ $movies->links() }}

@endsection
