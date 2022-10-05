<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pedidos</title>

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
                    <th scope="col">@sortablelink('client_id', 'Id do Cliente')</th>
                    <th scope="col">Nome do Cliente</th>
                    <th scope="col">@sortablelink('status')</th>
                    <th scope="col">@sortablelink('created_at', 'Criado Em')</th>
                    <th scope="col">@sortablelink('data_pedido', 'Data do Pedido')</th>
                    <th>Visualizar</th>
                    <th>editar</th>
                    <th>deletar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($pedidos as $p)
                <tr>
                    <th scope="row">{{$p->clientes_id}}</th>
                    <td>{{$p->nome_cliente}}</td>
                    <td>{{$p->status}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>{{$p->data_pedido}}</td>
                    <td><a class="btn btn-primary" href="/visualiza_pedido">Detalhes</a></td>
                    <td><a class="btn btn-secondary" href="/editar_cliente">Editar</a></td>
                    <td><a class="btn btn-danger" href="">Deletar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{$pedidos->onEachSide(5)->links()}}
        </div>
    </div>

</body>

</html>