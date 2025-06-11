<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/listagem.css">
    <link rel="stylesheet" href="public/css/novo-filme.css">
    <title>Novo Filme</title>
</head>
<body>
    <header>
        <img class="logo" src="public/img/icones/Logo.svg" alt="">

        <nav>
            <img src="public/img/icones/icon/Popcorn-regular.svg" alt=""><a href="/explorar">Explorar</a>
            <img class="icone-filme" src="public/img/icones/icon/Vector-4.png" alt="logo filmes"><a href="/meus-filmes">Meus filmes</a>
        </nav>

        <div>
            <span>Olá, jordan <img class="icone-perfil" src="public/img/icones/image.png" alt=""></span>
            <a href="/Logout"><img class="icone-logout" src="public/img/icones/icon/Vector-10.png" alt=""></a>
        </div>
    </header>

    <div class="form">
        <form action="" method="post">
            <div class="campo-file">
                <label for="filme">Fazer upload
                    <img src="public/img/icones/icon/Vector.png" alt="download">
                </label>
                <input type="file" accept="image/*" name="filme" id="filme">
            </div>

            <div class="container-form">
                <h1>Novo filme</h1>

                <div class="campo-titulo">
                    <img src="public/img/icones/icon/Vector-4.png" alt="titulo">
                    <input type="text" id="titulo"  placeholder="Titulo" required>
                </div>

                <div class="campo-ano">
                    <div>
                        <img src="public/img/icones/icon/Vector-13.png" alt="ano">
                        <input type="text" name="ano" id="ano" placeholder="Ano" required>
                    </div>
                    <div>
                        <img src="public/img/icones/icon/Vector-12.png" alt="categoria">
                        <input type="text" name="categoria" id="categoria" placeholder="Categoria" required>
                    </div>
                </div>

              

                <div class="campo-descricao">
                    <textarea rows="10" name="descricao" id="descricao" placeholder="Descrição"></textarea>
                </div>
                <div class="campo-botao">
                    <button class="btn-cancelar">Cancelar</button>
                    <button class="btn-enviar" type="submit">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>