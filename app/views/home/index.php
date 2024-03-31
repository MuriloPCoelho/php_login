<?php
    session_start();
    if (!isset($_SESSION['logged'])) {
        header('Location: /php_login/login/index');
        exit;
    }
?>
<h1>Home</h1>
<p>Seja bem-vindo!</p>
