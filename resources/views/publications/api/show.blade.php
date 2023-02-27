@extends('plantilla')
@section('content')
    <h1 class="text-center pb-4" id="title"></h1>

    <div class="container">
        <div class="row" id="row">

        </div>
    </div>



    <script>
        const row = document.getElementById('row');
        const title = document.getElementById('title');
        const id = window.location;
        const url = 'http://localhost:8000/api/publications' + id.pathname.substring(18);

        async function loadIntoContainer() {
            try {

                const response = await fetch(url);
                const json = await response.json();
                const publicacio = json.data;

                title.innerText = publicacio.title;

                const divColImg = document.createElement('div');
                divColImg.setAttribute('class', 'col');
                const picture = document.createElement('picture');
                const img = document.createElement('img');
                img.setAttribute('src', '../../' + publicacio.url);
                img.setAttribute('class', 'rounded img-fluid');
                picture.appendChild(img);
                divColImg.appendChild(picture);
                row.appendChild(divColImg);

                const divColContainer = document.createElement('div');
                divColContainer.setAttribute('class', 'col');
                row.appendChild(divColContainer);


                const divRowSubTitle = document.createElement('div');
                divRowSubTitle.setAttribute('class', 'row');
                const divSubTitle = document.createElement('div');
                divSubTitle.setAttribute('class', 'pl-3 pt-2 fs-4');
                const strongSubTitle = document.createElement('strong');
                strongSubTitle.innerText = publicacio.subtitle;
                divSubTitle.appendChild(strongSubTitle);
                divRowSubTitle.appendChild(divSubTitle);
                divColContainer.appendChild(divRowSubTitle);


                const divRowDescription = document.createElement('div');
                divRowDescription.setAttribute('class', 'row');
                const divDescription = document.createElement('div');
                divDescription.setAttribute('class', 'pl-3 pt-1');
                const pDescription = document.createElement('p');
                pDescription.setAttribute('class', 'h5');
                pDescription.innerText = publicacio.description;
                divDescription.appendChild(pDescription);
                divRowDescription.appendChild(divDescription);
                divColContainer.appendChild(divRowDescription);

                const divRowCategories = document.createElement('div');
                divRowCategories.setAttribute('class', 'row');
                const divCategories = document.createElement('div');
                divCategories.setAttribute('class', 'pl-3 pt-1');

                const pCategories = document.createElement('p');
                pCategories.setAttribute('class', 'h6');
                publicacio.categories.forEach(category => {
                    pCategories.innerText += ' #' + category.name
                });
                divCategories.appendChild(pCategories);
                divRowCategories.appendChild(divCategories);
                divColContainer.appendChild(divRowCategories);

                const divRowUser = document.createElement('div');
                divRowUser.setAttribute('class', 'row');
                const divUser = document.createElement('div');
                divUser.setAttribute('class', 'pl-3 pt-1 d-flex justify-content-start d-flex flex-column');
                const div = document.createElement('div');
                const svg = document.createElement('svg');
                svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
                svg.setAttribute('width', '20');
                svg.setAttribute('height', '20');
                svg.setAttribute('fill', '#0d6efd');
                svg.setAttribute('viewBox', '0 0 16 16');
                svg.setAttribute('class', 'bi bi-person-fill');
                const path = document.createElement('path');
                path.setAttribute('d', 'M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z');
                svg.appendChild(path);
                div.appendChild(svg);
                divUser.appendChild(div);
                divRowUser.appendChild(divUser);

                const strongUserName = document.createElement('strong');
                strongUserName.innerText = publicacio.user.name;
                div.appendChild(strongUserName);
                divColContainer.appendChild(divRowUser);
                console.log(window.localStorage.getItem("token"))
                // if()



            } catch (error) {
                console.log(error)
            }
        }

        async function getToken() {
            try {
                const response = await fetch('http://127.0.0.0:8001/token');
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
