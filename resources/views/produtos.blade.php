<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Produtos</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
@include('navbar');

<body class="">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">cpf</th>
                    <th scope="col">nome</th>
                    <th scope="col">criado em</th>
                    <th>editar</th>
                    <th>deletar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($clientes as $u)
                <tr>
                    <th scope="row">{{$u->id}}</th>
                    <td>{{$u->cpf}}</td>
                    <td>{{$u->nome_cliente}}</td>
                    <td>{{$u->created_at}}</td>
                    <td><a class="btn btn-secondary" href="/editar_cliente">Editar</a></td>
                    <td><a class="btn btn-danger" href="">Deletar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>