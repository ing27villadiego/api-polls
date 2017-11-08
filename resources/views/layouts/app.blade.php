<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Oleo+Script">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav>
            <ul id="slide-out" class="side-nav">
                <li><a href="{{ url('/') }}" class="brand-logo" style="padding-left: 10px">{{ config('app.name', 'Encuesta') }}</a></li>
                @if (Route::has('login'))
                    @if (Auth::check())
                        <li> <a class="waves-effect" href="{{ url('/home') }}">Home</a></li>
                        <li> <a class="waves-effect" href="{{ url('/problems') }}">Problemas</a></li>
                        <li> <a class="waves-effect"href="{{ url('/home') }}">Encuestas</a></li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li>
                                    <a class="collapsible-header">{{ Auth::user()->name }}<i class="material-icons">arrow_drop_down</i></a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Salir
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
                @endif
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a href="{{ url('/') }}" class="brand-logo" style="padding-left: 10px">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </li>
            </ul>

            <ul class="right hide-on-med-and-down">
                @if (Route::has('login'))
                    @if (Auth::check())
                        <li> <a class="waves-effect" href="{{ url('/home') }}">Home</a></li>
                        <li> <a class="waves-effect" href="{{ url('/problems') }}">Problemas</a></li>
                        <li> <a class="waves-effect" href="#">Encuestas</a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                        <ul id='dropdown1' class='right dropdown-content'>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
                @endif
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

        </nav>

        @yield('content')


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
    <script>
        $(document).ready(function() {
            $(".dropdown-content").dropdown();
            $(".button-collapse").sideNav();
        });
    </script>


</body>
</html>
