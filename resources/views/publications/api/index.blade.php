@extends('plantilla')
@section('content')
    <h1 class="pb-2">Publicacions</h1>

    <button id="botoNewPublicacio" onclick="newPublicacio()" class="btn btn-primary btn-dark">Crea publicació</button>

    <div class="row row-cols-1 row-cols-md-4 g-4 pt-4" id="container">

    </div>

    <nav class="mt-2">

        <ul id="pagination" class="pagination">

        </ul>

    </nav>

    <script>
        const div = document.getElementById('container');
        const url = 'http://localhost:8000/api/publications';
        const pagination = document.getElementById('pagination');
        const botoNewPublicacio = document.getElementById('botoNewPublicacio');

        async function loadIntoContainer(url) {
            try {

                const response = await fetch(url, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + window.localStorage.getItem('token')
                    },
                });

                const json = await response.json();
                const publicacions = json.data.data;
                const links = json.data.links;
                publicacions.forEach(publicacio => {
                    const divCol = document.createElement('div');
                    divCol.className = 'col';

                    const divCard = document.createElement('div');
                    divCard.className = 'card';
                    divCard.style.width = '18rem';
                    divCol.appendChild(divCard);

                    const picture = document.createElement('picture');
                    const img = document.createElement('img');
                    img.setAttribute('src', publicacio.url);
                    img.className = 'card-img-top img-fluid';
                    img.style.height = '200px';
                    picture.appendChild(img);
                    divCard.appendChild(picture);

                    const divCardBody = document.createElement('div');
                    divCardBody.className = 'card-body';
                    const h3 = document.createElement('h3');
                    h3.innerText = publicacio.title;
                    h3.className = 'pt-2';
                    const pDescripcio = document.createElement('p');
                    pDescripcio.innerText = publicacio.description.slice(0, 95) + '...';
                    pDescripcio.className = 'pb-2';
                    const pData = document.createElement('p');
                    pData.className = 'card-text';
                    const small = document.createElement('small');
                    small.innerText = publicacio.created_at.substring(0, 10).split("-").reverse().join("-");
                    small.className = 'text-muted';
                    pData.appendChild(small);
                    const a = document.createElement('a');
                    a.setAttribute('href', 'http://localhost:8000/taulapublicacions/' + publicacio.id);
                    a.className = 'w-100 btn btn-dark';
                    a.innerText = 'Mostrar'
                    divCardBody.appendChild(h3);
                    divCardBody.appendChild(pDescripcio);
                    divCardBody.appendChild(pData);
                    divCardBody.appendChild(a);
                    divCard.appendChild(divCardBody);

                    div.appendChild(divCol);

                });
                afegirLinks(links);
            } catch (error) {
                console.log(error)
            }
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

            if(link.active == true){
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
            div.innerHTML = '';
            loadIntoContainer(url);
        }

        function newPublicacio() {

            let token = window.localStorage.getItem('token');

            if (token != null) {
                window.location.href = "http://localhost:8000/taulapublicacions/new";
            } else window.location.href = "http://localhost:8000/auth/api/login";

        }

        loadIntoContainer(url);
    </script>
@endsection
