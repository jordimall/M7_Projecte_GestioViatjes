@extends('plantilla')
@section('content')
    <div class="vh-100">

        <h1 class="text-center" id="title">Nova publicació</h1>

        <div class="fs-5 d-flex flex-column">
            <div class="row mb-3">
                <label for="title">Escriu un titul</label>
                <input type="text" name="title" id="inputTitle" class="form-control">
            </div>
            <div class="row mb-3">
                <label for="subtitle">Escriu un subtitul</label>
                <input type="text" name="subtitle" id="inputSubtitle" class="form-control">
            </div>
            <div class="row mb-3">
                <label for="description">Escriu una descripció</label>
                <textarea class="form-control" name="description" id="textAreaDescription" rows="3"></textarea>
            </div>
            <div class="row mb-3">
                <label for="img">Selecciona una imatge</label>
                <input type="file" name="img" id="inputFile" class="form-control" accept=".png, .jpg, .jpeg, .webp">
            </div>
            <div class="row mb-3">
                <label for="categories[]">Selecciona les categories:</label><br>
                <div class="d-flex" id="containerCheckbox">

                </div>
            </div>
            <div class="row mb-3 m-auto">
                <button type="submit" id="buttonAction" class="btn btn-dark">Guardar</button>
            </div>

            <div id="errors" class="alert alert-danger" role="alert"></div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script type="text/javascript">

        const pathname = window.location.pathname;
        const buttonAction = document.getElementById('buttonAction');
        const title = document.getElementById('title');
        const inputTitle = document.getElementById('inputTitle');
        const inputSubtitle = document.getElementById('inputSubtitle');
        const textAreaDescription = document.getElementById('textAreaDescription');
        const inputFile = document.getElementById('inputFile');
        const inputs = document.getElementsByTagName("input");
        const urlCategory = 'http://localhost:8000/api/categories';
        var url, comprobant = true;

        const divErrors = document.getElementById('errors');
        divErrors.style.display = 'none';

        if (pathname == "/taulapublicacions/new") {
            url = 'http://localhost:8000/api/publications';
            buttonAction.addEventListener('click', savePublication);
        } else {
            const idPublication = pathname.slice(pathname.lastIndexOf('/'));
            url = 'http://localhost:8000/api/publications' + idPublication;
            buttonAction.addEventListener('click', editPublication);
            title.innerText = 'Actualitzar publicació';
            comprobant = false;
        }

        loadIntoCategory();



        async function loadIntoCategory() {
            const divCheckbox = document.getElementById('containerCheckbox');
            const response = await fetch(urlCategory, {
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + window.localStorage.getItem('token')
                },
            });
            const json = await response.json();
            const categories = json.data.data;
            categories.forEach(category => {
                const div = document.createElement('div');
                div.setAttribute('class', 'form-check form-check-inline');
                const label = document.createElement('label');
                div.appendChild(label);
                const input = document.createElement('input');
                input.setAttribute('type', 'checkbox');
                input.setAttribute('name', 'categories[]');
                input.setAttribute('value', category.id);
                input.setAttribute('id', category.id);
                input.setAttribute('class', 'form-check-input');
                label.innerHTML += input.outerHTML + category.name;

                divCheckbox.appendChild(div);

            });

            if (!comprobant) omplirCamps(url);

        }

        async function omplirCamps() {
            const response = await fetch(url, {
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + window.localStorage.getItem('token')
                },
            });
            const json = await response.json();
            const publication = json.data;

            inputTitle.setAttribute('value', publication.title);
            inputSubtitle.setAttribute('value', publication.subtitle);
            textAreaDescription.innerText = publication.description;

            publication.categories.forEach(category => {
                const input = document.getElementById(category.id);
                input.setAttribute('checked', '');
            })


        }

        function comprovaChecked() {
            let categories = [];
            for (let i = 0; i < inputs.length; i++) {
                if (inputs[i].type == "checkbox" && inputs[i].checked) categories.push(inputs[i].value);
            }

            return categories;
        }

        async function getUser() {
            try {
                const response = await fetch('http://127.0.0.1:8000/api/user', {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': "Bearer " + window.localStorage.getItem("token")
                    }
                });

                const json = await response.json();
                return json;

            } catch (error) {
                divErrors.innerHTML = "S'ha produit un error inesperat";
                console.log('error');
            }
        }

        async function savePublication() {
            let categories = comprovaChecked();
            const user = await getUser();

            const formData = new FormData();
            formData.append('title', inputTitle.value);
            formData.append('subtitle', inputSubtitle.value);
            formData.append('description', textAreaDescription.value);
            formData.append('categories', categories);
            formData.append('user_id', user.id);
            formData.append('img', inputFile.files[0]);
            console.log(formData)
            try {

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + window.localStorage.getItem('token'),
                    }
                });


                const data = await response.json();
                divErrors.innerHTML = "";

                if (response.ok) {
                    divErrors.style.display = 'none';
                    window.location.href = 'http://localhost:8000/taulapublicacions/' + data.data.id;

                } else {
                    divErrors.style.display = 'block';
                    showErrors(data.data);
                }
            } catch (error) { // Errors de xarxa
                divErrors.style.display = 'block';

                divErrors.innerHTML = "S'ha produit un error inesperat";
            }
        }

        function showErrors(errors) {
            console.log(errors)
            const ul = document.createElement("ul");
            for (const error of errors) {
                const li = document.createElement('li');
                li.textContent = error;
                ul.appendChild(li);
            }
            divErrors.appendChild(ul);

        }


        async function editPublication() {
            let categories = comprovaChecked();

            const formData = new FormData();
            formData.append('title', inputTitle.value);
            formData.append('subtitle', inputSubtitle.value);
            formData.append('description', textAreaDescription.value);
            formData.append('categories', categories);
            formData.append('img', inputFile.files[0]);

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + window.localStorage.getItem('token')
                    }
                });

                const data = await response.json();

                divErrors.innerHTML = "";

                if (response.ok) {
                    window.location.href = 'http://localhost:8000/taulapublicacions' + url.slice(url.lastIndexOf('/'));
                } else {
                    divErrors.style.display = 'block';
                    showErrors(data.data);
                }
            } catch (error) {
                errors.innerHTML = "S'ha produit un error inesperat";
            }
        }
    </script>
@endsection
