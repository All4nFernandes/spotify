<?php
include_once __DIR__ . '\..\..\..\model\LoginModel.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (!empty($email) && !empty($senha)) {
        $cadastroUsuario = new LoginModel();
        $cadastroUsuario->Cadastrar($email, $senha);
        header('location: login.php');
    }

}



include_once __DIR__ . "/../../components/head.php";

?>

<body class="body-cadastro">
    <main>
        <div class="corpo-cadastro">
            <form action="" method="POST">
                <img class="logo-cadastro" src="/spotify/view/assets/img/spotify_logo_branca.png" alt="logo-spotify">
                <div>
                    <p class="p-text"><span>
                            Se inscreva e comece a curtir
                        </span></p>
                </div>

                <div class="container-btn">
                    <button class="btn-login" type="submit"><span>Avançar</span></button>
                </div>
            </form>
        </div>
    </main>
</body>