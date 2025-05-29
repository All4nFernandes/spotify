<?php
session_start();
include_once __DIR__ . "/../components/head.php";
// Verifica se o usuário está logado
$usuariologado = $_SESSION['usuario_logado'] ?? null;
?>

<header>
    <nav class="navbar-container">
        <div class="box-navbar">
            <a href="/spotify/view/pages/home.php">
                <img class="logo-navbar" src="/spotify/view/assets/img/spotify_logo_branca.png" alt="logo-spotify">
            </a>
            <div>
                <ul class="itens-navbar-esquerda">
                    <li>
                        <button class="btn-home" type="button">
                            <img src="/spotify/view/assets/img/svg/home-spotify.svg" alt="svg-home"> <!-- svg home -->
                        </button><!-- button home -->
                    </li>
                    <li>
                        <div class="barra-pesquisa-container">
                            <img class="lupa-pesquisa-svg" src="/spotify/view/assets/img/svg/lupa-spotify.svg"
                                alt="lupa-spotify"> <!-- svg lupa -->
                            <input type="text" class="barra-pesquisa" placeholder="O que você quer ouvir?">
                            <!-- button de pesquisa -->
                            <div class="linha-vertical-input"></div>
                            <a href="">
                                <img class="icon-box-descobrir" src="/spotify/view/assets/img/svg/box-descobrir.svg"
                                    alt="icon-navegar"> <!-- svg navegar -->
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <?php if (empty($usuariologado)): ?>
                <>
                    <ul class="navbar-links">
                        <li>
                            <a href="" class="links"><span class="span-links">Premium</span></a> <!-- link premium -->
                        </li>
                        <li>
                            <a href="" class="links"><span class="span-links">Suporte</span></a> <!-- link suporte -->
                        </li>
                        <li>
                            <a href="" class="links"><span class="span-links">Baixar</span></a> <!-- link baixar -->

                        </li>
                        <li id="linha-vertical"></li>
                        <li>
                            <div class="box-download">
                                <img class="img-download" src="/spotify/view/assets/img/botao-circular-de-download.png"
                                    alt="icone-baixar-app">
                                <!-- svg baixar -->
                                <a href="" class="links"><span class="span-instalar-app">Instalar aplicativo</span></a>
                                <!-- link instalar aplicativo -->
                            </div>
                        </li>
                        <li>
                            <a href="/spotify/view/pages/login/cadastro.php" class="links "><span
                                    class="span-inscrever-se">Inscrever-se</span></a>
                            <!-- link inscrever-se -->
                        </li>
                        <li>
                            <a href="/spotify/view/pages/login/login.php" class="links btn-entrar"><span>Entrar</span></a>
                            <!-- btn entrar -->
                        </li>
                    </ul>
            </div>
        <?php else: ?>
            <button>
                <img src="" alt="foto-perfil"> <!-- foto do usuario -->
            </button>
            <a href="\spotify\view\pages\login\logout.php"><span>Sair</span></a>
        <?php endif; ?>
        </div>
    </nav>
</header>