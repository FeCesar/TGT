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
    <link rel="stylesheet" href="../public/styles/first-hero.css" />
    <link rel="stylesheet" href="../public/styles/backgrounds.css" />
    <link rel="stylesheet" href="../public/styles/colors.css" />
    <link rel="stylesheet" href="../public/styles/borders.css" />

    <!-- SCRIPT BUTTON MOBILE -->
    <script src="../scripts/btn-mobile.js"></script>
</head>
<body>

    <!-- NAVBAR -->
    <header class="container">
        <nav class="navbar" role="navigation" aria-label="main navegation">
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
                    <a href="#" class="navbar-item">Home</a>
                    <a href="#" class="navbar-item">Quem Somos</a>
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

    <section class="hero background-first-hero is-fullheight-with-navbar">
        <div class="container hero-body">
            <section class="section background-opacity border-radius">
                <div class="container">
                    <h1 class="title color-grafite">Conectamos pessoas e empresas   </h1>
                    <h2 class="subtitle">
                        De maneira simples, insira sua marca ou seu produto no meio online! Tenha disponível seus produtos para usuários interessados em um catálogo feito por você!
                    </h2>
                </div>
            </section>
        </div>
    </section>



</body>
</html>