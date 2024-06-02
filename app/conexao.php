<?php

$db_name = 'test';
$db_host = 'localhost';
$db_user = 'root';
$db_passwd = '';


$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_passwd);
$conexao = new mysqli($db_host,$db_user,$db_passwd,$db_name);

$username = [];
$sql = $pdo->query("SELECT nomeusuario FROM usuario");
$username = $sql->fetch(PDO::FETCH_ASSOC);
$sql->execute();
