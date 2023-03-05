@extends('plantilla')
@section('content')
    <h1 class="text-center pb-4" id="title"></h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <picture>
                    <img src="" class="rounded img-fluid" id="img">
                </picture>
            </div>
            <div class="col">
                <div class="row">
                    <div class="pl-3 pt-2 fs-4">
                        <strong id="strongSubTitle"></strong>
                    </div>
                </div>
                <div class="row">
                    <div class="pl-3 pt-1">
                        <p class="h5" id="pDescription"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="pl-3 pt-1">
                        <p class="h6" id="pCategories"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="pl-3 pt-1 d-flex justify-content-start d-flex flex-column">
                        <div id="userName">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0d6efd"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                            <strong id="strongUserName"></strong>
                        </div>
                        <div class="mt-3" id="buttonSCRUM"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-4" id="formComment">
                <div class="fs-4">
                    <strong class="pl-5">Comentaris</strong>

                    <div class="form-group">
                        <label for="description">Escriu el comentari</label>
                        <textarea class="form-control" name="description" id="inputComment" rows="3"></textarea>
                    </div>

                    <div id="errors" class="alert alert-danger" role="alert"></div>

                    <div class="form-group mt-3 mb-3" id="divButton">
                        <button type="submit" class="btn btn-dark" id="buttonComenta">Comenta</button>
                    </div>

                </div>

            </div>


        </div>

        <script>
            var selectedId;

            const title = document.getElementById('title');
            const idPublication = window.location.pathname.substring(19);
            const url = 'http://localhost:8000/api/publications/' + idPublication;
            const urlComment = 'http://localhost:8000/api/comments';
            const inputComment = document.getElementById('inputComment');
            const buttonComenta = document.getElementById('buttonComenta');
            const divErrors = document.getElementById('errors');
            divErrors.style.display = 'none';

            function afegirFila(comment, user) {

                const divFormComment = document.getElementById('formComment');
                let divRow = document.createElement('div');
                divRow.setAttribute('class', 'row pt-2');
                divRow.setAttribute('id', 'delete' + comment.id);

                let divCol = document.createElement('div');
                divCol.setAttribute('class', 'col d-flex align-items-center');

                let pComment = document.createElement('p');
                pComment.setAttribute('class', 'h6 mb-0');
                pComment.setAttribute('id', 'description' + comment.id);

                let span = document.createElement('span');
                span.setAttribute('class', 'text-primary');
                span.innerText = `@${comment.user.username}`;

                pComment.appendChild(span);
                pComment.innerHTML += ' ' + comment.description;

                divCol.appendChild(pComment);
                divRow.appendChild(divCol);

                if (comment.user_id == user.id) {

                    let divColMenu = document.createElement('div');
                    divColMenu.setAttribute('class', 'col');
                    divRow.appendChild(divColMenu);

                    let ul = document.createElement('ul');
                    ul.setAttribute('class', 'navbar-nav');
                    divColMenu.appendChild(ul);

                    let li = document.createElement('li');
                    ul.appendChild(li);

                    let aIcon = document.createElement('a');
                    aIcon.setAttribute('class', 'nav-link');
                    aIcon.setAttribute('id', 'navbarDropdown');
                    aIcon.setAttribute('href', '#');
                    aIcon.setAttribute('role', 'button');
                    aIcon.setAttribute('data-bs-toggle', 'dropdown');
                    aIcon.setAttribute('aria-haspopup', 'true');
                    aIcon.setAttribute('aria-expanded', 'false');
                    aIcon.setAttribute('v-pre', '');
                    li.appendChild(aIcon);

                    let svg = document.createElement('svg');
                    svg.setAttribute('class', 'bi bi-pencil-square');
                    svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
                    svg.setAttribute('width', '16');
                    svg.setAttribute('height', '16');
                    svg.setAttribute('fill', 'currentColor');
                    svg.setAttribute('viewBox', '0 0 16 16');


                    let pathPrincipal = document.createElement('path');
                    pathPrincipal.setAttribute('d',
                        'M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 ' +
                        '0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'
                    );
                    svg.appendChild(pathPrincipal);


                    let pathSecundari = document.createElement('path');
                    pathSecundari.setAttribute('fill-rule', 'evenodd');
                    pathSecundari.setAttribute('d',
                        'M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5' +
                        ' 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'
                    );
                    svg.appendChild(pathSecundari);

                    aIcon.innerHTML = svg.outerHTML;

                    let divMenu = document.createElement('div');
                    divMenu.setAttribute('class', 'dropdown-menu');
                    divMenu.setAttribute('aria-labelledby', 'navbarDropdown');
                    divMenu.setAttribute('id', comment.id);
                    divMenu.setAttribute('description', comment.description);

                    li.appendChild(divMenu);

                    let buttonUpdate = document.createElement('button');
                    buttonUpdate.setAttribute('class', 'dropdown-item');
                    buttonUpdate.setAttribute('name', 'modificar' + comment.id);
                    buttonUpdate.innerText = 'Modificar';
                    buttonUpdate.addEventListener('click', function(event) {
                        editComment(event, user);
                    });
                    divMenu.appendChild(buttonUpdate);

                    let buttonDelete = document.createElement('button');
                    buttonDelete.setAttribute('class', 'dropdown-item');
                    buttonDelete.innerText = 'Eliminar';
                    buttonDelete.addEventListener('click', deleteComment);
                    divMenu.appendChild(buttonDelete);

                }

                divFormComment.appendChild(divRow);

            }

            function editComment(event, user) {
                const div = event.target.closest('div');
                const description = div.getAttribute('description');
                selectedId = div.getAttribute('id');
                inputComment.value = description;
                modificarBoto(user);
            }

            function modificarBoto(user) {
                const divButton = document.getElementById('divButton');
                let buttonReset = document.getElementById('reset');

                if (event.target.name != '') {
                    buttonComenta.removeEventListener('click', store);
                    buttonComenta.addEventListener('click', updateComment);
                    buttonComenta.innerText = 'Modifica';
                    if (!buttonReset) {
                        buttonReset = document.createElement('button');
                        buttonReset.setAttribute('class', 'btn btn-dark');
                        buttonReset.setAttribute('id', 'reset');
                        buttonReset.addEventListener('click', function(event) {
                            modificarBoto(user);
                        });
                        buttonReset.innerText = 'Crea comentari';
                        divButton.appendChild(buttonReset);
                    }
                } else {

                    const buttonReset = document.getElementById('reset')
                    buttonComenta.removeEventListener('click', updateComment);
                    buttonComenta.addEventListener('click', store = function(event) {
                        saveComentari(user, idPublication)
                    });
                    buttonComenta.innerText = 'Comenta';
                    divButton.removeChild(buttonReset);
                }
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

            async function getToken() {
                try {
                    const response = await fetch('http://localhost:8000/token');
                    const json = await response.json();
                    window.localStorage.setItem('token', json.token);
                    // localStorage.setItem('myCat','Tom');
                } catch (error) {
                    console.log(error);
                }
            }

            async function getUser() {
                try {
                    const response = await fetch('http://127.0.0.1:8000/api/user', {
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'Authorization': "Bearer " + window.localStorage.getItem("token")
                        }
                    });

                    const json = await response.json();
                    return json;

                } catch (error) {
                    console.log('error');
                }
            }

            async function loadIntoContainer() {
                try {
                    await getToken();
                    const user = await getUser();
                    buttonComenta.addEventListener('click', store = function(event) {
                        saveComentari(user, idPublication)
                    });

                    const response = await fetch(url);
                    const json = await response.json();
                    const publicacio = json.data;
                    title.innerText = publicacio.title;

                    const img = document.getElementById('img');
                    img.setAttribute('src', '../../' + publicacio.url);

                    const strongSubTitle = document.getElementById('strongSubTitle');
                    strongSubTitle.innerText = publicacio.subtitle;

                    const pDescription = document.getElementById('pDescription');
                    pDescription.innerText = publicacio.description;

                    const pCategories = document.getElementById('pCategories');

                    publicacio.categories.forEach(category => {
                        pCategories.innerText += ' #' + category.name
                    });

                    const strongUserName = document.getElementById('strongUserName');
                    strongUserName.innerText = publicacio.user.name;

                    const divButton = document.getElementById('buttonSCRUM');


                    if (user.id == publicacio.user.id) {

                        const aEdit = document.createElement('a');
                        aEdit.setAttribute('href', 'http://localhost:8000/taulapublicacions/edit/' + publicacio.id);
                        aEdit.setAttribute('class', 'btn btn-dark');
                        aEdit.innerText = 'Edita publicaió';
                        divButton.appendChild(aEdit);
                    }

                    if (user.id == publicacio.user.id || user.role == 'admin') {
                        const buttonDeletePublicacio = document.createElement('button');
                        buttonDeletePublicacio.setAttribute('class', 'btn btn-danger');
                        buttonDeletePublicacio.addEventListener('click', deletePublication);
                        buttonDeletePublicacio.innerText = 'Eliminar publicaió';
                        divButton.appendChild(buttonDeletePublicacio);
                    }

                    publicacio.comments.forEach(comment => {

                        afegirFila(comment, user);


                    });

                } catch (error) {
                    console.log(error)
                }
            }

            async function deletePublication() {
                try {
                    console.log(url)
                    const response = await fetch(url, {
                        method: 'DELETE'
                    });
                    const json = await response.json();
                    if (response.ok) { // codi 200, ....
                        window.location.hash('/home');
                    } else {
                        console.log('Error esborrant')
                    }

                } catch (error) {
                    errors.innerHTML = 'No es pot accedir a la base de dades';
                    console.log(error)
                }
            }

            async function saveComentari(user, idPublication) {

                var newComentari = {
                    "description": inputComment.value,
                    "user_id": user.id,
                    "publication_id": idPublication
                }

                try {
                    const response = await fetch(urlComment, {
                        method: 'POST',
                        headers: {
                            'Content-type': 'application/json', // En quin format envio l'informació.
                            'Accept': 'application/json' // En quin format accepto l'informació.
                        },
                        body: JSON.stringify(newComentari)
                    });
                    const data = await response.json();

                    divErrors.innerHTML = "";

                    if (response.ok) {
                        divErrors.style.display = 'none';
                        afegirFila(data.data, user);
                        inputComment.value = '';
                    } else {
                        divErrors.style.display = 'block';
                        showErrors(data.data);
                    }
                } catch (error) { // Errors de xarxa
                    errors.innerHTML = "S'ha produit un error inesperat";
                    console.log(error)
                }
            }

            async function updateComment() {
                var updateComentari = {
                    "description": inputComment.value,
                }

                try {
                    const response = await fetch(urlComment + '/' + selectedId, {
                        method: 'PUT',
                        headers: {
                            'Content-type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify(updateComentari)
                    });

                    const data = await response.json();

                    divErrors.innerHTML = "";

                    if (response.ok) {
                        divErrors.style.display = 'none';
                        const descriptionid = document.getElementById('description' + data.data.id);
                        descriptionid.innerHTML = descriptionid.innerHTML.replace(
                            descriptionid.innerHTML.slice((descriptionid.innerHTML.lastIndexOf(">") + 1)),
                            data.data.description
                        );
                        const descriptionAttribute = document.getElementById(data.data.id);
                        descriptionAttribute.setAttribute('description', data.data.description);
                    } else {
                        divErrors.style.display = 'block';
                        showErrors(data.data);
                    }
                } catch (error) {
                    errors.innerHTML = "S'ha produit un error inesperat";
                }
            }

            async function deleteComment() {
                try {
                    const id = event.target.closest('div').id;
                    const response = await fetch(urlComment + '/' + id, {
                        method: 'DELETE'
                    });
                    const json = await response.json();
                    if (response.ok) { // codi 200, ....
                        const row = document.getElementById('delete' + id);
                        console.log(row);
                        row.remove();
                    } else {
                        console.log('Error esborrant')
                    }
                    console.log(json);
                } catch (error) {
                    errors.innerHTML = 'No es pot accedir a la base de dades';
                }
            }

            loadIntoContainer();
        </script>
    @endsection
