<?php
namespace App\models;
use App\config\Conexao;

class FilmeModel extends Conexao
{
    public $id;
    public $user_id;
    public $titulo;
    public $ano;
    public $categoria;
    public $descricao;
    public $avaliacoes = [];
    public $imagemPath;

    

    public function save() {
        $sql = "INSERT INTO tb_filme (user_id, titulo, ano, categoria, descricao, imagem_path)
        VALUES (:user_id, :titulo, :ano, :categoria, :descricao, :imagemPath)";

        $stmt = $this->getConexao()->prepare($sql);
        $stmt->bindValue(":user_id", $this->user_id);
        $stmt->bindValue(":titulo", $this->titulo);
        $stmt->bindValue(":ano", $this->ano);
        $stmt->bindValue(":categoria", $this->categoria);
        $stmt->bindValue(":descricao", $this->descricao);
        $stmt->bindValue(":imagemPath", $this->imagemPath);
       
        $stmt->execute();
    }

    public function all($user_id) {
        $sql = "SELECT * FROM tb_filme WHERE user_id=:user_id";
        $stmt = $this->getConexao()->prepare($sql);
        $stmt->bindValue(":user_id", $user_id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $sql = "SELECT * FROM tb_filme WHERE id=:id";
        $stmt = $this->getConexao()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}