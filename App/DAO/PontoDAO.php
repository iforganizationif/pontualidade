<?php

class PontoDAO
{
    private $conexao;
    public function __construct()
    {
        $dsn = "mysql:host=db4free.net:3306;dbname=pontualidade";
        $this->conexao = new PDO($dsn, 'pontualidade', 'meire2402');

    }
    public function insert(PontoModel $bater)
    {
        
        $sql = "INSERT INTO registros_ponto (id_funcionario, tipo, data_hora) values (?, ?, ?)";
        $set = $this->conexao->prepare($sql);
        $set->bindValue(1, $bater->id_funcionario);
        $set->bindValue(2, $bater->tipo);
        $set->bindValue(3, $bater->data_hora);

        $set->execute();
    }
    public function update(PontoModel $bater)
    {

    }
    public function select()
    {
        $sql = "SELECT * FROM registros_ponto ";
        $set = $this->conexao->prepare($sql);
        $set->execute();

        return $set->fetchAll(PDO::FETCH_CLASS);
    }
    public function delete(int $id)
    { 
        $sql = "DELETE FROM registros_ponto WHERE id = ? ";
        $set = $this->conexao->prepare($sql);
        $set->bindValue(1, $id);
        $set->execute();

    }
    public function selectById(int $id){
        include_once './App/Model/PontoModel.php';
        $sql = "SELECT * FROM registros_ponto WHERE id = ? ";
        $set = $this->conexao->prepare($sql);
        $set->bindValue(1, $id);
        $set->execute();
        return $set->fetchObject("PontoModel");

    }
}