@extends('plantilla')

@section('content')
    <h1 class="pb-5 text-center">Iniciar Sessió</h1>

    <div class="container">

        <div class="d-flex align-items-center">

            <div class="w-50">
                <img class="w-50 img-fluid mx-auto d-block" src="{{ asset('img/logo_negre.png') }}"
                    alt="Imagen registro de usuarios">
            </div>

            <div class="pt-4 pb-4 w-50 bg-white shadow bg-white rounded">

                    <div class="row mb-3">
                        <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control" required>
                            <span id="error-login" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" onclick="ferLogin()" name="ferLogin" class="btn btn-dark">{{ __('Login') }}</button>
                            
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

            </div>

        </div>

    </div>

<script type="text/javascript">

    async function ferLogin() {

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        let usuari = {
            "email": email,
            "password": password
        }
        
        try {
            const response = await fetch('/api/login', {
                method: 'POST', // Crida al mètode LOGIN
                headers: {
                    'Content-type': 'application/json', // tipus de contingut que enviem al servidor
                    'Accept': 'application/json' // tipus de contingut q es rep del servidor
                },
                body: JSON.stringify(usuari) // converteix un json a string, p. ex: "{'password' : '123456'}"
            });

            let token = await response.json();

            if (response.ok) { // codi 200, ...

                window.localStorage.setItem('token',token.data.token);
                window.localStorage.setItem('name',token.data.name);
                window.localStorage.setItem('id',token.data.id);
                window.localStorage.setItem('role',token.data.role);
                window.location.href = '/taulapublicacions';

            } else {
                let span = document.getElementById('error-login');
                let strong = document.createElement('strong');
                strong.className = 'small';
                strong.innerHTML = "Login o password incorrectes";
                span.appendChild(strong);
            }

        } catch (error) { // Aquí vindrà en el cas de que no pugui fer el fetch, per tant serà un error de connexió
            console.log('Error xarxa');
        }

    }

</script>

@endsection
