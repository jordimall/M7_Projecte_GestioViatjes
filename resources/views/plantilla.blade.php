<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió de Viatges - Grup 5</title>
    {{-- Aplico estils Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

    <div id=principal-container>

        <nav class="p-1 navbar navbar-expand-lg navbar-dark bg-dark d-flex align-content-center">

            <div class="container">

                <a class="navbar-brand" href="{{ url('/home') }}"><img width="35" src="{{ asset('img/logo_blanc.png') }}" alt="Logotip del blog de viatges"></a>

                    {{-- Secció del menú --}}
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/taulapublicacions') }}">Publicacions</a>
                        </li>

                        <div id="menuAdmin" class="navbar-nav me-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/users/api/taulausers') }}">Usuaris</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/taulacomments') }}">Comentaris</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/taulacategories') }}">Categories</a>
                            </li>
                        </div>

                    </ul>

                    {{-- Secció del menú de Login i Registre --}}
                    <ul class="navbar-nav ms-auto">
                        <div id="menuNoLogin" class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/auth/api/login') }}">{{ __('Login') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/auth/api/register') }}">{{ __('Register') }}</a>
                                </li>
                        </div>

                        <div id="menuSiLogin" class="navbar-nav me-auto">

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre></a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        {{-- Botó Logout --}}
                                        <button onclick="logout()" class="dropdown-item">{{ __('Logout') }}</button>

                                        {{-- Botó Perfil --}}
                                        <button onclick="showUser()" class="dropdown-item">{{ __('Perfil') }}</button>

                                        {{-- Botó Editar Perfil --}}
                                        <button onclick="showEditProfile()" class="dropdown-item">{{ __('Editar Perfil') }}</button>
                                </div>

                            </li>
                        </div>
                    </ul>
            </div>
        </nav>


        <main class="container pt-5">
            @yield('content')
        </main>

    </div>

    <footer class="bg-dark mt-5">
        <p class="text-white p-3 m-0 text-center">Travel Time - Tots els drets reservats {{ now()->year }} &copy;</p>
    </footer>

    <script type="text/javascript">

        // Es recupera el menú que s'ha de mostrar a un usuari no autenticat
        const menuNoLogin = document.getElementById('menuNoLogin');

        // S'oculta el menú disponible per a administrador
        const menuAdmin = document.getElementById('menuAdmin');
        menuAdmin.style.display = 'none';

        // S'oculta el menú disponible per a un usuari que ha iniciat sessió
        const menuSiLogin = document.getElementById('menuSiLogin');
        menuSiLogin.style.display = 'none';

        // Es recupera el token que s'ha emmagatzemat al losalstorage des de la vista 'login'
        const token = window.localStorage.getItem('token');

        // Es recupera el botó de 'Editar Perfil' i es crea un event al fer click
        const botoEditProfile = document.querySelector('[data-editProfile]');

        // Si no hi ha cap 'token' creat, redirigim a l'usuari a la pàgina de login
        // per a iniciar sessió.
        if (token != null) {
            // Es recupera el rol i el nom de l'usuari que ha iniciat sessió. Aquest que s'ha emmagatzemat al losalstorage des de la vista 'login'.
            const role = window.localStorage.getItem('role');
            const name = window.localStorage.getItem('name');

            // Es posa el nom de l'usuari autenticat a la barra de menú
            const navbarDropdown = document.getElementById('navbarDropdown');
            navbarDropdown.textContent = name;

            menuNoLogin.style.display = 'none';
            menuSiLogin.style.display = 'flex';

            // Si el rol de l'usuari autenticat es d'admisnitrador, es mostra el menú
            // amb més opcions (Usuaris, Comentaris, Categories i Publicacions)
            if (role == 'admin') {
                menuAdmin.style.display = 'flex';
            }
        }
        // else if (window.location.href != 'http://localhost:8000/auth/api/login' &&
        //             window.location.href != 'http://localhost:8000/auth/api/register') {
        //     window.location.href = '/auth/api/login';
        // }

        async function logout() {

            // Es recupera l'id que s'ha emmagatzemat al losalstorage des de la vista 'login'
            let id = window.localStorage.getItem('id');

            try {
                const response = await fetch(`http://localhost:8000/api/logout/${id}`);

                if (response.ok) { // codi 200
                    window.localStorage.clear(); // S'esborra tot el 'Local Storage'.
                } else {
                    console.log('Error fent Logout.');
                }
            } catch (error) { // Aquí vindrà en el cas de que no pugui fer el fetch, per tant serà un error de connexió
                console.log('Error xarxa');
            }
            // window.location.href = 'http://localhost:8000/auth/api/login';
            window.location.href = '/taulapublicacions';

        }

        function showUser() {

            // Es recupera l'id que s'ha emmagatzemat al losalstorage des de la vista 'login'
            let id = window.localStorage.getItem('id');

            window.location.href = `/users/api/show/${id}`;

        }

        function showEditProfile() {

            // Es recupera l'id que s'ha emmagatzemat al losalstorage des de la vista 'login'
            let id = window.localStorage.getItem('id');

            window.location.href = `/users/api/update/${id}`;

        }

    </script>

</body>

</html>
