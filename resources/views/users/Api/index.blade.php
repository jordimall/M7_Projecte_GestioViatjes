@extends('plantilla')

@section('content')

    <div id="llistat-usuaris">

        <h1 class="pb-2">Usuaris</h1>
        
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <td style="border-radius:5px 0 0 0;" scope="col" class="text-center">ID</td>
                    <td scope="col" class="text-center">Nom</td>
                    <td scope="col" class="text-center">Cognoms</td>
                    <td scope="col" class="text-center">Username</td>
                    <td scope="col" class="text-center">Email</td>
                    <td scope="col" class="text-center">Creació</td>
                    <td scope="col" class="text-center">Actualització</td>
                    <td scope="col" class="text-center" style="border-radius:0 5px 0 0;">Operacions</td>
                </tr>
            </thead>
            <tbody id="taula">

            </tbody>
        </table>

        <nav class="mt-2">
            <ul id="pagination" class="pagination">

            </ul>
        </nav>

    </div>

    <div id="show-user">

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
                    <a class="btn btn-dark">
                        Canviar Password
                    </a>
                </div>
            </div>
            
            <div class="row">

                <div class="row row-cols-1 row-cols-md-4 g-4">
                    {{-- @foreach ($user->publication as $publication)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset($publication->url) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $publication->title }}</h5>
                                    <p class="card-text">{{ Str::limit($publication->description, 100) }}</p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            {{ $publication->created_at->day }}/{{ $publication->created_at->month }}/{{ $publication->created_at->year }}
                                        </small>
                                    </p>
                                    <a href="/publications/show/{{ $publication->id }}" class="w-100 btn btn-dark">Mostrar</a>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                </div>
            </div>
            
        </div>

    </div>

    <script type="text/javascript">

        // La url va directament a la carpeta '/routes/api' i dintre busca la ruta '/users'
        // que és on internament estàn definides les rutes per als GET, POST, PUT i DELETE.
        const url = 'http://localhost:8000/api/users';

        const taula = document.getElementById('taula');
        const pagination = document.getElementById('pagination');
        const llistatUsuaris = document.getElementById('llistat-usuaris');
        const showUser = document.getElementById('show-user');

        async function loadIntoTable(url) {

            showUser.style.display = "none";

            try {
                // Crida de tipus GET de la URL que conté un JSON amb tots els usuaris 
                const response = await fetch(url); // mètode 'index' del controller
                const json = await response.json();
                const users = json.data.data; // Recupero la taula d'usuaris al fer el pagination des del controller
                const links = json.data.links; // Recupero la taula de links al fer el pagination de del controller

                users.forEach(user => afegirFila(user));

                afegirLinks(links);

            } catch(error) {
                errors.innerHTML = "No es pot accedir a la base de dades";
            }

        }

        function afegirFila(user) {

            // Es crea la fila
            const tr = document.createElement('tr');
            tr.setAttribute('id', user.id);

            // Capçalera de la fila
            const id = document.createElement('th');
            id.setAttribute('scope', 'row');
            id.className = "text-center";
            id.textContent = user.id;

            // Cel·la 'Nom'
            const nom = document.createElement('td');
            nom.className = "text-center";
            nom.textContent = user.name;

            // Cel·la 'Cognoms'
            const cognoms = document.createElement('td');
            cognoms.className = "text-center";
            cognoms.textContent = user.surname;

            // Cel·la 'Username'
            const username = document.createElement('td');
            username.className = "text-center";
            username.textContent = user.username;

            // Cel·la 'Email'
            const email = document.createElement('td');
            email.className = "text-center";
            email.textContent = user.email;

            // Cel·la 'Creació'
            const creat = document.createElement('td');
            creat.className = "text-center";
            if (user.created_at) {
                let dataCreacio = user.created_at.split(/[T.]/); // Expressió regular per a separar la data pel delimitador T i el punt.
                creat.textContent = dataCreacio[0] + " a les " + dataCreacio[1];
            } else creat.textContent = user.created_at;

            // Cel·la 'Actualització'
            const actualitzat = document.createElement('td');
            actualitzat.className = "text-center";
            if (user.updated_at) {
                let dataActualitzacio = user.updated_at.split(/[T.]/); // Expressió regular per a separar la data pel delimitador T i el punt.
                actualitzat.textContent = dataActualitzacio[0] + " a les " + dataActualitzacio[1];
            } else actualitzat.textContent = user.updated_at;
            
            // Cel·la 'operacions'
            const operacions = document.createElement('td');
            operacions.className = "text-center";

            // Botó Mostrar
            const botoMostrar = document.createElement('button');
            botoMostrar.className = "btn btn-primary m-1";
            botoMostrar.textContent = "Mostrar";
            botoMostrar.addEventListener('click', mostrarUsuari);

            // Botó Actualitzar
            const botoActualitzar = document.createElement('button');
            botoActualitzar.className = "btn btn-warning m-1";
            botoActualitzar.textContent = "Actualitzar";
            botoActualitzar.addEventListener('click', actualitzarUsuari);

            // Botó Esborrar
            const botoEsborrar = document.createElement('button');
            botoEsborrar.className = "btn btn-danger m-1";
            botoEsborrar.textContent = "Delete";
            botoEsborrar.addEventListener('click', esborrarUsuari);

            // S'afegeixen tots els elements a la vista
            tr.appendChild(id);
            tr.appendChild(nom);
            tr.appendChild(cognoms);
            tr.appendChild(username);
            tr.appendChild(email);
            tr.appendChild(creat);
            tr.appendChild(actualitzat);
            operacions.appendChild(botoMostrar);
            operacions.appendChild(botoActualitzar);
            operacions.appendChild(botoEsborrar);
            tr.appendChild(operacions);
            taula.appendChild(tr);

        }

        function afegirLinks(links) {
            links.forEach(link => afegirBoto(link));
        }

        // <li class="page-item disabled">
        //     <a class="page-link" href="#" tabindex="-1">Previous</a>
        // </li>
        function afegirBoto(link) {
            const li = document.createElement("li");
            li.classList.add("page-item");

            if (link.url == null) li.classList.add("disabled"); // Deshabilito els botons de 'Previous' i 'Next'
            if (link.active) li.classList.add("active"); // La pagina activa es marca de color blau

            const a = document.createElement("a");
            a.innerHTML = link.label;
            a.addEventListener('click', function (event) { paginate(link.url) });
            a.classList.add('page-link');
            a.setAttribute('href','#');

            li.appendChild(a);
            pagination.appendChild(li);
        }

        function paginate(url) {
            pagination.innerHTML = "";
            taula.innerHTML = "";
            loadIntoTable(url);
        }

        async function mostrarUsuari(event) {

            const id = event.target.closest('tr').id;
            window.location.href='/showApi/' + id;

            // try {
            //     const id = event.target.closest('tr').id;
            //     const response = await fetch(url + "/" + id, { 
            //         method: 'GET' // Crida al mètode SHOW
            //     });
            //     const json = await response.json();
            //     if (response.ok) { // codi 200, ...
            //         llistatUsuaris.innerHTML = "";
            //         carregarUsuari(json.data);
            //     } else {
            //         console.log('Error al mostrar un usuari');
            //     }
            // } catch (error) {
            //     console.log('Error xarxa');
            // }

        }

        async function carregarUsuari(usuari) {

            llistatUsuaris.style.display = "none";
            showUser.style.display = "block";

            const nomUsuari = document.getElementById("nomUsuari");
            nomUsuari.textContent = usuari.name;

            const nomCompletUsuari = document.getElementById("nomCompletUsuari");
            nomCompletUsuari.textContent = usuari.name + " " + usuari.surname;

            const userName = document.getElementById("userName");
            userName.textContent = usuari.username;

            const emailUsuari = document.getElementById("emailUsuari");
            emailUsuari.textContent = usuari.email;
            
            try {
                // La url va directament a la carpeta '/routes/api' i dintre busca la ruta '/publications/publication'
                // Crida de tipus GET de la URL que conté un JSON amb totes les publicacions
                const response = await fetch('http://localhost:8000/api/publications'); // mètode 'index' del controller
                const json = await response.json();
                const publicacions = json.data; // Recupero la taula de publicacions al fer el all()
                const publicacionsUsuari = publicacions.filter(publicacio => publicacio.user_id == usuari.id);
                console.log(publicacionsUsuari);
                // publicacions.forEach(publicacio => afegirPublicacio(publicacio));
            } catch(error) {
                errors.innerHTML = "No es pot accedir a la base de dades";
            }
            
        }

        function actualitzarUsuari() {  }

        function esborrarUsuari() {  }

        loadIntoTable(url);

    </script>

@endsection