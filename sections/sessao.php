<?php
session_start();
include_once('../app/conexao.php');

if (!isset($_SESSION['emailusuario']) || !isset($_SESSION['senha'])) {
    header('Location: ../index.php');
    exit();
}

$logado = $_SESSION['emailusuario'];

$sql = "SELECT id, nomeusuario FROM usuario WHERE emailusuario = '$logado'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $nomeusuario = $row['nomeusuario'];
} else {
    header('Location: ../index.php');
    exit();

}
?>