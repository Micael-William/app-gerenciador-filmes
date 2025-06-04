<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/cabecalho.css">
    <link rel="stylesheet" href="public/css/detalhes-filme.css">
    <title>Detalhes do Filme</title>
</head>
<body>
    <?php require_once "./views/partials/header.php" ?>

    <div class="container">
        <section class="secao-detalhes">
            <div>
                <img src="public/img/imagens/Cover-1.png" alt="">
            </div>
            <div>
                <a href="/">Voltar</a>
                <h1>Pobres criaturas</h1>
                <span class="categoria">Categoria:<p class="tipo">Drama</p></span>
                
                <span class="ano-filme">Ano: 
                    <p class="ano">2023</p>
                </span>
                <div class="estrelas">
                    <img src="public/img/icones/Icon/Vector-1.png" alt="">
                    <img src="public/img/icones/Icon/Vector-1.png" alt="">
                    <img src="public/img/icones/Icon/Vector-1.png" alt="">
                    <img src="public/img/icones/Icon/Vector-1.png" alt="">
                    <img src="public/img/icones/Icon/Vector-1.png" alt="">
                </div>
                <p class="legenda">
                    Do cineasta Yorgos Lanthimos e da produtora Emma Stone, vem o conto incrível e a evolução fantástica de Bella Baxter (Stone), uma jovem mulher trazida de volta à vida pelo brilhante e pouco ortodoxo cientista Dr. Godwin Baxter (Willem Dafoe). Sob a proteção de Baxter, Bella está ansiosa para aprender. Faminta pela mundanidade que lhe falta, Bella foge com Duncan Wedderburn (Mark Ruffalo), um advogado astuto e depravado, em uma aventura relâmpago pelos continentes. Livre dos preconceitos de sua época, Bella se torna firme em seu propósito de defender a igualdade e a libertação.
                </p>
            </div>
        </section>
    </div>

    <div class="container-avaliacao">
        <section class="secao-avaliacoes">
            <div class="avaliar">
                <h2>Avaliações</h2>
                <button id="btn-abrir" class="btn-avaliar">
                    <img class="logo" src="public/img/icones/Icon/Vector-1.png" alt="logo avaliar">
                    Avaliar filme
                </button>
            </div>

            <div class="avaliacoes">
                <div class="perfil">
                    <img class="logo-perfil" src="public/img/icones/Image.png" alt="perfil">
                    <div class="nome">
                        <p>jordan felix</p>
                        <p class="filmes-avaliados">4 filmes avaliados</p>
                    </div>
                </div>
                <div class="linha"></div>
                <p class="descricao-filme">
                    Uma fusão hipnotizante de drama e fantasia, este filme nos leva a um universo surreal repleto de simbolismo e emoção. A história é delicadamente tecida com momentos de profunda reflexão, enquanto os personagens navegam por dilemas humanos em meio a paisagens encantadas.
                </p>
                <p class="aval">
                    4/5
                    <img src="public/img/icones/Icon/estrela-roxa.png" alt="estrela">
                </p>
            </div>
            <div class="avaliacoes">
                <div class="perfil">
                    <img class="logo-perfil" src="public/img/icones/Image.png" alt="perfil">
                    <div class="nome">
                        <p>Floyd Miles</p>
                        <p class="filmes-avaliados">4 filmes avaliados</p>
                    </div>
                </div>
                <div class="linha"></div>
                <p class="descricao-filme">
                    Uma obra-prima visualmente deslumbrante que mistura drama e fantasia de maneira magistral. A narrativa cativante e os personagens complexos nos transportam para um mundo onde o real e o imaginário se entrelaçam com uma profundidade emocional rara. 
                </p>
                <p class="aval">
                    4/5
                    <img src="public/img/icones/Icon/estrela-roxa.png" alt="estrela">
                </p>
            </div>
            <div class="avaliacoes">
                <div class="perfil">
                    <img class="logo-perfil" src="public/img/icones/Image.png" alt="perfil">
                    <div class="nome">
                        <p>Jone Cooper</p>
                        <p class="filmes-avaliados">4 filmes avaliados</p>
                    </div>
                </div>
                <div class="linha"></div>
                <p class="descricao-filme">
                    Este filme é uma jornada emocional que combina elementos de drama e fantasia com maestria. A trama explora temas universais como amor, perda e redenção, tudo isso em um cenário mágico que prende a atenção do início ao fim.
                </p>
                <p class="aval">
                    4/5
                    <img src="public/img/icones/Icon/estrela-roxa.png" alt="estrela">
                </p>
            </div>
        </section>
    </div>

    <div class="container-modal">
        <section class="secao-modal">
            <div class="modal-cabecalho">
                <h3>Avaliar filme</h3>
                <div class="container-logo">
                    <img id="fechar" src="public/img/icones/Icon/Vector-11.png" alt="logo fechar">
                </div>
            </div>
            <div class="modal-body">
                <div class="modal-conteudo">
                    <img class="logo-filme" src="public/img/imagens/Cover-1.png" alt="logo">
                    <div>
                        <h4>Pobres Criaturas</h4>
                        <span class="categoria">Categoria:<p class="tipo">Drama</p></span>
                        <span class="ano-filme">Ano: 
                            <p class="ano">2023</p>
                        </span>
                        
                        <div class="estrelas-minha-avaliacao">
                            <p class="minha-avaliacao">Sua avaliacao</p>
                            <img src="public/img/icones/Icon/estrela-borda.png" alt="">
                            <img src="public/img/icones/Icon/estrela-borda.png" alt="">
                            <img src="public/img/icones/Icon/estrela-borda.png" alt="">
                            <img src="public/img/icones/Icon/estrela-borda.png" alt="">
                            <img src="public/img/icones/Icon/estrela-borda.png" alt="">
                        </div>
                    </div>
                </div>
                <form action="" method="post">
                    <textarea rows="10" cols="30" name="descricao" id="descricao" placeholder="Comentário"></textarea>
                    <div>
                        <button type="submit">Publicar</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
   
    <script src="public/js/index.js"></script>
</body>
</html>