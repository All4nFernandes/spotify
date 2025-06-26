<?php
include_once __DIR__ . "/../../database/Database.php";
include_once __DIR__ . "/../components/head.php";
?>

<body class="body-home">
    <?php include_once __DIR__ . '/../components/navbar.php'; ?>
    <main class="main-home">
        <div class="box-esquerda-home">
            <?php if (empty($usuariologado))
                ; ?>
            <h2>
                <span class="span-home">
                    Sua Biblioteca
                </span>
            </h2>
        </div>
        <div></div>
    </main>
    <?php include_once __DIR__ . '/../components/footer.php'; ?>
</body>