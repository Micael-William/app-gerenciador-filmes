<?php
namespace App\src;
use App\config\Conexao;


class LoginController
{
    public $error = [];


    public static function view($view = null)
    {
        $sessao = $_SESSION;
        return require_once "../views/{$view}.php";
    }


    public function request()
    {
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            if($this->noEmpty($_POST['email'], $_POST["password"]) == false)
            {
                $msg1  = 'Campo e-mail precisa ser preenchido.';
                $msg2 = 'Campo senha precisa ser preenchido.';
                array_push($this->error, $msg1, $msg2);

                $_SESSION["logado"] = false;
                $_SESSION["aviso"] = $this->error;
                $this->redirect('login?error=1');
                exit();

            }else if(!$this->validateEmail($_POST['email']))
            {
                $msg1  = 'Campo e-mail precisa ser válido;';
                array_push($this->error, $msg1);

                $_SESSION["logado"] = false;
                $_SESSION["aviso"] = $this->error;

                $this->redirect('login?error=0');
                exit();
            }else if ($this->validaSenha($_POST['password'], 8, 12) == true){
                $count = 0;
                if(strlen($_POST['password']) < 8){
                    $count = 8;
                    $msg2 = 'Campo senha precisa ter no mínimo '.  $count .' caracteres';
                }else if (strlen($_POST['password']) > 12){
                    $count = 12;
                    $msg2 = 'Campo senha precisa ter no máximo '.  $count .' caracteres';
                }
    
                array_push($this->error, $msg2);

                $_SESSION["logado"] = false;
                $_SESSION["aviso"] = $this->error;
                $this->redirect('login?error=0');
                exit();
            }
            else
            {
                if($this->isUserExists($_POST['email']))
                {
                    $_SESSION["logado"] = false;
                    $_SESSION['cadastro'] = 'Parece que você não possui uma conta, criei agora.';
                    unset($_SESSION['aviso']);
                    $this->redirect('login?error=1');
                    exit();
                }else
                {
                    unset($_SESSION['aviso']);
                    unset($_SESSION['cadastro']); 
                    $_SESSION["logado"] = true;
                    $this->redirect('login?sucesso=1');
                    exit();
                }
                
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

    public function isUserExists($email)
    {
        $con = new Conexao;
        $user = $con->getConexao()->prepare("SELECT email FROM tb_user WHERE email=:email;");
        $user->bindValue(':email', $email);
        $user->execute();

        return $user->rowCount() == 0 ? true : false;
    }

}