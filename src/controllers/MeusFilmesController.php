<?php
namespace App\src;

class MeusFilmesController 
{
    public static function view($view = null)
    {
        $sessao = $_SESSION;
        $sessao = $sessao['dados']['nome'] ? $sessao['dados']['nome'] : null;
        return require_once "../views/{$view}.php";
    }
}