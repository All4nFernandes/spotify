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

<body>
    <main class="main-login">
        <div class="box-login">
            <form action="" method="POST">
                <label class="label-login" for="email">Email</label>
                <input class="input-login" type="text" name="email" required>
                <label class="label-login" for="senha">Senha</label>
                <input class="input-login" type="password" name="senha" required>
                <div class="container-btn">
                    <button class="btn-login" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>
</body>