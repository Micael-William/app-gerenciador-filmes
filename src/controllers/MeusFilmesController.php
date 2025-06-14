<?php
namespace App\src;
use App\models\FilmeModel;
class MeusFilmesController 
{
    public static function view($view = null)
    {
        $sessao = $_SESSION;
        $sessao = $sessao['dados']['nome'] ? $sessao['dados']['nome'] : null;
        $filmes = self::filmes();
        return require_once "../views/{$view}.php";
    }


    public static function filmes()
    {
        $user_id = $_SESSION['dados']['id'] ?? null;
        $filme = new FilmeModel;
        $filmes = $filme->all($user_id);

        return $filmes;
    }
}