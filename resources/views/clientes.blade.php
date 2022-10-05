<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clientes</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
@include('navbar');

<body class="">
    <div class="container pr-5 pl-5">
        <div class="pt-2 pl-2">
            <a class="btn btn-primary mb-2" href="add/cliente">Adicionar Cliente</a>
        </div>
        @if (session('falha'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <div>{{ session('falha') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session('sucesso'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <div>{{ session('sucesso') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table table-bordered table-striped table-hover ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">@sortablelink('id') <span class="span float-right"><i class="bi bi-arrow-down-up"></i></span></th>
                    <th scope="col">@sortablelink('cpf')</th>
                    <th scope="col">@sortablelink('nome_cliente', 'Nome')</th>
                    <th scope="col">@sortablelink('created_at', 'Criado Em')</th>
                    <th>editar</th>
                    <th>deletar</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @if($clientes->count())
                @foreach($clientes as $u)
                <tr>
                    <th scope="row">{{$u->id}}</th>
                    <td>{{$u->cpf}}</td>
                    <td>{{$u->nome_cliente}}</td>
                    <td>{{$u->created_at}}</td>
                    <td><a class="btn btn-secondary" href="{{url('editar_cliente')}}/{{$u->id}}">Editar</a></td>
                    <td>
                        <form action="{{url('/delete')}}/{{$u->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <div>
            {{$clientes->onEachSide(5)->links()}}
        </div>
    </div>

</body>

</html>