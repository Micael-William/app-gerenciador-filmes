<?php
namespace App\src;

class ExplorarController
{
    public static function view($view)
    {
        $sessao = $_SESSION;
        $sessao = $sessao['dados']['nome'] ? $sessao['dados']['nome'] : null;
        return require_once "../views/{$view}.php";
    }
}