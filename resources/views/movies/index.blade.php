@extends('app')

@section('content')
  <div class="container">
    @foreach ($movies as $movie)
      <article>
        <h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
        <p>created {{$movie->created_at->diffForHumans()}}</p>
        {!! str_limit(
            Markdown::convertToHtml($movie->body),
            $limit = 400,
            $end = '...'
            ) !!}
        <br>

        <a href="/movies/{{$movie->id}}" class="btn btn-primary">Read more</a>

      </article>
      <hr>
    @endforeach
  </div>

  {{ $movies->links() }}

@endsection
