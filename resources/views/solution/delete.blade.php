{!! Form::open(['url' => '/solutions/'.$solution->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
{{ csrf_field() }}
  <input type="submit" class="btn btn-link" value="Eliminar">

{!! Form::close() !!}