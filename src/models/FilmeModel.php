<?php

class FilmeModel
{
    private $id;
    private $user_id;
    private $titulo;
    private $ano;
    private $categoria;
    private $descricao;
    private $avaliacoes;
    private $imagemPath;

    public function __construct($titulo, $ano, $categoria, $descricao)
    {
        $this->titulo = $titulo;
        $this->ano = $ano;
        $this->categoria = $categoria;
        $this->descricao = $descricao;
    }
}