<?php

require 'conexao.php';

$id = filter_input(INPUT_GET,'id');

$sql = $pdo->prepare("DELETE FROM medicos WHERE id = :id");
$sql->bindValue(':id',$id);
$sql->execute();

header("Location: ../sections/meusmedicos.php");
