@extends('plantilla')

@section('content')
    <div class="vh-100">

        @csrf

        <div class="fs-5 d-flex flex-column">
            {{-- Mostra els dos camps per a canviar password --}}
            <div class="row mb-3">

                <label for="password" class="col-md-4 text-md-end">Password</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required>
                    
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>

            <div class="row mb-3">

                <label for="password_confirmation" class="col-md-4 text-md-end">Confirm Password</label>
                <div class="col-md-6">
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <span class="text-danger text-center mt-2">
                    <strong id="error"></strong>
                </span>

            </div>

            <div class="row mb-3 m-auto">
                <button type="submit" onclick="canviarPassword()" name="updatePassword" class="btn btn-dark">Canviar Password</button>
            </div>

        </div>

    </div>

    <script type="text/javascript">

        // La url va directament a la carpeta '/routes/api' i dintre busca la ruta '/users'
        // que és on internament estàn definides les rutes per als GET, POST, PUT i DELETE.
        const url = 'http://localhost:8000/api/users/';

        // Recupero el id de l'usuari de la URL
        let id = (window.location['pathname'].split('/'))[2];

        let error = document.getElementById('error');

        async function canviarPassword() {

            const password = document.getElementById('password').value;
            const password_confirmation = document.getElementById('password_confirmation').value;

            if (comprovarPassword(password, password_confirmation)) {

                let nouPassword = {
                    "password": password
                }

                try {

                    const response = await fetch(url + id, {
                        method: 'PUT', // Crida al mètode UPDDATE
                        headers: {
                            'Content-type': 'application/json', // tipus de contingut que enviem al servidor
                            'Accept': 'application/json' // tipus de contingut q es rep del servidor
                        },
                        body: JSON.stringify(nouPassword) // converteix un json a string, p. ex: "{'password' : '123456'}"
                    });

                    if (response.ok) { // codi 200, ...
                        window.location.href='/showApi/' + id;
                    } else {
                        console.log('Error actualitzant password');
                    }

                } catch (error) { // Aquí vindrà en el cas de que no pugui fer el fetch, per tant serà un error de connexió
                    console.log('Error xarxa');
                }

            } else {
                error.textContent = "Els passwords han de ser iguals";
            }

        }

        function comprovarPassword(password, password_confirmation) {
            return password === password_confirmation ? true : false;
        }

    </script>
@endsection
