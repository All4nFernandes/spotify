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
    } else
        $erro = "Esse e-mail é inválido. O formato correto é assim: exemplo@email.com";
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
                <div class="container-login-input">
                    <label class="label-login" for="email"><span>E-mail ou nome de usuário</span> </label>
                    <input class="login-input" type="text" name="email" placeholder="nome@dominio.com" required>
                    <?php if (!empty($erro)): ?>
                        <span class="mensagem-erro"><?php echo $erro; ?></span>
                        <!-- Informa a mensagem de erro caso o usuário não tenha inserido um email correto  -->
                    <?php endif; ?>
                    <a class="CadastrarComTelefone" href=""><span>Usar número de telefone.</span></a>
                </div>

                <div class="container-btn">
                    <button class="btn-login" type="submit"><span>Avançar</span></button>
                </div>
                <div>
                    <!-- fazer barra para separar com 'ou' no meio delas  -->
                </div>
                <div>
                    <!-- cadastrar com google e apple -->
                    <ul class="icones-centralizados">
                        <li class="container-link-login">
                            <a class="link-login" href="">
                                <img class="logo-links" src="\spotify\view\assets\img\svg\google_logo.svg"
                                    alt="logo-google">
                                <span class="text-link">Increver-se com o Google</span>
                            </a>
                        </li>
                        <li class="container-link-login">
                            <a class="link-login" href="">
                                <img class="logo-links" src="\spotify\view\assets\img\svg\apple_logo.svg"
                                    alt="apple logo">
                                <span class="text-link">Increver-se com a Apple</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </main>
    <?php include_once __DIR__ . "/../../components/footer.php"; ?>
</body>