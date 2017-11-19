@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s9">
                <div class="floating">
                    <a href="{{ url('/problems/create') }}"  class="btn-floating btn-large waves-effect modal-trigger waves-light">
                        <i class="material-icons">add</i></a>
                </div>
                <table id="table-problem" class="highlight bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th class="secondary-content">Nombre del problema</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($problems as $problem)
                            <tr>
                                <td><i class="material-icons secondary-content ">panorama_fish_eye </i> </td>
                                <td> {{ $problem->name_problem }} </td>
                                <td>
                                    <a href="{{ url('problems/'.$problem->id ) }}" class="secondary-content">
                                        Ver <i class="material-icons">visibility</i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('problems/'.$problem->id.'/edit')  }}" class="secondary-content">
                                        Editar <i class="material-icons">create</i>
                                    </a>
                                </td>
                                <td>
                                    @include('problem.delete', ['problem' => $problem])
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Save</h4>
            <div class="row">
                @include('errors.error')
            </div>
            <div class="row">
                {!! Form::open(['url' => '/problems', 'method' => 'POST', 'class' => 'col s8 offset-s1']) !!}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            {{  Form::text('name', '', ['class' => 'validate', 'placeholder' => 'Nombre del problema', 'autofocus']) }}
                            {{  Form::label('name', 'Nombre del problema') }}
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
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Cerrar</a>
        </div>
    </div>
    






@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible();
            $('.modal').modal();
        });
    </script>

@endsection



