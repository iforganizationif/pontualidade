<?php

class EstagioModel
{
    public $id, $matricula, $nome, $loc_estagio, $curso, $professor, $instrutor, $horario;
    public $rows;
    public function save()
    {
        include './App/DAO/EstagioDAO.php';

        $dao = new EstagioDAO();
        $dao->insert($this);
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
        return $dao->selectById($id);
    }
}


?>