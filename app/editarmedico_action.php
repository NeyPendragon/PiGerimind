<?php
require 'conexao.php';

$id = filter_input(INPUT_POST, 'id');
$nomemedico = filter_input(INPUT_POST,'nomemedico');
$especialidade = filter_input(INPUT_POST,'especialidade');
$crm = filter_input(INPUT_POST,'crm');
$emailmedico = filter_input(INPUT_POST,'emailmedico', FILTER_VALIDATE_EMAIL);
$telmedico = filter_input(INPUT_POST,'telmedico');

$sql = $pdo->prepare("UPDATE medicos SET 
nomemedico = :nomemedico, 
especialidade = :especialidade, 
crm = :crm, 
emailmedico = :emailmedico, 
telmedico = :telmedico WHERE id = :id");


$sql->bindValue(':nomemedico',$nomemedico);
$sql->bindValue(':especialidade',$especialidade);
$sql->bindValue(':crm',$crm);
$sql->bindValue(':emailmedico',$emailmedico);
$sql->bindValue(':telmedico',$telmedico);
$sql->bindValue('id',$id);
$sql->execute();

header("Location: ../sections/meusmedicos.php");
