<?php

class EstagioDAO
{
    public $conexao;
    public function __construct()
    {
        $dsn = "mysql:host=db4free.net:3306;dbname=pontualidade";
        $this->conexao = new PDO($dsn, 'pontualidade', 'meire2402');

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
        $sql = "UPDATE INTO estagiarios SET matricula=?, nome=?, loc_estagio=?, curso=?, professor=?, instrutor=?, horario=? WHERE id=?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->matricula);
        $stmt->bindValue(2, $model->nome);
        $stmt->bindValue(3, $model->loc_estagio);
        $stmt->bindValue(4, $model->curso);
        $stmt->bindValue(5, $model->professor);
        $stmt->bindValue(6, $model->instrutor);
        $stmt->bindValue(7, $model->horario);
        $stmt->bindValue(8, $model->id);
        
        $stmt->execute();        
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
    public function DeleteById(int $id){
        include_once './App/Model/EstagioModel.php';
    }
}