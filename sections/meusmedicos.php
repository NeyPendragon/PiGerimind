<?php
include ('../sections/sessao.php');
$medicos =[];
$sql = $pdo->query("SELECT * FROM medicos");
$medicos = $sql->fetchAll(PDO::FETCH_ASSOC);
?>



<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meus Médicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  </head>
  <body>

  <div class="container-fluid">

  <!-- Header -->
 <section>
  <div class="row p-3 bg-primary text-white">
    <div class="container-fuid">
      <div class="col d-flex justify-content-center">
        <h4> Meus Médicos </h4>
      </div>
    </div>
  </div>
 </section>

 <!-- Nome do usuário -->
<section>
  <div class="container-fluid">
    <div class="row p-4">
      <h5 class="text-primary text-center"> Usuário: <?= $username['nomeusuario'];?></h5>
    </div>
  </div>
</section>

<!-- Título da página -->
<section>
<div class="row">
  <div class="container-fluid">
    <h3 class="text-center text-secondary"> Listagem dos Médicos </h3>
</div>
</section>


<!-- Tabela  -->
<section class="mt-40">
  <div class="container">
   <table class="table">
        <?php foreach($medicos as $md): ?>
            <tbody>
              <tr><td class="bg-primary-subtle text-primary"> <strong>Nome:</strong> <?= $md['nomemedico']?> </td></tr>
              <tr><td> <strong class="text-primary">Especialidade: </strong> <?= $md['especialidade']?> </td></tr>
              <tr><td> <strong class="text-primary"> CRM: </strong><?= $md['crm']?>  </td></tr>
              <tr><td> <strong class="text-primary"> Email: </strong> <?= $md['emailmedico']?> </td></tr>
              <tr><td> <strong class="text-primary"> Telefone: </strong><?= $md['telmedico']?> </td></tr>
              <tr><td class="d-flex justify-content-around"> <a class="btn btn-success btn-sm" href="../app/editarmedico.php?id=<?=$md['id'];?>" >Editar </a> <a href="../app/apagarmedico.php?id=<?=$md['id']; ?>"><button class="btn btn-danger btn-sm" >Excluir </button></a> </td></tr>
              <tr><td></td></tr>
            </tbody>
    <?php endforeach; ?>

   </table>
  </div>
</section>

<footer class="folga"></footer>

<!-- Menu Fixo -->
<section class="bg-primary-subtle fixed-bottom menu">
  <div class="row">
  <div class="col d-flex flex-column align-items-center">
      <a href="javascript: history.go(-1)" ><span class="material-symbols-outlined md-60">arrow_circle_left</span></a>
      <p> Voltar </p>
  </div>

    <div class="col d-flex flex-column align-items-center">
      <a href="inicio.php" ><span class="material-symbols-outlined md-60">home</span></a>
      <p> Início </p>
    </div>

    <div class="col d-flex flex-column align-items-center">
      <a href="../index.php" ><span class="material-symbols-outlined md-60">tab_move</span></a>
      <p> Sair </p>
    </div>
    
  </div>
</section>



</div>  <!-- Fim do container-fluid -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>