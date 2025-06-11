<?php
namespace App\src;

class NotFoundController
{
    public static function notFound($view)
    {
        return require_once "../views/{$view}.php";
    }
}