<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/listagem.css">
    <title>Listagem</title>
</head>
<body>
    <?php require_once "partials/header.php" ?>
    <main>
        <section class="secao-listagem">
            <section class="secao-filtro">
                <h1>Meus filmes</h1>
                <form action="" method="post">
                    <div>
                        <img class="icone-busca" src="../img/icones/icon/Vector-5.png" alt="logo busca">
                        <input type="text" name="buscar" id="filme" placeholder="Pesquisar filme">
                    </div>
                    <button type="submit"><span>+</span><a href="/novo-filme">Novo</a></button>
                </form>
            </section>
            <ul>
                <?php foreach ($filmes as $filme): ?>
                    <?php if (!$filme['imagem_path'] == 0): ?>
                        <li class="filme" data-id="<?= $filme['id'] ?>">
                            <p class="aval">0<img class="icone-aval" src="../img/icones/icon/Vector-2.png" alt="avaliação" /></p>
                            <img class="filme" src="<?=$filme['imagem_path'] ? '../uploads/'.$filme['imagem_path'] : 0?>" alt="filme">
                            <p class="titulo-filme"><?= $filme['titulo'] ?></p>
                            <p class="ano"><?= $filme['categoria']?> * <?= $filme['ano']?></p>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>

    <script src="../js/detalhes.js"></script>
</body>
</html>