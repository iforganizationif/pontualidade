<?php

class PontoController
{
    public static function form()
    {
        include './App/Model/PontoModel.php';
        $bater = new PontoModel();
        $bater = $bater->getById((int) $_GET['id_funcionario']);
  /*       var_dump($bater); */
        include './App/View/modules/Ponto/BaterPonto.php';
    }
    public static function save()
    {
        include './App/Model/PontoModel.php';
        $bater = new PontoModel();
        $bater->id_funcionario = $_POST['id_funcionario'];
        $bater->tipo = $_POST['tipo'];
        $bater->data_hora = $_POST['data_hora'];
        /* $bater->id_funcionario = 1;
        $bater->tipo = "entrada";
        $bater->data_hora = "2023-05-14"; */
        

        $bater->save();
        header("Location: /estagiarios");
    }
    public function delete(){

    }
    public function atualizar(){
        
    }
}

?>