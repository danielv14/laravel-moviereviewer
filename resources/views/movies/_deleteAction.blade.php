{!! Form::open([
      'method' => 'DELETE',
      'route' => ['movies.destroy', $review->id]
  ]) !!}
  {!! Form::submit('Delete review?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
