@extends('app')

@section('title', 'Movie Reviewer | Create review ')


@section('content')

  <div class="container">
    <h1 class="text-center">Create new movie review</h1>

    <hr>

    @include('errors.list')

    {!! Form::open(['route' => 'movies.store']) !!}
      @include('movies._form', ['submit' => 'Create review'])
    {!! Form::close() !!}


  </div>




@endsection
