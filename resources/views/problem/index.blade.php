@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s9">
                <div class="floating">
                    <a href="{{ url('/problems/create') }}" data-toggle="tooltip"
                       title=" Crear nuevo problema"  class="btn-floating btn-large waves-effect modal-trigger waves-light">
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



@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible();
        });
    </script>

@endsection



