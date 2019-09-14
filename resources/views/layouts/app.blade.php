<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Proyecto TBD</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Proyecto TBD
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} {{ Auth::user()->last_name }} <span class="caret"> </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link">
                                {{ Auth::user()->type_user }}
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light p-1 sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active text-dark" href="{{ url('/home') }}">
                    <span data-feather="home"></span>
                    Inicio <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/ordenc') }}">
                    <span data-feather="file"></span>
                    Orden de Compra
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" href="{{ url('/register') }}">
                    <span data-feather="users"></span>
                    Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/articulo') }}">
                    <span data-feather="shopping-cart"></span>
                    Articulos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/empleados') }}">
                    <span data-feather="users"></span>
                    Empleados
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-dark nav-link" href="{{ url('/servicios') }}">
                    <span data-feather="bar-chart-2"></span>
                    Servicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/clientes') }}">
                    <span data-feather="users"></span>
                    Clientes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-dark nav-link" href="{{ url('/inventario') }}">
                    <span data-feather="layers"></span>
                    Inventario
                    </a>
                </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="text-dark d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                </a>
                </h6>
                <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="text-dark nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-dark nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-dark nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-dark nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                    </a>
                </li>
                </ul>
            </div>
            </nav>

                <div class="py-4">
                        @yield('content')
                </div>
        </div>
    </div>
</div>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
