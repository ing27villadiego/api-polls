@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col s12 m8">
                <ul class="collection with-header">
                    <li class="collection-header title-show">
                        <h4>{{ $problem->name_problem }}</h4>
                    </li>
                    @foreach($solutions as $solution)
                        <li class="collection-item">
                            <div>{{ $solution->name_solution}}</div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>




@endsection