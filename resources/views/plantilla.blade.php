<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió de Viatges - Grup 5</title>
    {{-- Aplico estils Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="p-1 navbar navbar-expand-lg navbar-dark bg-dark d-flex align-content-center">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img width="35" src="{{ asset('img/logo_blanc.png') }}" alt="Logotip del blog de viatges"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">

                    @auth
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/taulausers') }}">Usuaris</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/taulacomments') }}">Comentaris</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/taulacategories') }}">Categories</a>
                            </li>
                        @endif
                    @endauth

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/publications') }}">Publicacions</a>
                    </li>

                </ul>
                {{-- Usuari no registrat --}}
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        {{-- Usuari registrat --}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{-- Es mostra el nom de l'usuari --}}
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="/users/show/{{ Auth::user()->id }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('perfil-form').submit();">
                                        {{ __('Perfil') }}
                                    </a>
                                    <form id="perfil-form" action="/users/show/{{ Auth::user()->id }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('userEdit', ['user' => Auth::user()->id]) }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('edit-perfil-form').submit();">
                                        {{ __('Editar Perfil') }}
                                    </a>
                                    <form id="edit-perfil-form" action="{{ route('userEdit', ['user' => Auth::user()->id]) }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


    <main class="container pt-5">
        @yield('content')
    </main>


    <footer class="bg-dark mt-5">
        <p class="text-white p-3 text-center">
            Travel Time - Tots els drets reservats {{ now()->year }} &copy;
        </p>
    </footer>


</body>

</html>
