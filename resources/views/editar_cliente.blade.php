<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="{{url('update')}}/{{$cliente->id}}" method="post" class="col-6 position-absolute top-50 start-50 translate-middle">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" name="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" value="{{$cliente->cpf}}">
                <div class="form-text">digite o cpf</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nome</label>
                <input type="text" name="nome_cliente" class="form-control" value="{{$cliente->nome_cliente}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" value="{{$cliente->email}}">
            </div>
            <a href="{{url('clientes')}}" class="btn btn-secondary ">Voltar</a>
            <button type="submit" class="btn btn-success ">Salvar</button>
        </form>
    </div>
</body>