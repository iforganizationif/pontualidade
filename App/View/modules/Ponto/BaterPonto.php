<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="/estagio/ponto/save">
        <label for="" class="label-control">Id</label>
        <input class="form-control" name="id_funcionario" id="id_funcionario" />
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckChecked">Entrada</label>
            <input class="form-check-input" type="checkbox" role="switch" value="entrada" name="tipo" id="tipo">
        </div>
        <div class="form-check form-switch">
            <label class="label-control" for="flexSwitchCheckChecked">Saída</label>
            <input class="form-check-input" type="checkbox" role="switch" value="saida" name="tipo" id="tipo">
        </div>
        <div class="form-control">
            <label for="horario" class="label-control">Horário</label>
            <input type="datetime-local" class="form-control" name="data_hora" id="data_hora">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
        </div>
    </form>
</body>

</html>