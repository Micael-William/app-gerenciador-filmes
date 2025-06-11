<?php
namespace App\src;
use App\config\Conexao;
use PDO;

class LoginController
{
    public static function view($view)
    {
        $sessao = $_SESSION;
        return require_once "../views/{$view}.php";
    }

    public function request()
    {
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            if($this->noEmpty($_POST['email'], $_POST["password"]) == false)
            {
                $_SESSION['required_email'] = 'Campo e-mail precisa ser preenchido.';
                $_SESSION['required_password'] = 'Campo senha precisa ser preenchido.';
                $_SESSION["logado"] = false;
               
                $this->redirect('login?error=1');
                exit();

            }else if(!$this->validateEmail($_POST['email']))
            {
                $_SESSION['valid_email'] = 'Campo e-mail precisa ser válido.';
                $_SESSION["logado"] = false;
               
                $this->redirect('login?error=0');
                exit();
            }else if ($this->validaSenha($_POST['password'], 8, 12) == true){
                if(strlen($_POST['password']) < 8){
                    $_SESSION['min_password'] = 'Campo senha precisa ter no mínimo 8 caracteres';
                }else if (strlen($_POST['password']) > 12){
                    $_SESSION['max_password'] = 'Campo senha precisa ter no máximo 12 caracteres';
                }
                $_SESSION["logado"] = false;
                $this->redirect('login?error=0');
                exit();
            }
            else
            {
                $_SESSION['input'] = $_POST['email'];
                unset($_SESSION['required_email']);
                unset($_SESSION['required_password']);
                unset($_SESSION['valid_email']);
                unset($_SESSION['min_password']);
                unset($_SESSION['max_password']);
                $this->isUserExists($_POST['email'], $_POST['password']);
            }
        }  else {
            unset($_SESSION['cadastro']);
        } 
    }

    public function noEmpty($email, $senha): bool
    {
        if(!empty($email) && !empty($senha)){
            return true;
        }
        return false;
    }

    public function validateEmail($email): bool
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

    public function redirect($view): void
    {
        header("Location: /{$view}");
    }

    public function validaSenha($senha, $min, $max)
    {
        if(strlen($senha) < $min || strlen($senha) > $max){
            return true;
        }
        return false;
    }

    public function isUserExists($email, $senha)
    {
        $conexao = new Conexao;
        $email = trim($email);

        $stmt = $conexao->getConexao()->prepare("SELECT * FROM tb_user WHERE email =:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$user){
            $_SESSION["logado"] = false;
            $_SESSION['cadastro'] = 'Parece que você não possui uma conta, criei agora.';
            unset($_SESSION['incorret_password']);
            $this->redirect('login?error=1');
            return;
        } 
        else{
            if(password_verify($senha, $user['senha'])){
                $_SESSION['logado'] = true;

                $_SESSION['dados'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'nome' => $user['nome']
                ];
                $this->redirect('meus-filmes');
            }else{
                unset($_SESSION['logado']);
                $_SESSION['incorret_password'] = 'Senha incorreta.';
                $this->redirect('login?error=1');
            }
        }
    }
}