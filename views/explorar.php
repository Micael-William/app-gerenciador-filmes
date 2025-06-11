<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/explorar.css">
    <title>Todos os filmes</title>
</head>
<body>
    <?php require_once "partials/header.php"; ?>
    <main>
        <section class="secao-listagem">
            <section class="secao-filtro">
                <h1>Filmes</h1>
                <form action="" method="post">
                    <div>
                        <img class="icone-busca" src="../img/icones/icon/Vector-5.png" alt="logo busca">
                        <input type="text" name="buscar" id="filme" placeholder="Pesquisar filme">
                    </div>
                    <button type="submit"><span>+</span><a href="/novo-filme">Novo</a></button>
                </form>
            </section>
            <ul>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="../img/icones/icon/Vector-2.png" alt="avaliação" /></p>
                    <img class="filme" src="../img/imagens/Cover-1.png" alt="filme">
                    <p class="titulo-filme">O corvo</p>
                    <p class="ano">Fantasia * 2024</p>
                </li>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="../img/icones/icon/Vector-2.png" alt="avaliação" /></p>
                    <img class="filme" src="../img/imagens/Cover.png" alt="filme">
                    <p class="titulo-filme">Meu Malvado Favorito 4</p>
                    <p class="ano">Animação * 2024</p>
                </li>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="../img/icones/icon/Vector-2.png" alt="avaliação" /></p>
                    <img class="filme" src="../img/imagens/image-1.png" alt="filme">
                    <p class="titulo-filme">Mad Max: Estrada da Fúria</p>
                    <p class="ano">Ação * 2025</p>
                </li>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="../img/icones/icon/Vector-2.png" alt="avaliação" /></p>
                    <img class="filme" src="../img/imagens/image.png" alt="filme">
                    <p class="titulo-filme">O Senhor do Anéis: A<br> Sociedade do Anel</p>
                    <p class="ano">Aventura * 2001</p>
                </li>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="../img/icones/icon/Vector-2.png" alt="avaliação" /></p>
                    <img class="filme" src="../img/imagens/Cover-1.png" alt="filme">
                    <p class="titulo-filme">O corvo</p>
                    <p class="ano">Fantasia * 2024</p>
                </li>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="../img/icones/icon/Vector-2.png" alt="avaliação" /></p>
                    <img class="filme" src="../img/imagens/Cover.png" alt="">
                    <p class="titulo-filme">Meu Malvado Favorito 4</p>
                    <p class="ano">Animação * 2024</p>
                </li>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="../img/icones/icon/Vector-2.png" alt="avaliação" /></p>
                    <img class="filme" src="../img/imagens/image-1.png" alt="filme">
                    <p class="titulo-filme">Mad Max: Estrada da Fúria</p>
                    <p class="ano">Ação * 2025</p>
                </li>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="../img/icones/icon/Vector-2.png" alt="avaliação" /></p>
                    <img class="filme" src="../img/imagens/image.png" alt="filme">
                    <p class="titulo-filme">O Senhor do Anéis: A <br>Sociedade do Anel</p>
                    <p class="ano">Aventura * 2001</p>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>