<?php
require_once "../vendor/autoload.php";

use App\src\CadastroController;
use App\src\LoginController;
use App\src\LogoutController;
use App\src\MeusFilmesController;

$rota = require_once "./routes/route.php";
$pathInfo = $_SERVER["PATH_INFO"] ?? '/';

session_start();

if ((!array_key_exists('logado', $_SESSION) && $pathInfo == '/meus-filmes') || 
    (!array_key_exists('logado', $_SESSION) && $pathInfo == '/novo-filme') || 
    (!array_key_exists('logado', $_SESSION) && $pathInfo == '/detalhes-filme')) {
    header('Location: /login');
}

switch(strtolower($pathInfo)){
    case '/':
        LoginController::view(str_replace($pathInfo,"/", "{$rota[0]}"));
        $route = new LoginController;
        $route->request();
    break;
    case '/login':
        LoginController::view(str_replace($pathInfo,"/", "{$rota[0]}"));
        $route = new LoginController;
        $route->request();
    break;
    case '/cadastro':
       CadastroController::view(str_replace($pathInfo,"/", "{$rota[1]}"));
       $route = new CadastroController;
       $route->request();
    break;
    case '/meus-filmes':
        MeusFilmesController::view(str_replace($pathInfo,"/", "{$rota[2]}"));
    break;
    case '/novo-filme':
        echo 'novo filme';
    break;
    case '/detalhes-filme':
        echo 'detalhes do filme';
    break;
    case '/logout':
        LogoutController::logout(str_replace($pathInfo,"/", "{$rota[0]}"));
    break;
    default:
        echo 'página não encontrada';
    break;
}