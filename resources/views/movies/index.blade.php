@extends('app')

@section('content')
  <div class="container">
    <h1>Index movie page</h1>
    <a href="movies/create" class="btn btn-success">Create review</a>
    <hr>
    @foreach ($movies as $movie)
      <article>
        <h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
        <p>created {{$movie->created_at->diffForHumans()}}</p>
        <p>{{$movie->body}}</p>
      </article>
    @endforeach
  </div>

  {{ $movies->links() }}



@endsection
