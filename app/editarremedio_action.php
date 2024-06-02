<?php
require 'conexao.php';

$id = filter_input(INPUT_POST, 'id');
$nome_remedio = filter_input(INPUT_POST,'nome_remedio');
$dosagem = filter_input(INPUT_POST,'dosagem');
$tempo = filter_input(INPUT_POST,'tempo');
$medico = filter_input(INPUT_POST,'medico');


$sql = $pdo->prepare("UPDATE remedios SET 
nome_remedio = :nome_remedio, 
dosagem = :dosagem, 
tempo = :tempo, 
medico = :medico 
WHERE id = :id");


$sql->bindValue(':nome_remedio',$nome_remedio);
$sql->bindValue(':dosagem',$dosagem);
$sql->bindValue(':tempo',$tempo);
$sql->bindValue(':medico',$medico);
$sql->bindValue('id',$id);
$sql->execute();

header("Location: ../sections/meusremedios.php");
