@extends('app')

@section('content')

  <div class="container">
    <h1 class="text-center">Create new movie review</h1>

    <hr>

    <div class="col-md-6 col-md-offset-3">

      @include('errors.list')

      {!! Form::open(['route' => 'movies.store']) !!}
        @include('movies._form', ['submit' => 'Create review'])
      {!! Form::close() !!}
    </div>


  </div>




@endsection
