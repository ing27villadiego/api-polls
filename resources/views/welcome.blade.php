@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div  class="col s12 m6 offset-s2 container-home">
                <h1>ENCUESTA</h1>
                <h4>DE MOVILIDAD</h4>
                <h6>TU INFORMACION TRAZA NUESTRAS METAS</h6><span>2017</span>
            </div>
            <div  class="col s12 m6 container-frase">
                <span>
                   Si no tines una cuenta puedes registrarte en nuestra plataforma y realizar la encuesta tu informacion nos ayuda a trazar nuestras metas
                </span>
            </div>
            <div class="col s10 m10 l8 ">
                <img class="col s12 m12 l12 offset-m3 offset-l3" style="width: 80%" src="{{ asset('img/logo.png') }}">
            </div>
        </div>
    </div>
@endsection

