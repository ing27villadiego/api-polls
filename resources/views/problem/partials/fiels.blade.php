{!! Form::open(['url' => $url, 'method' => $method, 'class' => 'col s8 offset-s1']) !!}
{{ csrf_field() }}

<div class="row">
    <div class="input-field col s12">
        {{  Form::text('name_problem', $problem->name_problem, ['class' => 'validate', 'placeholder' => 'Nombre del problema', 'autofocus']) }}
        {{  Form::label('name_problem', 'Nombre del problema') }}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>
{!! Form::close() !!}