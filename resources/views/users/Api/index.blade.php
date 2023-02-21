@extends('plantilla')

@section('content')

<h1 class="pb-2">Usuaris</h1>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <td style="border-radius:5px 0 0 0;" scope="col" class="text-center">ID</td>
                <td scope="col">ID</td>
                <td scope="col" class="text-center">Nom</td>
                <td scope="col" class="text-center">Cognoms</td>
                <td scope="col" class="text-center">Email</td>
                <td scope="col" class="text-center">Username</td>
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

    <script type="text/javascript">



    </script>

@endsection