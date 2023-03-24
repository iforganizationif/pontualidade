<?php

class EstagioModel
{
    public $id, $matricula, $nome, $loc_estagio, $curso, $professor, $instrutor, $horario;
    public $rows;
    public function save()
    {
        include './App/DAO/EstagioDAO.php';

        $dao = new EstagioDAO();
        if(isset($this->id)){
            $dao->update($this);
        }else{
            $dao->insert($this);
        }
        
    }

    public function getAllRows()
    { 
        include './App/DAO/EstagioDAO.php';
        $dao = new EstagioDAO();
        $this->$rows = $dao->select();
    }
    public function getById(int $id)
    {
        include './App/DAO/EstagioDAO.php';

        $dao = new EstagioDAO();
        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new EstagioModel();
        /* if ($obj) {
            # code...
            return $obj;
        }else {
            # code...
            return new EstagioModel();
        }
         */
    }
    public function gerar(){
        include './App/DAO/EstagioDAO.php';
        $dao = new EstagioDAO;
        $this-> rows = $dao->select();
    }
   
}


?>
