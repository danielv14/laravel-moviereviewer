@extends('app')

@section('title', 'Movie Reviewer | Edit review ')


@section('content')
  <div class="container">
    <h1 class="text-center">Edit review: {{$review->title}}</h1>
    <hr>



    @include('errors.list')

    {!! Form::model($review, ['method' => 'PATCH', 'route' => ['movies.update', $review->id]]) !!}
      @include('movies._form', ['submit' => 'Update review'])
    {!! Form::close() !!}

  </div>
@endsection
