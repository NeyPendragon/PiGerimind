<?php

require 'conexao.php';

$nomemedico = filter_input(INPUT_POST,'nomemedico');
$especialidade = filter_input(INPUT_POST,'especialidade');
$crm = filter_input(INPUT_POST,'crm');
$emailmedico = filter_input(INPUT_POST,'emailmedico');
$telmedico = filter_input(INPUT_POST,'telmedico');

$sql = $pdo->prepare('INSERT INTO medicos(nomemedico,especialidade,crm,emailmedico,telmedico) VALUES (:nomemedico,:especialidade,:crm,:emailmedico,:telmedico)');
$sql->bindValue(':nomemedico',$nomemedico);
$sql->bindValue(':especialidade',$especialidade);
$sql->bindValue(':crm',$crm);
$sql->bindValue(':emailmedico',$emailmedico);
$sql->bindValue(':telmedico',$telmedico);
$sql->execute();

header("Location: ../sections/meusmedicos.php");

