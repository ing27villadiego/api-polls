
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s11 m11">
                <div class="signup-box">
                    <div class="row">
                        <h2 class="sing-in">Encuesta problematica</h2>
                    </div>
                    <div class="row">
                        <div class="col s9 m9">
                            @include('errors.error')
                        </div>
                    </div>
                    <div class="row">
                        @include('polls.partials.fields', ['poll' => $poll, 'url' => '/polls', 'method' => 'POST'])
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


