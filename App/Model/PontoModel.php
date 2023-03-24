<?php

class PontoModel
{
    public $id, $id_funcionario, $tipo, $data_hora;
    public $rows;
    public function save()
    {
        include './App/DAO/PontoDAO.php';

        $dao = new PontoDAO();
        $dao->insert($this);
    }
    public function getAllRows()
    {
        include './App/DAO/PontoDAO.php';
        $dao = new PontoDAO();
        $this->$rows = $dao->select();
    }
    public function getById(int $id)
    {
        include './App/DAO/PontoDAO.php';

        $dao = new PontoDAO();
        return $dao->selectById($id);
    }
}