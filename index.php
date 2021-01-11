<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TGT - Together</title>

    <!-- ICONS OF BULMA -->
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>

    <!-- STYLES OF BULMA -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css" />

    <!-- STYLES OF APP -->
    <link rel="stylesheet" href="./public/styles/backgrounds.css" />
    <link rel="stylesheet" href="./public/styles/colors.css" />
    <link rel="stylesheet" href="./public/styles/borders.css" />
    <link rel="stylesheet" href="./public/styles/spaces.css" />
    <link rel="stylesheet" href="./public/styles/config.css" />
    <link rel="stylesheet" href="./public/styles/fonts.css" />

    <!-- SCRIPT MOBILE BUTTON -->
    <script src="./scripts/btn-mobile.js"></script>
</head>
<body>

    <!-- NAVBAR -->
    <header class="container">
        <nav class="navbar is-fixed-top padding-right padding-left" role="navigation" aria-label="main navegation">
            <div class="navbar-brand">
                <a href="#" class="navbar-item">TGT - Together</a>

                <!-- MENU MOBILE -->
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <!-- MENU DESKTOP -->
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <a href="#homepage" class="navbar-item">Home</a>
                    <a href="#catalogo" class="navbar-item">Catálogo</a>
                    <a href="#quemsomos" class="navbar-item">Quem Somos</a>
                    <a href="#" class="navbar-item">Empresas Parceiras</a>

                    <!-- MENU DROPDOWN -->
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Como Funciona</a>

                        <div class="navbar-dropdown">
                            <a href="#" class="navbar-item">Passo a Passo</a>
                            <a href="#" class="navbar-item">Perguntas Frequentes</a>
                        </div>
                    </div>  
                </div>

                <!-- BUTTONS OF NAVBAR END -->
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div>
                            <a class="button is-primary"><strong>Cadastar</strong></a>
                            <a class="button is-light">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero is-fullheight" id="homepage">
        <div class="container hero-body">
            <section class="section">
                <div class="container">
                    <h1 class="title color-grafite">Conectamos pessoas e empresas   </h1>
                    <h2 class="subtitle">
                        De maneira simples, insira sua marca ou seu produto no meio online! Tenha disponível seus produtos para usuários interessados em um catálogo feito por você!
                    </h2>
                </div>
            </section>
        </div>
    </section>

    <section class="hero is-fullheight" id="catalogo">

            <div class="columns">
                <div class="column is-two-fifths has-background-dark flex-center full-height padding-standart">
                    <section class="section">
                        <header>
                            <h3 class="title has-text-white">Procure Empresas</h3>
                            <p class="subtitle has-text-white text-light">Coloque o nome do produto e serviço ou palavras chaves para o filto de nosso banco de dados.</p>
                        </header>

                        <form class="field has-addons padding-top">
                            <div class="control">
                                <input type="text" class="input" name="search" placeholder="Ex.: Borracharia"/>
                            </div>
                            <div class="control">
                                <input type="submit" class="button is-info" value="Procurar" />
                            </div>
                        </form>

                    </section>
                </div>

                <div class="column has-backgruond-light full-height">
                    <header>
                        <h2 class="title is-4 has-text-black padding-standart padding-top">Resultados da pesquisa ""</h2>
                    </header>

                    <div class="box">
                        <header>
                            <h3 class="title is-5">Focus Elétrica</h3>
                            <p class="subtitle is-5">Materiais e serviços em elétrica</p>
                            <button class="button is-link is-light" id="empresa1">Ver Catálogo</button>
                        </header>
                    </div>

                    <div class="box">
                        <header>
                            <h3 class="title is-5">Elétrica Forte</h3>
                            <p class="subtitle is-5">Materiais e serviços em elétrica</p>
                            <button class="button is-link is-light" id="btn-modal">Ver Catálogo</button>
                        </header>
                    </div>

                    <button class="button is-link is-outlined padding-standart margin-standart margin-top">Mais Resultados</button>

                </div>
            </div>

    </section>

</body>
</html>