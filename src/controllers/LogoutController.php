<?php
namespace App\src;

class LogoutController
{
    public static function logout($view = null)
    {
        session_destroy();
        header("Location: /{$view}");
        exit();
    }
}