<?php
namespace App\src;

class LogoutController
{
    public static function logout($view)
    {
        session_destroy();
        self::redirect();
    }

    public static function redirect(): void
    {
        header("Location: /login");
    }
}