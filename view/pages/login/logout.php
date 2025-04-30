<?php
session_start();
session_destroy();
header('Location: \spotify\view\pages\home.php'); // Redireciona para a página de home ou login
exit();
