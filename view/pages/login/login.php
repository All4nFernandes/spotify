<?php

include_once __DIR__ . '\..\..\..\model\LoginModel.php';


session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $loginUsuario = new LoginModel();

    if ($loginUsuario->login($email, $senha)) {
        $_SESSION["usuario_logado"] = $email;
        header("Location: /spotify/view/pages/home.php");
        exit();
    }
}
// Inclui o cabeçalho
include_once __DIR__ . "/../../components/head.php";
?>

<body>
    <main class="main-login">
        <div class="box-login">
            <div>
                <a href="/home.php">
                    <img class="logo-spotify" src="\spotify\view\assets\img\spotify_logo_branca.png" alt="logo">
                </a>
                <h1 class="title-login">Entrar no Spotify</h1>
            </div>
            <div>
                <ul class="icones-centralizados">
                    <li class="container-link-login">
                        <a class="link-login" href="">
                            <img class="logo-links" src="\spotify\view\assets\img\svg\google_logo.svg"
                                alt="logo-google">
                            <span class="text-link">Continuar com o Google</span>
                        </a>
                    </li>
                    <li class="container-link-login">
                        <a class="link-login" href="">
                            <img class="logo-links" src="\spotify\view\assets\img\svg\facebook_logo.svg"
                                alt="logo-facebook">
                            <span class="text-link">Continuar com o Facebook</span>
                        </a>
                    </li>
                    <li class="container-link-login">
                        <a class="link-login" href="">
                            <img class="logo-links" src="\spotify\view\assets\img\svg\apple_logo.svg" alt="apple logo">
                            <span class="text-link">Continuar com a Apple</span>
                        </a>
                    </li>
                    <li class="container-link-login">
                        <a class="link-login" href="">
                            <span class="text-link">Continuar com um número de telefone</span>
                        </a>
                    </li>
                </ul>
            </div>
            <hr class="barra-vertical">
            <form action="" method="POST">
                <div>
                    <div class="container-login-input">
                        <label class="label-login" for="email"><span>E-mail ou nome de usuário</span> </label>
                        <input class="login-input" type="text" name="email" placeholder="E-mail ou nome de usuário"
                            required>
                        <label class="label-login" for="senha"><span>Senha</span> </label>
                        <input class="login-input" type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <div class="container-btn">
                        <button class="btn-login" type="submit">Continuar</button>
                    </div>
                    <div class="box-increver-se">
                        <span class="sem-conta">Não tem uma conta?</span>
                        <a class="increver-se" href="">Inscrever-se no Spotify.</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php include_once __DIR__ . "/../../components/footer.php"; ?>
</body>