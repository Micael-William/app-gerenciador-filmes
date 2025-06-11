<?php
namespace App\src;
use App\models\FilmeModel;

class NovoFilmeController
{
    public static function view($view)
    {
        $sessao = $_SESSION;
        $sessao = $sessao['dados']['nome'] ? $sessao['dados']['nome'] : null;
        require_once "../views/{$view}.php";
    }

    public function novoFilme()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $titulo = $_POST['titulo'] ?? '';
            $ano = $_POST['ano'] ?? '';
            $categoria = $_POST['categoria'] ?? '';
            $descricao = $_POST['descricao'] ?? '';
            $user_id = $_SESSION['dados']['id'] ?? null;
            $imagePath = 0;
            
            if($_FILES['filme']['error'] === UPLOAD_ERR_OK){
                
                $imagePath = $_FILES['filme']['name'];
                move_uploaded_file($_FILES['filme']['tmp_name'],  __DIR__ . '/../../public/uploads/'.$_FILES['filme']['name']);    
            }

            $filme = new FilmeModel;
            $filme->user_id = $user_id;
            $filme->titulo = $titulo;
            $filme->ano = $ano;
            $filme->categoria = $categoria;
            $filme->descricao = $descricao;
            $filme->imagemPath = $imagePath;
            $filme->avaliacoes[] = 0; 
            $filme->save();

            $_SESSION['mensagem'] = "Filme cadastrado com sucesso!";
            $this->redirect('meus-filmes');
        }
    }

    public function redirect($path)
    {
        header("Location: /{$path}");
    }

}