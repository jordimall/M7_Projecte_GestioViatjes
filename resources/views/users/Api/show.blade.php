@extends('plantilla')

@section('content')

<div>

    <h1 class="text-center pb-4">Perfil de <span id="nomUsuari"></span></h1>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col fs-5">
                <strong class="pl-5">Nom complet: </strong><span id="nomCompletUsuari"></span><br>
            </div>
            <div class="col fs-5">
                <strong class="pl-5">Username: </strong><span id="userName"></span><br>
            </div>
            <div class="col fs-5">
                <strong class="pl-5">Email: </strong><span id="emailUsuari"></span><br>
            </div>
            <div class="col">
                <button class="btn btn-dark" onclick="canviarpassword()">Canviar Password</button>
            </div>
        </div>
        
        <div class="row">
            <div id="publicacions" class="row row-cols-1 row-cols-md-4 g-4">
                {{-- Llistat de publicacions --}}
            </div>
        </div>
        
    </div>

</div>

<script type="text/javascript">
    
    // Recupero el id de l'usuari de la URL
    let id = (window.location['pathname'].split('/'))[4];
    
    async function carregarDadesUsuari() {

        try {
            const response = await fetch("http://localhost:8000/api/users/" + id, { 
                method: 'GET', // Crida al mètode SHOW
                headers: {
                    'Accept': 'application/json', // tipus de contingut q es rep del servidor
                    'Authorization': 'Bearer ' + window.localStorage.getItem('token')
                },
            });
            const json = await response.json();
            if (response.ok) { // codi 200, ...
                mostrarDadesUsuari(json.data);
                json.data.publication.forEach(publicacio => {
                    mostrarPublicacio(publicacio);
                });
            } else {
                console.log('Error al mostrar un usuari');
            }
        } catch (error) {
            console.log('Error xarxa');
        }

    }

    function mostrarDadesUsuari(usuari) {

        let nomUsuari = document.getElementById('nomUsuari');
        nomUsuari.textContent = usuari.name;

        let nomCompletUsuari = document.getElementById('nomCompletUsuari');
        nomCompletUsuari.textContent = usuari.name + " " + usuari.surname;

        let userName = document.getElementById('userName');
        userName.textContent = usuari.username;

        let emailUsuari = document.getElementById('emailUsuari');
        emailUsuari.textContent = usuari.email;

    }

    function mostrarPublicacio(publicacio) {

        const publicacions = document.getElementById('publicacions');

        const columna = document.createElement('div');
        columna.className = "col";

        const targeta = document.createElement('div');
        targeta.className = "card";
        targeta.style = "width: 18rem";
        
        const imatge = document.createElement('img');
        imatge.setAttribute('src', "../../../" + publicacio.url);
        imatge.className = "card-img-top";
        
        const bodyTargeta = document.createElement('div');
        bodyTargeta.className = "card-body";

        const titol = document.createElement('h5');
        titol.className = "card-title";
        titol.textContent = publicacio.title;

        const descripcio = document.createElement('p');
        descripcio.className = "card-text";
        descripcio.textContent = publicacio.description.substring(0,100) + "...";

        const data = document.createElement('p');
        data.className = "card-text";

        const small = document.createElement('small');
        small.className = "text-muted";
        let dataCreacio = ((publicacio.created_at.split('T'))[0].split('-')).reverse();
        small.textContent = dataCreacio[0] + "/" + dataCreacio[1] + "/" + dataCreacio[2];

        const boto = document.createElement('a');
        boto.className = "w-100 btn btn-dark";
        boto.setAttribute('href', "/publications/api/show/" + publicacio.id);
        boto.textContent = "Mostrar";

        data.appendChild(small);
        bodyTargeta.appendChild(titol);
        bodyTargeta.appendChild(descripcio);
        bodyTargeta.appendChild(data);
        bodyTargeta.appendChild(boto);
        targeta.appendChild(imatge);
        targeta.appendChild(bodyTargeta);
        columna.appendChild(targeta);
        publicacions.appendChild(columna);

    }

    function canviarpassword() {
        window.location.href='/users/api/changePasswordApi/' + id;
    }

    carregarDadesUsuari();

</script>

@endsection