<?php
    session_start();
    if (isset($_SESSION['login'])) {
        $user = $_SESSION['login'];
    } else {
        session_destroy();
        header("location: login_agente.php?msg=Área Restrita");
    }
?>