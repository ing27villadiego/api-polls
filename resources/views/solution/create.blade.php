
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s10 m10">
                <div class="signup-box">
                    <div class="row">
                        <h2 class="sing-in">Nueva Solucion</h2>
                    </div>
                    <div class="row">
                        <div class="col s6 m6">
                            @include('errors.error')
                        </div>
                    </div>
                    <div class="row">
                        @include('solution.partials.fiels', ['solution' => $solution, 'url' => '/solutions', 'method' => 'POST'])
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