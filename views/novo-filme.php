<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/novo-filme.css">
    <title>Novo Filme</title>
</head>
<body>
    <?php require_once "partials/header.php"; ?>

    <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="campo-file">
                <label for="filme">Fazer upload
                    <img src="../img/icones/icon/Vector.png" alt="download">
                </label>
                <input type="file" accept="image/*" name="filme" id="filme">
            </div>

            <div class="container-form">
                <h1>Novo filme</h1>
                <div class="campo-titulo">
                    <img src="../img/icones/icon/Vector-4.png" alt="titulo">
                    <input type="text" id="titulo" name="titulo"  placeholder="Titulo">
                </div>
                <div class="campo-ano">
                    <div>
                        <img src="../img/icones/icon/Vector-13.png" alt="ano">
                        <input type="text" name="ano" id="ano" placeholder="Ano">
                    </div>
                    <div>
                        <img src="../img/icones/icon/Vector-12.png" alt="categoria">
                        <input type="text" name="categoria" id="categoria" placeholder="Categoria">
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