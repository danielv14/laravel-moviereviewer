@extends('app')

@section('content')
  <div class="container">
    @foreach ($movies as $movie)
      <article>
        <h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
        <p>created {{$movie->created_at->diffForHumans()}}</p>
        
      </article>
      <hr>
    @endforeach
  </div>

  {{ $movies->links() }}



@endsection
