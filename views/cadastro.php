<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <section class="secao-cadastro">
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
                <div class="container-login">
                    <a href="/login">Login</a>
                </div>

                <div class="container-cadastro">
                    <a href="/cadastro">Cadastro</a>
                </div>
            </div>
            <?php if(isset($sessao['aviso'])): ?>
                <div class="alert-danger">
                    <?= $sessao['aviso'] . '<br>' ?>
                </div>
            <?php endif; ?>
            <h1 class="">Crie sua conta</h1>
            <form action="" method="POST">
                <div>
                    <img src="../img/icones/icon/Vector-16.png" alt="logo-campo-nome">
                    <input  type="text" name="nome" id="nome" placeholder="Nome">
                </div>
                <div>
                    <img src="../img/icones/icon/Vector-8.png" alt="logo-campo-email">
                    <input  type="email" name="email" id="email" placeholder="E-mail">
                </div>
                <div>
                    <img src="../img/icones/icon/Vector-9.png" alt="logo-campo-senha">
                    <input type="password" name="senha" id="senha" placeholder="Senha">
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </section>
</body>
</html>