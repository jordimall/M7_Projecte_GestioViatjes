@extends('plantilla')
@section('content')
    <h1 class="pb-2">Categories</h1>

    <div class="fs-5 d-flex flex-column">
        <div class="mb-3">
            <input type="text" name="name" id="categoriaNameInput" class="form-control">
        </div>
        <div class="mb-3" id="divButton">
            <button id="saveButton" class=" btn btn-dark">Guardar</button>
        </div>
    </div>

    <div id="errors" class="alert alert-danger" role="alert"></div>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th style="border-radius:5px 0 0 0;" scope="col" class="text-center">ID</th>
                <th scope="col">nom</th>
                <th scope="col" class="text-center">Data de creació</th>
                <th scope="col" class="text-center">Data d'actualització</th>
                <th scope="col" colspan="2" class="text-center" style="border-radius:0 5px 0 0;">Operacions</th>
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
        const taula = document.getElementById('taula');

        var categories = [];

        var operation = 'inserting';
        var selectedId;

        const divErrors = document.getElementById('errors');
        divErrors.style.display = 'none';

        const categoriaNameInput = document.getElementById('categoriaNameInput');
        const saveButton = document.getElementById('saveButton');
        saveButton.addEventListener('click', saveCategoria);

        console.log(window.localStorage.getItem('token'))

        const url = 'http://localhost:8000/api/categories';

        async function loadIntoTable(url) {
            try {

                const response = await fetch(url, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + window.localStorage.getItem('token')
                    },
                });

                const json = await response.json();
                const categories = json.data.data;
                const links = json.data.links;

                categories.forEach(categoria => {
                    afegirFila(categoria);
                });
                afegirLinks(links);
            } catch (error) {
                errors.innerHTML = "S'ha produit un error inesperat";
            }

        }

        function afegirFila(categoria) {
            const tr = document.createElement('tr');
            tr.setAttribute('id', categoria.id);
            tr.setAttribute('name', categoria.name);

            const td1 = document.createElement('th');
            td1.setAttribute('scope', 'row');

            const td2 = document.createElement('td');
            td2.setAttribute('id', 'name' + categoria.id);

            const td3 = document.createElement('td');

            const td4 = document.createElement('td');


            const operationCellDelete = document.createElement('td');
            operationCellDelete.className = 'text-center';

            const deleteButton = document.createElement('button');
            deleteButton.className += 'btn btn-danger';
            deleteButton.addEventListener('click', deleteCategoria);
            operationCellDelete.appendChild(deleteButton);

            const operationCellUpdate = document.createElement('td');
            operationCellUpdate.className = 'text-center';

            const updateButton = document.createElement('button');
            updateButton.className += 'btn btn-warning';
            updateButton.setAttribute('name', 'modificar' + categoria.id);
            updateButton.addEventListener('click', editCategoria);


            operationCellUpdate.appendChild(updateButton);

            td1.textContent = categoria['id'];
            td1.className += 'text-center';
            td2.textContent = categoria['name'];
            td3.textContent = categoria['created_at'];
            td3.className += 'text-center';
            td4.textContent = categoria['updated_at'];
            td4.className += 'text-center';

            deleteButton.textContent = "Esborrar";
            updateButton.textContent = "Actualitzar";

            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(operationCellUpdate);
            tr.appendChild(operationCellDelete);
            taula.appendChild(tr);
        }

        function afegirLinks(links) {
            for (const link of links) {
                afegirBoto(link);
            }
        }

        function afegirBoto(link) {
            const pagLi = document.createElement('li');
            pagLi.classList.add('page-item');
            if (link.url == null) {
                pagLi.classList.add('disabled');
            };

            if (link.active == true) {
                pagLi.classList.add('active');
            };

            const pagAnchor = document.createElement('a');
            pagAnchor.innerHTML = link.label;
            pagAnchor.addEventListener('click', function(event) {
                paginate(link.url)
            });
            pagAnchor.classList.add('page-link');
            pagAnchor.setAttribute('href', '#');

            pagLi.appendChild(pagAnchor);
            pagination.appendChild(pagLi);
        }

        function paginate(url) {
            pagination.innerHTML = '';
            taula.innerHTML = '';
            loadIntoTable(url);
        }

        function showErrors(errors) {

            const ul = document.createElement("ul");
            for (const error of errors) {
                const li = document.createElement('li');
                li.textContent = error;
                ul.appendChild(li);
            }
            divErrors.appendChild(ul);

        }

        function editCategoria(event) {
            const tr = event.target.closest('tr');
            const description = tr.getAttribute('name');
            selectedId = tr.getAttribute('id');
            categoriaNameInput.value = description;
            modificarBoto();
        }


        function modificarBoto() {
            const divButton = document.getElementById('divButton');
            let buttonReset = document.getElementById('reset');

            if (event.target.name != '') {
                saveButton.removeEventListener('click', saveCategoria);
                saveButton.addEventListener('click', updateCategoria);
                saveButton.innerText = 'Modificar';
                if (!buttonReset) {
                    buttonReset = document.createElement('button');
                    buttonReset.setAttribute('class', 'btn btn-dark');
                    buttonReset.setAttribute('id', 'reset');
                    buttonReset.addEventListener('click', function(event) {
                        modificarBoto();
                    });
                    buttonReset.innerText = 'Crea categoria';
                    divButton.appendChild(buttonReset);
                }
            } else {

                const buttonReset = document.getElementById('reset')
                saveButton.removeEventListener('click', updateCategoria);
                saveButton.addEventListener('click', saveCategoria);
                categoriaNameInput.value = '';
                saveButton.innerText = 'Guardar';
                divButton.removeChild(buttonReset);
            }
        }

        async function saveCategoria() {

            var newCategoria = {
                "name": categoriaNameInput.value
            }

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + window.localStorage.getItem('token')
                    },
                    body: JSON.stringify(newCategoria)
                });

                const data = await response.json();

                console.log(data);

                divErrors.innerHTML = "";

                if (response.ok) {
                    divErrors.style.display = 'none';
                    afegirFila(data.data);
                } else {
                    divErrors.style.display = 'block';
                    showErrors(data.data);
                }
            } catch (error) { // Errors de xarxa
                errors.innerHTML = "S'ha produit un error inesperat";
            }
        }

        async function updateCategoria() {

            var updateCategoria = {
                "name": categoriaNameInput.value
            }

            try {
                const response = await fetch(url + '/' + selectedId, {
                    method: 'PUT',
                    headers: {
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + window.localStorage.getItem('token')
                    },
                    body: JSON.stringify(updateCategoria)
                });

                const data = await response.json();

                divErrors.innerHTML = "";

                if (response.ok) {
                    divErrors.style.display = 'none';
                    const nameid = document.getElementById('name' + data.data.id);
                    nameid.innerHTML = data.data.name;
                    const nameAttribute = nameid.parentNode;
                    nameAttribute.setAttribute('name', data.data.name);
                } else {
                    divErrors.style.display = 'block';
                    showErrors(data.data);
                }
            } catch (error) {
                errors.innerHTML = "S'ha produit un error inesperat";
            }
        }

        async function deleteCategoria(event) {
            try {
                const id = event.target.closest('tr').id;
                const response = await fetch(url + '/' + id, {
                    method: 'DELETE',
                    headers: {
                        'Authorization': 'Bearer ' + window.localStorage.getItem('token')
                    }
                });
                const json = await response.json();
                if (response.ok) { // codi 200, ....
                    const row = document.getElementById(id);
                    row.remove();
                } else {
                    console.log('Error esborrant')
                }
                console.log(json);
            } catch (error) {
                errors.innerHTML = 'No es pot accedir a la base de dades';
            }

        }

        loadIntoTable(url);
    </script>
@endsection
