@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s9">
                <div class="floating">
                    <a href="{{ url('/solutions/create') }}"  class="btn-floating btn-large waves-effect modal-trigger waves-light">
                        <i class="material-icons">add</i></a>
                </div>
                <table id="table-problem" class="highlight bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th class="secondary-content">Nombre de las soluciones </th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($solutions as $solution)
                            <tr>
                                <td><i class="material-icons secondary-content ">panorama_fish_eye </i> </td>
                                <td> {{ $solution->name_solution }} </td>
                                <td>
                                    <a href="{{ url('solutions/'.$solution->id.'/edit')  }}" class="secondary-content">
                                        Editar <i class="material-icons">create</i>
                                    </a>
                                </td>
                                <td>
                                    @include('solution.delete', ['solution' => $solution])
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



