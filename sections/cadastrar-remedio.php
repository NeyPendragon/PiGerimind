<?php
require '../app/conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


    <title>Cadastrar Medicamento</title>
</head>
<body>
  <main class="container ">
      <!-- Header -->
 <section>
  <div class="row p-3 bg-primary text-white">
    <div class="container-fuid">
      <div class="col d-flex justify-content-center">
        <h4> Cadastrar Medicamentos </h4>
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
    <h3 class="text-center text-secondary"> Cadastrar novo medicamento </h3>
</div>
</section>


<div class="container">
<!-- Formulário de cadastro -->
<form action="../app/remedio_action.php" method="post" class="mt-3">
    
    <div class="mb-3">
        <label for="nomeremedio" class="form-label">Nome do medicamento:</label>
        <input type="text" class="form-control border border-info" id="nomeremedio" name="nomemedicamento">
    </div>

    <div class="mb-3">
        <label for="dose" class="form-label">Dosagem prescrita: </label>
        <input type="text" class="form-control border border-info" id="dose" name="dosagem">
    </div>
    <div class="mb-3">
        <label for="tempo" class="form-label">Tempo de duração:</label>
        <input type="text" class="form-control border border-info" id="tempo" name="tempoduracao">
    </div>
    <div class="mb-3">
        <label for="medico" class="form-label">Medico que prescreveu:</label>
        <input type="text" class="form-control border border-info" id="medico" name="medico">
    </div>
    
    <button type="submit" class="btn btn-primary mt-3 btn-lg ">Cadastrar</button>

</form>
</div><!-- Final da div container -->
<footer class="folga"></footer>
<!-- ****************************************************************************************************  --> 
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
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>