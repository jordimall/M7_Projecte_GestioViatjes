@extends('plantilla')

@section('content')

<div class="vh-100">

    <h1 class="pb-5 text-center">Editar el teu perfil</h1>

    <div class="d-flex align-items-center">

        <div class="w-50 mr-2">
            <img width="90%" src="{{ asset('img/register_photo.jpg') }}" alt="Imagen registro de usuarios">
        </div>

        <div class="pt-5 pb-5 w-50 bg-white shadow p-3 bg-white rounded">

            <div class="row mb-3">
                
                <label for="name" class="col-md-4 col-form-label text-md-end">Nom: </label>
                <div class="col-md-6">
                    <input id="name" type="text" name="name" value="" required autofocus>
                    <span class="invalid-feedback" role="alert">
                        <strong id="error"></strong>
                    </span>
                </div>

            </div>

            <div class="row mb-3">

                <label for="surname" class="col-md-4 col-form-label text-md-end">Cognoms: </label>
                <div class="col-md-6">
                    <input id="surname" type="text" name="surname" value="" required autofocus>
                    <span class="invalid-feedback" role="alert">
                        <strong id="error"></strong>
                    </span>
                </div>

            </div>

            <div class="row mb-3">

                <label for="username" class="col-md-4 col-form-label text-md-end">Username: </label>
                <div class="col-md-6">
                    <input id="username" type="text" name="username" value="" required autofocus>
                    <span class="invalid-feedback" role="alert">
                        <strong></strong>
                    </span>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" onclick="actualitzarUsuari()" name="updateUser" class="btn btn-dark">Actualitzar</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">

    // La url va directament a la carpeta '/routes/api' i dintre busca la ruta '/users'
    // que és on internament estàn definides les rutes per als GET, POST, PUT i DELETE.
    const url = 'http://localhost:8000/api/users/';
    
    // Recupero el id de l'usuari de la URL
    let id = (window.location['pathname'].split('/'))[4];

    async function carregarDadesUsuari() {

        try {
            const response = await fetch("http://localhost:8000/api/users/" + id, { 
                method: 'GET' // Crida al mètode SHOW
            });
            const json = await response.json();
            if (response.ok) { // codi 200, ...
                mostrarDadesUsuari(json.data);
            } else {
                console.log('Error al mostrar un usuari');
            }
        } catch (error) {
            console.log('Error xarxa');
        }

    }

    function mostrarDadesUsuari(usuari) {

        let name = document.getElementById('name');
        name.value = usuari.name;

        let surname = document.getElementById('surname');
        surname.value = usuari.surname;

        let username = document.getElementById('username');
        username.value = usuari.username;

    }

    function actualitzarUsuari() {
        
        const name = document.getElementById('name').value;
        const surname = document.getElementById('surname').value;
        const username = document.getElementById('username').value;

        let usuariActualitzat = {
            "name": name,
            "surname": surname,
            "username": username
        }
        
        try {
            const response = await fetch(`${url}${id}`, {
                method: 'PUT', // Crida al mètode UPDDATE
                headers: {
                    'Content-type': 'application/json', // tipus de contingut que enviem al servidor
                    'Accept': 'application/json' // tipus de contingut q es rep del servidor
                },
                body: JSON.stringify(nouPassword) // converteix un json a string, p. ex: "{'password' : '123456'}"
            });

            if (response.ok) { // codi 200, ...
                window.location.href='/users/api/show/' + id;
            } else {
                console.log('Error actualitzant password');
            }

        } catch (error) { // Aquí vindrà en el cas de que no pugui fer el fetch, per tant serà un error de connexió
            console.log('Error xarxa');
        }

    }
    
    carregarDadesUsuari();

</script>

@endsection