@extends('app')

@section('content')
  <div class="jumbotron text-center">
    <h1>Opinionated movie lover</h1>
    <p class="lead">Reviews about all kinds of movies</p>
  </div>
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      @foreach ($movies as $movie)
        <article class="reviews">
          <h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
          <p>created {{$movie->created_at->diffForHumans()}}</p>
          {!! str_limit(
              Markdown::convertToHtml($movie->body),
              $limit = 400,
              $end = '...'
              ) !!}
          <br>

          <a href="/movies/{{$movie->id}}" class="btn btn-info">Read review</a>

        </article>
      @endforeach
    </div>

  </div>

  {{ $movies->links() }}

@endsection
