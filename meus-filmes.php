<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/listagem.css">
    <title>Listagem</title>
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

    <main>
        
        <section class="secao-listagem">
            <section class="secao-filtro">
                <h1>Meus filmes</h1>
                <form action="" method="post">

                    <div>
                        <img class="icone-busca" src="public/img/icones/icon/Vector-5.png" alt="logo busca">
                        <input type="text" name="buscar" id="filme" placeholder="Pesquisar filme">
                    </div>
                    <button type="submit"><span>+</span> Novo</button>
                </form>
            </section>
            <ul>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="public/img/icones/icon/Vector-2.png" /></p>
                    <img src="public/img/imagens/Cover-1.png" alt="">
                    <p class="titulo-filme">O corvo</p>
                    <p class="ano">Fantasia * 2024</p>
                </li>

                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="public/img/icones/icon/Vector-2.png" /></p>
                    <img src="public/img/imagens/Cover.png" alt="">
                    <p class="titulo-filme">Meu Malvado Favorito 4</p>
                    <p class="ano">Animação * 2024</p>
                </li>

                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="public/img/icones/icon/Vector-2.png" /></p>
                    <img src="public/img/imagens/image-1.png" alt="">
                    <p class="titulo-filme">Mad Max: Estrada da Fúria</p>
                    <p class="ano">Ação * 2025</p>
                </li>

                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="public/img/icones/icon/Vector-2.png" /></p>
                    <img src="public/img/imagens/image.png" alt="">
                    <p class="titulo-filme">O Senhor do Anéis: A<br> Sociedade do Anel</p>
                    <p class="ano">Aventura * 2001</p>
                </li>
                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="public/img/icones/icon/Vector-2.png" /></p>
                    <img src="public/img/imagens/Cover-1.png" alt="">
                    <p class="titulo-filme">O corvo</p>
                    <p class="ano">Fantasia * 2024</p>
                </li>

                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="public/img/icones/icon/Vector-2.png" /></p>
                    <img src="public/img/imagens/Cover.png" alt="">
                    <p class="titulo-filme">Meu Malvado Favorito 4</p>
                    <p class="ano">Animação * 2024</p>
                </li>

                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="public/img/icones/icon/Vector-2.png" /></p>
                    <img src="public/img/imagens/image-1.png" alt="">
                    <p class="titulo-filme">Mad Max: Estrada da Fúria</p>
                    <p class="ano">Ação * 2025</p>
                </li>

                <li>
                    <p class="aval">4,5/5 <img class="icone-aval" src="public/img/icones/icon/Vector-2.png" /></p>
                    <img src="public/img/imagens/image.png" alt="">
                    <p class="titulo-filme">O Senhor do Anéis: A <br>Sociedade do Anel</p>
                    <p class="ano">Aventura * 2001</p>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>