<?php
    session_start();
    unset($_SESSION['emailusuario']);
    unset($_SESSION['senha']);
    header("Location: ../index.php");
?>