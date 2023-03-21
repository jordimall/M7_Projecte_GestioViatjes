@extends('plantilla')

@section('content')
    <h1 class="pb-5 text-center">Registrat al nostre Blog</h1>

    <div class="container d-flex align-items-center">

        <div class="w-50 mr-2">
            <img width="90%" src="{{ asset('img/register_photo.jpg') }}" alt="Imagen registro de usuarios">
        </div>

        <div class="pt-5 pb-5 w-50 bg-white shadow p-3 bg-white rounded">
                
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" name="name" class="form-control" required autofocus />
                    <span id="name-error" class="text-danger"></span>
                </div>
            </div>

            <div class="row mb-3">
                <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }}</label>

                <div class="col-md-6">
                    <input id="surname" type="text" name="surname" class="form-control" required autofocus />
                    <span id="surname-error" class="text-danger"></span>
                </div>
            </div>

            <div class="row mb-3">
                <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text" name="username" class="form-control" required autofocus />
                    <span id="username-error" class="text-danger"></span>
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" name="email" class="form-control" required autofocus />
                    <span id="email-error" class="text-danger"></span>
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" name="password" class="form-control" required autofocus />
                    <span id="password-error" class="text-danger"></span>
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" name="password_confirmation" class="form-control" required autofocus />
                    <span id="password-confirm-error" class="text-danger"></span>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" onclick="ferRegistre()" class="w-100 btn btn-primary btn-dark">
                        {{ __('Crear Compte') }}
                    </button>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">

        async function ferRegistre() {

            const name = document.getElementById('name').value;
            const surname = document.getElementById('surname').value;
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const password_confirmation = document.getElementById('password-confirm').value;

            if (comprovarPassword(password, password_confirmation)) {
                
                let usuari = {
                    "name": name,
                    "surname": surname,
                    "username": username,
                    "email": email,
                    "password": password,
                    "password_confirmation": password_confirmation,
                }

                try {
                    const response = await fetch('/api/register', {
                        method: 'POST', // Crida al mètode REGISTER
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
                        // Esborrar missatges d'error
                        const spans = document.getElementsByTagName('span');
                        const arraySpans = [...spans];
                        arraySpans.forEach( span => span.innerHTML = "");
                        
                        if (token.errors.name) {
                            let span = document.getElementById('name-error');
                            mostrarErrors(token.errors.name, span);
                        }
                        if (token.errors.surname) {
                            let span = document.getElementById('surname-error');
                            mostrarErrors(token.errors.surname, span);
                        }
                        if (token.errors.username) {
                            let span = document.getElementById('username-error');
                            mostrarErrors(token.errors.username, span);
                        }
                        if (token.errors.email) {
                            let span = document.getElementById('email-error');
                            mostrarErrors(token.errors.email, span);
                        }
                        if (token.errors.password) {
                            let span = document.getElementById('password-error');
                            mostrarErrors(token.errors.password, span);
                        }
                        
                    }

                } catch (error) { // Aquí vindrà en el cas de que no pugui fer el fetch, per tant serà un error de connexió
                    console.log('Error xarxa');
                }

            }

        }

        function comprovarPassword(password, password_confirmation) {
            return password === password_confirmation ? true : false;
        }

        function mostrarErrors(errors, span) {

            errors.forEach(error => {
                let strong = document.createElement('strong');
                strong.className = 'small';
                strong.innerHTML = error;
                span.appendChild(strong);
            });

        }

    </script>

@endsection
