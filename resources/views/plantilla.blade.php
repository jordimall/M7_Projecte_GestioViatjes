<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestió de Viatges - Grup 5</title>
    {{-- Aplico estils Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/users') }}">Usuaris</a>
        <a href="{{ url('/publications') }}">Publicacions</a>
        <a href="{{ url('/comments') }}">Comentaris</a>
        <a href="{{ url('/categories') }}">Categories</a>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>