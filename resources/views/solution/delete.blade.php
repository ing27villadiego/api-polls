{!! Form::open(['url' => '/problems/'.$problem->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
{{ csrf_field() }}
  <input type="submit" class="btn btn-link" value="Eliminar">

{!! Form::close() !!}