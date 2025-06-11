<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Login</title>
</head>

<body class="">
    <section class="secao-login">
        <div class="logo-titulo">
            <img class="logo-img" src="../img/icones/Logo.svg" alt="">
            <img class="fundo-img" src="../img/fundo/login-fundo.png" alt="">
            <div class="titulo">
                <h2>ab filmes</h2>
                <p>o guia definitivo para os<br>amantes do cinema</p>
            </div>
        </div>

        <div class="form">
            <div class="legenda">
                <div class="container-login" data-active="True" data-hover="False">
                    <a href="/login">Login</a>
                </div>

                <div class="container-cadastro" data-active="False" data-hover="False">
                    <a href="/cadastro">Cadastro</a>
                </div>
            </div>
            
            <?php 
                require_once "../src/session/sessao.php";
                $mensagem = sessao($sessao);
            ?>
            <?php if(!$mensagem == null):?>
                <div class="alert-danger">
                    <?= $mensagem; ?>
                </div>
           <?php endif; ?>
           
            <form action="" method="POST">
                <h1 class="">Acesse sua conta</h1>
                <div>
                    <img src="../img/icones/icon/Vector-8.png" alt="logo-campo-email">
                    <input type="text" name="email" id="email" placeholder="E-mail" value="<?= isset($_SESSION['input']) ? $_SESSION['input'] : ''; ?>">
                </div>
                <div>
                    <img src="../img/icones/icon/Vector-9.png" alt="logo-campo-senha">
                    <input type="password" name="password" id="senha" placeholder="Senha">
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </section>
</body>

</html>