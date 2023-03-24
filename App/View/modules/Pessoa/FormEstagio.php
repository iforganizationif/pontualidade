<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estagiario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <legend>Cadastro de Estagiario</legend>
        <form method="post" action="/estagio/form/save">
            <div class="form-group">
                <input type="hidden" value="<?=$model->id ?> name="id">
                <label for="cpf" class="form-label">Matrícula:</label>
                <input value="<?=$model->matricula ?>" type="number" class="form-control" id="matricula" name="matricula" required/>
                <hr>
                <label for="nome" class="form-label">Nome do(a) Estagiario(a):</label>
                <input value="<?=$model->nome ?>" type="text" name="nome" class="form-control" id="nome" required/>

                <label for="loc_estagio" class="form-label">Local de estágio:</label>
                <input value="<?=$model->loc_estagio ?>"type="text" name="loc_estagio" class="form-control" id="loc_estagio" required/>

                <label for="curso" class="form-label">Curso:</label>
                <input value="<?=$model->curso ?>"  list="CursoOptions" name="curso" class="form-control" id="curso" placeholder="Digite..." required/>
                <datalist id="CursoOptions">
                    <option value="Bacharelado - Sistemas de Informação">
                    <option value="Técnico em Informática para Internet - Integrado">
                    <option value="Técnico em Admnistração - Integrado">
                    <option value="Técnico em Meio Ambiente - Integrado">
                    <option value="Pedagogia - Licenciatura">
                </datalist>

                <label for="professor" class="form-label">Professor Orientador(a):</label>
                <input value="<?=$model->professor ?>" type="text" class="form-control" name="professor" id="professor" required/>

                <label for="instrutor" class="form-label">Instrutor(a) de Estágio:</label>
                <input value="<?=$model->instrutor ?>" type="text" class="form-control" id="instrutor" name="instrutor" required/>

                <label for="horario" class="form-label">Horário de Entrada/Saída:</label>
                <input value="<?=$model->horario ?>" type="text" class="form-control" id="horario" name="horario" placeholder="Exemplo: 14:00h-18:00h" required/>
                
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>