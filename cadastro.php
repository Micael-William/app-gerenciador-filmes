<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="public/css/index.css">
    <title>Cadastro</title>
</head>
<body class="bg-slate-950">
    <section class="flex  items-center">
        <div class="logo">
            <img class="logo-img" src="public/img/icones/Logo.svg" alt="">
            <img class="w-16 md:w-32 lg:w-220 h-16 md:h-32 lg:h-230" src="public/img/fundo/login-fundo.png" alt="">
            <div class="titulo">
                <h2>ab filmes</h2>
                <p>o guia definitivo para os<br>amantes do cinema</p>
            </div>
        </div>

        <div class="form">
            <div class="legenda">
                <label class="login" for="login">Login
                    <input type="radio" name="tipo" id="login" value="login">
                </label>

                <label class="cadastro" for="cadastro">Cadastro
                    <input type="radio" name="tipo" id="cadastro" value="cadastro">
                </label>
                
            </div>

            <h1 class="text-slate-50 text-4xl font-mono">Crie sua conta</h1>
            <form action="" method="post">
                <div>
                    <img src="public/img/icones/icon/Vector-16.png" alt="logo-campo-nome">
                    <input  type="text" name="nome" id="nome" placeholder="E-mail" required>
                </div>
                <div>
                    <img src="public/img/icones/icon/Vector-8.png" alt="logo-campo-email">
                    <input  type="email" name="email" id="email" placeholder="E-mail" required>
                </div>
                <div>
                    <img src="public/img/icones/icon/Vector-9.png" alt="logo-campo-senha">
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </section>
</body>
</html>