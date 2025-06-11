<?php
namespace App\src;

use App\config\Conexao;

class CadastroController
{
    public static function view($view = null)
    {
        $sessao = $_SESSION;
        return require_once "../views/{$view}.php";
    }

    public function request()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])){
                $_SESSION['aviso'] = 'Todos os campos são obrigatórios.';
                $this->redirect('cadastro?error=1');
                return;
            }

            if(!$this->validaEmail($_POST['email'])){
                $_SESSION['aviso'] = 'E-mail inválido.';
                $this->redirect('cadastro?error=1');
                return;
            }

            if(!$this->validaSenha($_POST['senha'], 8, 12)){
                $_SESSION['aviso'] = 'A senha deve ter entre 8 e 12 caracteres.';
                $this->redirect('cadastro?error=1');
                return;
            }

            $this->create($_POST['email'], $_POST['nome'], $_POST['senha']);
        }
    }

    public function validaEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function validaSenha($senha, $min, $max)
    {
        if(strlen($senha) < $min || strlen($senha) > $max){
            return false;
        }
        return true;
    }

    public function create($email, $nome, $senha)
    {
        if($this->userExists($email)){
            $_SESSION['aviso'] = 'Usuário já cadastrado com este e-mail.';
            $this->redirect('cadastro?error=1');
            return;
        }

        $conexao = new Conexao;
        $stmt = $conexao->getConexao()->prepare("INSERT INTO tb_user(nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', password_hash($senha, PASSWORD_ARGON2ID));
        $stmt->execute();

        $_SESSION['aviso'] = 'Usuário cadastrado com sucesso.';
        $stmt = $conexao->getConexao()->prepare("SELECT * FROM tb_user WHERE email =:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        $_SESSION['logado'] = true;
        $_SESSION['dados'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'nome' => $user['nome']
        ];

        $this->redirect('meus-filmes');
    }

    public function userExists($email)
    {
        $conexao = new Conexao;
        $pdo = $conexao->getConexao();
        $email = trim($email);

        $stmt = $pdo->prepare("SELECT * FROM tb_user WHERE email=:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function redirect($url)
    {
        header("Location: /{$url}");
        exit();
    }
}