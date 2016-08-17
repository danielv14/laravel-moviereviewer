<div class="col-md-5">

  <div class="form-group">
    {!! Form::label('title', 'Review Title') !!}
    {!! Form::text('title', null, [
      'class' => 'form-control',
      'placeholder' => 'Name the review'
      ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('movieTitle', 'Movie Title') !!}
    {!! Form::text('movieTitle', null, [
      'class' => 'form-control',
      'placeholder' => 'The whole title of the movie '
      ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('trailer', 'Trailer link') !!}
    {!! Form::text('trailer', null, [
      'class' => 'form-control',
      'placeholder' => 'Link to trailer on Youtube'
      ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('rating', 'Rating (1 - 5)') !!}
    {!! Form::number('rating', null, [
      'class' => 'form-control',
      'placeholder' => 'Give the movie a rating'
      ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('imdbLink', 'IMDb Link') !!}
    {!! Form::text('imdbLink', null, [
      'class' => 'form-control',
      'placeholder' => 'Link to the movies IMDb page'
      ]) !!}
  </div>

  <div class="form-group">
    {!! Form::label('rottenLink', 'Rotten Tomatoes Link') !!}
    {!! Form::text('rottenLink', null, [
      'class' => 'form-control',
      'placeholder' => 'Link to the movies Rotten Tomatoes page'
      ]) !!}
  </div>

  <div class="form-group">
    {!! Form::submit($submit, ['class' => 'btn btn-primary form-control']) !!}
  </div>

</div>

<div class="col-md-7">

  <div class="form-group">
    {!! Form::label('body', 'Write review text:') !!}
    {!! Form::textarea('body', null, [
      'class' => 'form-control',
      'rows' => '30',
      'placeholder' => 'Write your review in markdown format here'
      ]) !!}
  </div>

</div>
