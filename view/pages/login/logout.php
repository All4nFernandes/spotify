<?php
session_start();
session_destroy();
header('Location: \spotify\view\pages\login\login.php'); // Redireciona para a página de home ou login
exit();
