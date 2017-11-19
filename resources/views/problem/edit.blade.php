
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s10 m10">
                <div class="signup-box">
                    <div class="row">
                        <h2 class="sing-in">Editar Problema</h2>
                    </div>
                    <div class="row">
                        <div class="col s6 m6">
                            @include('errors.error')
                        </div>
                    </div>
                    <div class="row">
                        @include('problem.partials.fiels', ['problem' => $problem, 'url' => '/problems/'.$problem->id, 'method' => 'PATCH'])
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection