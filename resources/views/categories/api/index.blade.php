@extends('plantilla')
@section('content')
    CRUD CATEGORIES
    <div>
        <input type="text" id="categoriaNameInput">
        <button id="saveButton">save</button>
    </div>

    <div id="errors" class="alert alert-danger" role="alert"></div>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Data de creació</th>
                <th>Data de actualització</th>
            </tr>
        </thead>
        <tbody id="taula">

        </tbody>
    </table>

    <script type="text/javascript">
        const taula = document.getElementById('taula');

        const divErrors = document.getElementById('errors');
        divErrors.style.display = 'none';

        const categoriaNameInput = document.getElementById('categoriaNameInput');
        const saveButton = document.getElementById('saveButton');
        //saveButton.addEventListener('click', saveCategoria);

        const url = 'http://localhost:8000/api/category';

        async function loadIntoTable(url) {
            try {

                const response = await fetch(url); // Crida de tipus GET de la URL que conté un JSON amb tots els planetes

                const json = await response.json();
                const categories = json.data;

                categories.forEach(categoria => {
                    afegirFila(categoria);
                });
            } catch (error) {

            }

        }

        function afegirFila(categoria) {
            const tr = document.createElement('tr');
            tr.setAttribute('id', categoria.id);
            const td1 = document.createElement('td');
            const td2 = document.createElement('td');
            const td3 = document.createElement('td');
            const td4 = document.createElement('td');

            const operationCell = document.createElement('td');
            const deleteButton = document.createElement('button');
            //deleteButton.addEventListener('click', deleteCategoria);

            const updateButton = document.createElement('button');
            //updateButton.addEventListener('click', updateCategoria);

            operationCell.appendChild(deleteButton);
            operationCell.appendChild(updateButton);

            td1.textContent = categoria['id'];
            td2.textContent = categoria['name'];
            td3.textContent = categoria['created_at'];
            td4.textContent = categoria['updated_at'];

            deleteButton.textContent = "Delete";
            updateButton.textContent = "Update";

            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(operationCell);
            taula.appendChild(tr);
        }

        loadIntoTable(url);
    </script>
@endsection
