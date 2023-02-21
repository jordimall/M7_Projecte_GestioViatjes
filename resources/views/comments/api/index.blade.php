@extends('plantilla')

@section('content')

<h1 class="pb-2">Comentaris</h1>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <td style="border-radius:5px 0 0 0;" scope="col" class="text-center">ID</td>
                <td scope="col">Descripció</td>
                <td scope="col" class="text-center">ID usuari</td>
                <td scope="col" class="text-center">ID publicació</td>
                <td scope="col" class="text-center">Data de creació</td>
                <td scope="col" class="text-center">Data d'actualització</td>
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

    <script type="text/javascript">

        // La url va directament a la carpeta '/routes/api' i dintre busca la ruta '/comments'
        // que és on internament estàn definides les rutes per als GET, POST, PUT i DELETE.
        const url = 'http://localhost:8000/api/comments';

        const taula = document.getElementById('taula');
        const pagination = document.getElementById('pagination');

        async function loadIntoTable(url) {

            try {
                // Crida de tipus GET de la URL que conté un JSON amb tots els comentaris 
                const response = await fetch(url); // mètode 'index' del controller
                const json = await response.json();
                const comments = json.data.data; // Recupero la taula de comentaris al fer el pagination des del controller
                const links = json.data.links; // Recupero la taula de links al fer el pagination de del controller

                comments.forEach(comment => afegirFila(comment));

                afegirLinks(links);

            } catch(error) {
                errors.innerHTML = "No es pot accedir a la base de dades";
            }

        }

        function afegirFila(comment) {

            // Es crea la fila
            const tr = document.createElement('tr');
            tr.setAttribute('id', comment.id);

            // Capçalera de la fila
            const id = document.createElement('th');
            id.setAttribute('scope', 'row');
            id.className = "text-center";
            id.textContent = comment.id;

            // Cel·la 'Descripció'
            const description = document.createElement('td');
            description.textContent = comment.description;

            // Cel·la 'ID usuari'
            const idUser = document.createElement('td');
            idUser.className = "text-center";
            idUser.textContent = comment.user_id;

            // Cel·la 'ID publicació'
            const idPublication = document.createElement('td');
            idPublication.className = "text-center";
            idPublication.textContent = comment.publication_id;

            // Cel·la 'Data de creació'
            const createdAt = document.createElement('td');
            createdAt.className = "text-center";
            createdAt.textContent = comment.created_at;
            
            // Cel·la 'Data d'actualització'
            const updatedAt = document.createElement('td');
            updatedAt.className = "text-center";
            updatedAt.textContent = comment.updated_at;

            // Botó esborrar
            const operationCellDelete = document.createElement('td');
            operationCellDelete.className = "text-center";

            const deleteButton = document.createElement('button');
            deleteButton.className = "btn btn-danger";
            deleteButton.textContent = "Delete";
            deleteButton.addEventListener('click', deleteComment);

            // S'afegeixen tots els elements a la vista
            tr.appendChild(id);
            tr.appendChild(description);
            tr.appendChild(idUser);
            tr.appendChild(idPublication);
            tr.appendChild(createdAt);
            tr.appendChild(updatedAt);
            operationCellDelete.appendChild(deleteButton);
            tr.appendChild(operationCellDelete);
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

        /**
         * Esborra un comentari i elimina la fila de la taula de la vista
         */
        async function deleteComment(event) {

            try {
                // Busca l'element 'tr' més proper per a recuperar el 'id'
                // També es podria haber fet event.target.parentNode.parentNode.id
                const id = event.target.closest('tr').id; 
                const response = await fetch(url + "/" + id, {
                    method: 'DELETE' // Crida al mètode DESTROY
                });
                const json = await response.json();
                if (response.ok) { // codi 200, ...
                    let fila = document.getElementById(id);
                    fila.remove(); // Elimina un element en HTML
                } else {
                    console.log('Error esborrant');
                }
            } catch (error) {
                console.log('Error xarxa');
            }

        }

        loadIntoTable(url);

    </script>

@endsection