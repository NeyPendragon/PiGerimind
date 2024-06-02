<?php
    session_start();
     print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['emailusuario']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('conexao.php');
        $emailusuario = $_POST['emailusuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE emailusuario = '$emailusuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['emailusuario']);
            unset($_SESSION['senha']);
            header('Location: ../index.php');
        }
        else
        {
            $_SESSION['emailusuario'] = $emailusuario;
            $_SESSION['senha'] = $senha;
            header('Location: ../sections/inicio.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: ../index.php');
    }
?>