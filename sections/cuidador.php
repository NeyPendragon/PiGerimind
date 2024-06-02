
<?php
include ('../sections/sessao.php');
$nomecuidador = [];
$telefonecuidador = [];

$sql = "SELECT nomecuidador, telefonecuidador FROM usuario";
$resultado = mysqli_query($conexao, $sql); 

if ($resultado) {
  while ($row = mysqli_fetch_assoc($resultado)) {
    $nomecuidador[] = $row['nomecuidador'];
    $telefonecuidador[] = $row['telefonecuidador'];
  }
  mysqli_free_result($resultado);
} else {
  echo "Erro: Ocorreu um erro ao executar a consulta."; 
}
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuidador(a)</title>
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
        <h4> Cuidador(a) </h4>
      </div>
    </div>
  </div>
 </section>

 <!-- Nome do usuário -->
<section>
  <div class="container-fluid">
    <div class="row p-4">
    <h5 class="text-primary text-center"> Usuário: <?= $nomeusuario;?></h5>
    </div>
  </div>
</section>

<!-- Imagem -->
<section>
<div class="row">
  <div class="container-fluid">
    <div class="col d-flex justify-content-center">
      <div class="image-circle">
        <div class="circle-dashed ">
          <img src="../assets/img/mulher.png" alt="" class="circle-img" >
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<!-- Telefone úteis -->
<section class="mt-40">
  <div class="container">
    <div class="alert alert-info fs-5" role="alert">
    <?php
      if (count($nomecuidador) > 0) {
        echo "<p><strong> Nome: </strong> " . $nomecuidador[0] . "</p>";
        echo "<p><strong> Telefone: </strong> <span class='material-symbols-outlined'>call</span> " . $telefonecuidador[0] . "</p>";
      } else {
        echo "<p>Nenhum cuidador encontrado.</p>";
      }
      ?>
    </div>
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