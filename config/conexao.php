<?php
namespace App\config;
use PDO;

class Conexao {
    public function getConexao(){
        return new PDO("sqlite:database.sqlite");
    }
}

$con = new Conexao();
// $con->getConexao()->exec("DROP TABLE IF EXISTS tb_user;");

$con->getConexao()->exec(
    "CREATE TABLE IF NOT EXISTS tb_user
    (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome TEXT NOT NULL,
        email TEXT NOT NULL,
        senha TEXT NOT NULL

    );"
);

$con->getConexao()->exec(
    "CREATE TABLE IF NOT EXISTS tb_filme
    (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER NOT NULL,
        titulo TEXT NOT NULL,
        ano TEXT NOT NULL,
        categoria TEXT NOT NULL,
        descricao TEXT NOT NULL,
        avaliacoes INTEGER,
        imagem_path TEXT NOT NULL
    );"
);


$data = $con->getConexao()->prepare("SELECT * FROM tb_user");
$data->execute();
$dados = $data->fetchAll(PDO::FETCH_ASSOC);

var_dump($dados);