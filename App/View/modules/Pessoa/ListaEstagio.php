<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Matricula</th>
                <th scope="col">Nome</th>
                <th scope="col">Loc. Estágio</th>
                <th scope="col">Curso</th>
                <th scope="col">Professor</th>
                <th scope="col">Instrutor</th>
                <th scope="col">Horário</th>
            </tr>
        </thead>
        <?php foreach ($model->$rows as $item): ?>
            <tr>
                <th>
                    <?= $item->id ?>
                </th>
                <th>
                   <a href="/estagio/form?id=<?=$item->id?>"> <?= $item->matricula ?></a>
                </th>
                <th>
                    <?= $item->nome ?>
                </th>
                <th>
                    <?= $item->loc_estagio ?>
                </th>
                <th>
                    <?= $item->curso ?>
                </th>
                <th>
                    <?= $item->professor ?>
                </th>
                <th>
                    <?= $item->instrutor ?>
                </th>
                <th>
                    <?= $item->horario ?>
                </th>
            </tr>
        <?php endforeach ?>

    </table>
</body>

</html>