
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s10 m10">
                <div class="signup-box">
                    <div class="row">
                        <h2 class="sing-in">Editar Solucion</h2>
                    </div>
                    <div class="row">
                        <div class="col s6 m6">
                            @include('errors.error')
                        </div>
                    </div>
                    <div class="row">
                        {!! Form::open(['url' => '/solutions/'.$solution->id, 'method' => 'PATCH', 'class' => 'col s8 offset-s1']) !!}
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="input-field col s12">
                                {{  Form::text('name_solution', $solution->name_solution, ['class' => 'validate', 'placeholder' => 'Nombre de la solucion', 'autofocus']) }}
                                {{  Form::label('name_solution', 'Nombre de la solucion') }}
                            </div>

                            <div class="input-field col s12 m10">
                                {!! Form::select('problem_id', $problems ,null, ['class'=>'col s12 m8' ,'placeholder'=>'Asignele un problema']) !!}
                                <label class="control-label">Asignele un problema</label>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>
        $(document).ready(function() {
            $('select').material_select();
            $('.collapsible').collapsible();
        });
    </script>

@endsection
