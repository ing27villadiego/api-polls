@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s10 m10">
            <div class="signup-box">
                <div class="row">
                    <h2 class="sing-in">Encuestas</h2>
                </div>
                <div class="row">
                    <form class="col s8 offset-s1" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" placeholder="Correo" required autofocus>
                                <label for="email">Correo</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="validate" placeholder="contraseña" name="password" required>
                                <label for="password">Contraseña</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <p>
                            <input type="checkbox" id="test5" name="remember" {{ old('remember') ? 'checked' : '' }} />
                            <label for="test5">Recordar usuario</label>
                        </p>
                        <button class="btn waves-effect waves-light" type="submit" name="action">iniciar sesion
                            <i class="material-icons right">lock_open</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




