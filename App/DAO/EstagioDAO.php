<?php

class EstagioDAO
{
    private $conexao;
    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=ponto";
        $this->conexao = new PDO($dsn, 'root', '');

    }
    public function insert(EstagioModel $model)
    {
        $sql = "INSERT INTO estagiarios (matricula, nome, loc_estagio, curso, professor, instrutor, horario) values (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->matricula);
        $stmt->bindValue(2, $model->nome);
        $stmt->bindValue(3, $model->loc_estagio);
        $stmt->bindValue(4, $model->curso);
        $stmt->bindValue(5, $model->professor);
        $stmt->bindValue(6, $model->instrutor);
        $stmt->bindValue(7, $model->horario);

        $stmt->execute();
    }
    public function update(EstagioModel $model)
    {

    }
    public function select()
    {
        $sql = "SELECT * FROM estagiarios ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function delete(int $id)
    { 
        $sql = "DELETE FROM estagiarios WHERE id = ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

    }
    public function selectById(int $id){
        include_once './App/Model/EstagioModel.php';
        $sql = "SELECT * FROM estagiarios WHERE id = ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchObject("EstagioModel");

    }
}