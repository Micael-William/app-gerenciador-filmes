<?php
namespace App\src;
use App\models\FilmeModel;

class DetalhesFilmeController
{
    public static function view($view)
    {
        $sessao = $_SESSION;
        $sessao = $sessao['dados']['nome'] ? $sessao['dados']['nome'] : null;
        $id = $_GET['id'] ?? null;
        $filme = self::getFilme($id);
        return require_once "../views/{$view}.php";
    }

    public static function getFilme($id)
    {
        $filme = new FilmeModel;
        return $filme->find($id);
    }
}