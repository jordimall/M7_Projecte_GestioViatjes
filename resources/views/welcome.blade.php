@extends('plantilla')

@section('content')
    <h1>Blog de Viatges</h1>

    <div id="gallery" class="mt-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4" id="contingut">

            </div>
        </div>
    </div>

    <script type="text/javascript">
        const div = document.getElementById('contingut');
        const url = 'http://localhost:8000/api/home';

        async function loadIntoContingut() {
            try {

                const response = await fetch(url);

                const json = await response.json();
                const publicacions = json.data;

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
            } catch (error) {
                console.log(error)
            }
        }
        loadIntoContingut();
    </script>
@endsection
