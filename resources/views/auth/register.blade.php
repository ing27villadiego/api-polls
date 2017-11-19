@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s10 m10">
            <div class="signin-box">
                <div class="row">
                    <h2 class="sing-in">Registrar</h2>
                </div>
                <div class="row">
                    <form class="col s8 offset-s1 signup-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12 {{ $errors->has('full_name') ? ' has-error' : '' }}">
                                <input id="email" type="text" class="validate" name="full_name" value="{{ old('full_name') }}" placeholder="nombre completo" required autofocus>
                                <label for="name" class="col-md-4 control-label">Nombre completo</label>
                                @if ($errors->has('full_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" value="{{ old('email') }}" class="validate" placeholder="correo electronico" name="email" required>
                                <label for="email" class="col-md-4 control-label">Correo electronico</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="email" type="password" value="{{ old('password') }}" class="validate" placeholder="contraseña" name="password" required>
                                <label for="email" class="col-md-4 control-label">Contraseña</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password-confirm" type="password" placeholder="confirmar contraseña" class="form-control" name="password_confirmation" required>
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
