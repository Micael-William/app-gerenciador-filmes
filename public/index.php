<?php
require_once "../vendor/autoload.php";

use App\src\CadastroController;
use App\src\DetalhesFilmeController;
use App\src\ExplorarController;
use App\src\LoginController;
use App\src\LogoutController;
use App\src\MeusFilmesController;
use App\src\NotFoundController;
use App\src\NovoFilmeController;

$pathInfo = $_SERVER["PATH_INFO"] ?? '/';

session_start();

if ((!array_key_exists('logado', $_SESSION) && $pathInfo == '/meus-filmes') || 
    (!array_key_exists('logado', $_SESSION) && $pathInfo == '/novo-filme') || 
    (!array_key_exists('logado', $_SESSION) && $pathInfo == '/detalhes-filme')) {
    header('Location: /login');
}

$pathInfo = strtolower($pathInfo);

switch($pathInfo){
    case '/':
        LoginController::view($pathInfo);
        $route = new LoginController;
        $route->request();
    break;
    case '/login':
        LoginController::view($pathInfo);
        $route = new LoginController;
        $route->request();
    break;
    case '/cadastro':
       CadastroController::view($pathInfo);
       $route = new CadastroController;
       $route->request();
    break;
    case '/meus-filmes':
        MeusFilmesController::view($pathInfo);
    break;
    case '/novo-filme':
        NovoFilmeController::view($pathInfo);
        $filme = new NovoFilmeController;
        $filme->novoFilme();
    break;
    case '/detalhes-filme':
        DetalhesFilmeController::view($pathInfo);
    break;
    case '/logout':
        LogoutController::logout($pathInfo);
    break;
    case '/explorar';
        ExplorarController::view($pathInfo);
    break;
    default:
       NotFoundController::notFound($pathInfo);
    break;
}