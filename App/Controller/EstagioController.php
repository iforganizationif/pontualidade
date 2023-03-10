<?php

class EstagioController
{

    public static function index()
    {
        include './App/Model/EstagioModel.php';
        $model = new EstagioModel();
        $model->getAllRows();
        include './App/View/modules/Pessoa/ListaEstagio.php';

    }
    public static function form()
    {
        include './App/Model/EstagioModel.php';
        $model = new EstagioModel();
        $model = $model->getById((int) $_GET['id']);
  /*       var_dump($model); */
        include './App/View/modules/Pessoa/FormEstagio.php';
    }
    public static function save()
    {
        include './App/Model/EstagioModel.php';
        $model = new EstagioModel();
        $model->matricula = $_POST['matricula'];
        $model->nome = $_POST['nome'];
        $model->loc_estagio = $_POST['loc_estagio'];
        $model->curso = $_POST['curso'];
        $model->professor = $_POST['professor'];
        $model->instrutor = $_POST['instrutor'];
        $model->horario = $_POST['horario'];

        $model->save();
        header("Location: /estagiarios");
    }
    public function delete(){

    }
    public static function gerar(){
        include './App/View/modules/Pessoa/GerarExcel.php';
    }
}

?>