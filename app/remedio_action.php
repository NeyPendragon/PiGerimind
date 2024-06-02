<?php

require 'conexao.php';

$nomemedicamento = filter_input(INPUT_POST,'nomemedicamento');
$dosagem = filter_input(INPUT_POST,'dosagem');
$tempoduracao = filter_input(INPUT_POST,'tempoduracao');
$medico = filter_input(INPUT_POST,'medico');

$sql = $pdo->prepare('INSERT INTO remedios(nome_remedio,dosagem,tempo,medico) VALUES (:nomemedicamento,:dosagem,:tempoduracao,:medico)');
$sql->bindValue(':nomemedicamento',$nomemedicamento);
$sql->bindValue(':dosagem',$dosagem);
$sql->bindValue(':tempoduracao',$tempoduracao);
$sql->bindValue(':medico',$medico);
$sql->execute();

header("Location: ../sections/meusremedios.php");

