<?php

require 'conexao.php';

$nomeusuario = filter_input(INPUT_POST,'nomeusuario');
$emailusuario = filter_input(INPUT_POST,'emailusuario');
$senha = filter_input(INPUT_POST,'senha');
$doenca = filter_input(INPUT_POST,'doenca');
$telefoneusuario = filter_input(INPUT_POST,'telefoneusuario');
$nomecuidador = filter_input(INPUT_POST,'nomecuidador');
$telefonecuidador = filter_input(INPUT_POST,'telefonecuidador');

if($sql->rowCount()==0){
$sql = $pdo->prepare('INSERT INTO usuario (nomeusuario,emailusuario,senha,doenca,telefoneusuario, nomecuidador,telefonecuidador) VALUES (:nomeusuario,:emailusuario,:senha,:doenca,:telefoneusuario,:nomecuidador,:telefonecuidador)');
$sql->bindValue(':nomeusuario',$nomeusuario);
$sql->bindValue(':emailusuario',$emailusuario);
$sql->bindValue(':senha',$senha);
$sql->bindValue(':doenca',$doenca);
$sql->bindValue(':telefoneusuario',$telefoneusuario);
$sql->bindValue(':nomecuidador',$nomecuidador);
$sql->bindValue(':telefonecuidador',$telefonecuidador);
$sql->execute();

header("Location: ../sections/inicio.php");

}else{
   $sql = $pdo->prepare("UPDATE usuario SET 
   nomeusuario = :nomeusuario,
   emailusuario = :emailusuario,
   senha =:senha,
   doenca =:doenca,
   telefoneusuario = :telefoneusuario,
   nomecuidador = :nomecuidador,
   telefonecuidador = :telefonecuidador");

    $sql->bindValue(':nomeusuario',$nomeusuario);
    $sql->bindValue(':emailusuario',$emailusuario);
    $sql->bindValue(':senha',$senha);
    $sql->bindValue(':doenca',$doenca);
    $sql->bindValue(':telefoneusuario',$telefoneusuario);
    $sql->bindValue(':nomecuidador',$nomecuidador);
    $sql->bindValue(':telefonecuidador',$telefonecuidador);
    $sql->execute();

    header("Location: ../sections/inicio.php");

}