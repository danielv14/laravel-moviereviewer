<div class="form-group">
  {!! Form::label('title', 'Title of review:') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Write review text:') !!}
  {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('trailer', 'URL for trailer:') !!}
  {!! Form::text('trailer', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('rating', 'Rating (1 - 5)') !!}
  {!! Form::number('rating', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submit, ['class' => 'btn btn-primary form-control']) !!}
</div>
