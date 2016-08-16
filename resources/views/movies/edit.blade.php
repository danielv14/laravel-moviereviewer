@extends('app')

@section('content')
  <div class="container">
    <h1 class="text-center">Edit review: {{$review->title}}</h1>
    <hr>

    <div class="col-md-6 col-md-offset-3">

    @include('errors.list')

    {!! Form::model($review, ['method' => 'PATCH', 'route' => ['movies.update', $review->id]]) !!}
      @include('movies._form', ['submit' => 'Update review'])
    {!! Form::close() !!}

    </div>
  </div>
@endsection
