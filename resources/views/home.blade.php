@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    @if($user != null)

                        <div class="row">
                            <div class="col s12 m5">
                                <div class="card-panel teal">
                                  <span class="white-text"> Gracias por realizar la encuesta su aporte nos ayuda a realizar nuestas metas
                                  </span>
                                </div>
                            </div>
                        </div>

                    @else

                        <div class="row">
                            <div class="col s9 m9">
                                @include('errors.error')
                            </div>
                        </div>

                        @include('polls.partials.fields', ['poll' => $poll, 'url' => '/pollscandidate', 'method' => 'POST'])

                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
        $(document).ready(function() {
            $('select').material_select();
            $('.collapsible').collapsible();
        });
    </script>

@endsection



