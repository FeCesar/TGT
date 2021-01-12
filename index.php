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
    <link rel="stylesheet" href="./public/styles/sizes.css" />
    <link rel="stylesheet" href="./public/styles/filters.css" />

    <!-- SCRIPT MOBILE BUTTON -->
    <script src="./scripts/btn-mobile.js"></script>
    <!-- SCRIPT MODAL BUTTON -->
    <script src="./scripts/btn-modal.js"></script>
</head>
<body>

    <!-- NAVBAR -->
    <header class="container">
        <nav class="navbar is-fixed-top padding-right padding-left" role="navigation" aria-label="main navegation">
            <div class="navbar-brand">
                <a href="#homepage" class="navbar-item">TGT - Together</a>

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
                    <a href="#empresasparceiras" class="navbar-item">Empresas Parceiras</a>
                    <a href="#steps" class="navbar-item">Passo a Passo</a> 
                </div>

                <!-- BUTTONS OF NAVBAR END -->
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div>
                            <a class="button is-primary" onClick="openModal('modalRegistro')"><strong>Cadastar</strong></a>
                            <a class="button is-light" onClick="openModal('modalLogar')">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- MODAL LOGIN -->
    <div class="modal" id="modalLogar">
        <div class="modal-background"></div>
            <div class="card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Entrar</p>
                </header>

                <section class="modal-card padding-standart">
                    <form method="post" action="#">
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" name="email" placeholder="Email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                        
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="password" name="pass" placeholder="Password">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>

                        <div class="field">
                            <p class="control">
                                <input type="submit" class="button is-success" value="Entrar">
                            </p>
                        </div>                        
                    </form>
                </section>
            </div>
        <button class="modal-close is-large" aria-label="close" onClick="closeModal('modalLogar')"></button>
    </div>

    <!-- MODAL REGISTRAR -->
    <div class="modal" id="modalRegistro">
        <div class="modal-background"></div>
        <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Cadastrar-se</p>
                </header>

                <section class="modal-card-body">
                    <form method="post" action="#">
                        
                        <div class="padding-standart">
                            <label class="label" for="nome">Nome completo</label>
                            <input type="text" class="input" name="nome" placeholder="Ex.: Felipe Cesar" />
                        </div>

                        <div class="padding-standart">
                            <label class="label" for="email">E-mail</label>
                            <input type="email" class="input" name="email" placeholder="Ex.: seunome@gmail.com" />
                        </div>

                        <div class="padding-standart">
                            <label class="label" for="telefone">Numero do Celular</label>
                            <input type="text" class="input" name="telefone" placeholder="Ex.: 18996220090" />
                        </div>

                        <div class="padding-standart">
                            <label class="label" for="cpf">CPF</label>
                            <input type="text" class="input" name="cpf" placeholder="Ex.: 47795071899" />
                        </div>

                        <div class="padding-standart">
                            <label class="label" for="nome-empresa">Nome da Empresa</label>
                            <input type="text" class="input" name="nome-empresa" placeholder="Ex.: Tem Tudo Movéis" />
                        </div>

                        <div class="padding-standart">
                            <label class="label" for="seguimento">Seguimento da Empresa</label>
                            <input type="text" class="input" name="seguimento" placeholder="Ex.: Movéis e Papeis de Parede" />
                        </div>

                        <div class="padding-standart">
                            <input type="submit" class="input button is-success" value="Cadastrar">
                        </div>

                    </form>
                </section>
            </div>
        <button class="modal-close is-large" aria-label="close" onClick="closeModal('modalRegistro')"></button>
    </div>

    <!-- HOMEPAGE -->
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

    <!-- PESQUISA DE EMPRESAS -->
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

    <!-- QUEM SOMOS -->
    <section class="hero is-fullheight" id="quemsomos">
        <div class="columns">
            <div class="column flex-center full-height padding-standart">
                
                <header>
                    <h1 class="title is-2 ">Quem Somos?</h1>
                    <p class="subtitle is-3">Nossa breve história</p>
                    <p class="text-line-height">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
                    <p class="text-line-height">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim quis doloribus ex minus mollitia veritatis, eligendi nulla provident culpa aliquam sit quod repellat veniam aperiam ipsam soluta cumque corrupti inventore.</p>
                </header>

            </div>
            <div class="column is-two-fifths has-background-dark flex-center full-height padding-standart">
                <div class="padding-standart has-text-gray">
                    <figure class="image is-210x210 margin-auto-right-left margin-top">
                        <img src="public/images/igor-kadoka.png" alt="fundador-do-projeto" class="is-rounded ">
                    </figure>
                    <div class="margin-top">
                        <h1 class="title is-4 text-center has-text-grey">Igor</h1>
                        <h3 class="subtitle is-4 text-center has-text-grey">Idealizador e Fundador</h3>
                        <p class="text-line-height text-center has-text-grey">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EMPRESAS PARCEIRAS -->
    <section class="hero is-fullheight flex-center" id="empresasparceiras">
        <div class="columns">
            <div class="column is-one-quarter">
                <figure class="image-filter-opacity">
                    <img src="./public/images/empresas/john-deere-logo.png" />
                </figure>
            </div>

            <div class="column is-one-quarter">
                <figure class="image-filter-opacity">
                    <img src="./public/images/empresas/avenida.png" />
                </figure>
            </div>

            <div class="column is-one-quarter">
                <figure class="image-filter-opacity">
                    <img src="./public/images/empresas/casa-di-conti.png" />
                </figure>
            </div>

            <div class="column is-one-quarter">
                <figure class="image-filter-opacity">
                    <img src="./public/images/empresas/lilica-e-tigor.png" />
                </figure>
            </div>
    </section>

    <!-- PASSO A PASSO -->
    <section class="hero is-fullheight" id="steps">
        <div class="columns">

            <div class="column is-two-fifths has-background-dark flex-center full-height padding-standart">
                <h1 class="title is-3 has-text-grey border-right-low text-center">Passo a Passo</h1>
                <p class="subtitle is-5 text-center">Como se cadastrar na plataforma</p>  
            </div>

            <div class="column flex-center full-height padding-standart">
                <iframe class="container half-height" src="https://www.youtube.com/embed/SCSAExGFK1E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> 
    </section>

</body>
</html>