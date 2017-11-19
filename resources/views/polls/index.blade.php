@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="floating">
                <a href="{{ url('/polls/create') }}"class="btn-floating btn-large waves-effect modal-trigger waves-light">
                    <i class="material-icons">add</i></a>
            </div>
        </div>
        <div class="row">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Barrio</th>
                    <th>Celular/Telefono</th>
                    <th>Tipo de Movilidad</th>
                    <th>Problema</th>
                    <th>Solucion</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Barrio</th>
                    <th>Celular/Telefono</th>
                    <th>Tipo de Movilidad</th>
                    <th>Problema</th>
                    <th>Solucion</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($polls as $poll)
                    <tr>
                        <td>{{ $poll->name_person }}</td>
                        <td>{{ $poll->document }}</td>
                        <td>{{ $poll->district }}</td>
                        <td>{{ $poll->cell_phone }}</td>
                        <td>{{ $poll->mobility->name_mobility }}</td>
                        <td>{{ $poll->problem->name_problem }}</td>
                        <td>{{ $poll->solution->name_solution }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
