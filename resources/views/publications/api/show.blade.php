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
                        {{-- @auth
                            <div class="mt-3">
                                @if (Auth::user()->id == $publication->user_id)
                                    <a href="{{ route('publications.edit', $publication->id) }}" class="btn btn-dark">Edita
                                        publicaió</a>
                                @endif
                                @if (Auth::user()->id == $publication->user_id || Auth::user()->role == 'admin')
                                    <a href="{{ route('publications.destroy', $publication->id) }}"
                                        class="btn btn-danger">Eliminar publicaió</a>
                                @endif
                            </div>

                        @endauth --}}
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

                        <div class="form-group mt-3 mb-3">
                            <button type="submit" class="btn btn-dark" id="buttonComenta">Comenta</button>
                        </div>

                </div>
            </div>


            {{-- @auth

                    @if ($comment->user->id == Auth::user()->id)
                        <div class="col">
                            <ul class="navbar-nav">
                                <li>
                                    <a id="navbarDropdown" class="nav-link " href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <div>
                                            <a class="dropdown-item" href="/comments/update/{{ $comment->id }}">
                                                {{ __('Modificar') }}
                                            </a>

                                            <a class="dropdown-item" href="/comments/delete/{{ $comment->id }}">
                                                {{ __('Eliminar') }}
                                            </a>

                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endif
                @endauth --}}


        </div>

        <script>
            const title = document.getElementById('title');
            const id = window.location;
            const url = 'http://localhost:8000/api/publications' + id.pathname.substring(18);
            const urlComment = 'http://localhost:8000/api/comments';
            const inputComment = document.getElementById('inputComment');
            const buttonComenta = document.getElementById('buttonComenta');
            buttonComenta.addEventListener('click',saveComentari);
            const divErrors = document.getElementById('errors');
        divErrors.style.display = 'none';

            async function loadIntoContainer() {
                try {

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

                    // const token = window.localStorage.getItem("token");
                    // console.log(token);
                    // if(token){
                    //     const divButtom = document.createElement('div');
                    //     divButtom.setAttribute('class','mt-3');

                    // }

                    const divFormComment = document.getElementById('formComment');

                    console.log(publicacio);

                    publicacio.comments.forEach(comment => {
                        let divRow = document.createElement('div');
                        divRow.setAttribute('class', 'row pt-2');

                        let divCol = document.createElement('div');
                        divCol.setAttribute('class', 'col d-flex align-items-center');

                        let pComment = document.createElement('p');
                        pComment.setAttribute('class', 'h6 mb-0');

                        let span = document.createElement('span');
                        span.setAttribute('class', 'text-primary');
                        span.innerText = `@${comment.user.username}`;

                        pComment.appendChild(span);
                        pComment.innerHTML += ' ' + comment.description;

                        divCol.appendChild(pComment);
                        divRow.appendChild(divCol);

                        // Falta if

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

                        li.appendChild(divMenu);

                        let aUpdate = document.createElement('a');
                        aUpdate.setAttribute('class', 'dropdown-item');
                        aUpdate.setAttribute('href', '');
                        aUpdate.innerText = 'Modificar';
                        divMenu.appendChild(aUpdate);

                        let aDelete = document.createElement('a');
                        aDelete.setAttribute('class', 'dropdown-item');
                        aDelete.setAttribute('href', '');
                        aDelete.innerText = 'Eliminar';
                        divMenu.appendChild(aDelete);

                        divFormComment.appendChild(divRow);

                    });

                } catch (error) {
                    console.log(error)
                }
            }

            async function saveComentari() {

                var newComentari = {
                    "name": inputComment.value
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

                } catch (error) {
                    console.log('error');
                }
            }

            async function getInfos() {
                await getToken();
                await getUser();
            }

            getInfos();
            loadIntoContainer();
        </script>
    @endsection
