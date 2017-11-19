{!! Form::open(['url' => $url , 'method' => $method, 'class' => 'col s8 offset-s1']) !!}
{{ csrf_field() }}

<div class="row">


    <!-- Multiple Radios -->
    <div class="control-group">
        <h5 class="control-label"  for="radiosPreg1">Formulario de encuestas </h5>

        <div class="row">
            <div class="input-field col s12">
                {{  Form::text('name_person', $poll->name_person, ['class' => 'validate', 'placeholder' => 'Nombre del encuestado', 'autofocus']) }}
                {{  Form::label('name_person', 'Nombre del encuestado') }}
            </div>

            <div class="input-field col s12">
                {{  Form::text('document', $poll->document, ['class' => 'validate', 'placeholder' => 'Numero de cocumento']) }}
                {{  Form::label('document', 'Numero de documento') }}
            </div>

            <div class="input-field col s12">
                {{  Form::text('district', $poll->district, ['class' => 'validate', 'placeholder' => 'Barrio']) }}
                {{  Form::label('district', 'Barrio') }}
            </div>

            <div class="input-field col s12">
                {{  Form::text('cell_phone', $poll->cell_phone, ['class' => 'validate', 'placeholder' => 'telefono celular']) }}
                {{  Form::label('cell_phone', 'Telefono celular') }}
            </div>

            <div class="form-group col s12 m8">
                <label class="control-label">seleccione un tipo de movilidad</label>
                {!! Form::select('mobility_id',$mobilities,null, ['class'=>'form-control input-sm col s12 m8' ,'placeholder'=>'Seleccione un tipo de movilidad']) !!}
            </div>


        </div>

        <div class="row" >
            <div class="col s12 m4">
                <span>Seleccione el problema de su movilidad </span>
            </div>
            <div class="col s12 m12">
                <ul class="collapsible" data-collapsible="accordion">
                    @foreach($problems as $problem)
                        <li>
                            <div class="collapsible-header">
                                <input type="radio" name="problem_id" id="{{ "problem_id1" .$problem->id }}" value="{{$problem->id}}"/>
                                <label for="{{  "problem_id1" .$problem->id }}"></label>{{ $problem->name_problem }}
                            </div>
                            <div class="collapsible-body">
                                <div >
                                    <span>Seleccione la solucion que considere mejor </span>
                                </div>
                                <hr/>
                                <ul>
                                    @foreach($solutions as $solution)
                                        @if($solution->problem_id == $problem->id)
                                            <li>
                                                <div>
                                                    <input type="radio" name="solution_id" id="{{ "solution_id1" .$solution->id }}" value="{{$solution->id}}">
                                                    <label for="{{ "solution_id1" .$solution->id }}">{{ $solution->name_solution }}</label>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>


<div class="row">
    <div class="input-field col s12">
        <button class="btn waves-effect waves-light" id="validate" type="submit" name="action">Guardar
            <i class="material-icons right">save</i>
        </button>
    </div>
</div>
{!! Form::close() !!}





