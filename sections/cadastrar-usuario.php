<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


    <title>Cadastrar Usuário</title>
</head>
<body>
  <main class="container ">
      <!-- Header -->
 <section>
  <div class="row p-3 bg-primary text-white">
    <div class="container-fuid">
      <div class="col d-flex justify-content-center">
        <h4> Cadastrar Usuário </h4>
      </div>
    </div>
  </div>
 </section>

 <!-- Nome do usuário -->
<section>
  <div class="container-fluid">
    <div class="row p-4">
      <img src="../assets/img/logo.png" alt="" style="width: 200px;margin:auto;">
    </div>
  </div>
</section>

<!-- Título da página -->
<section>
<div class="row">
  <div class="container-fluid">
    <h3 class="text-center text-secondary"> Cadastrar novo Usuário </h3>
</div>
</section>


<div class="container">
<!-- Formulário de cadastro -->
<form action="../app/usuario_action.php" method="post" class="mt-3">
    
    <div class="mb-3">
        <label for="user" class="form-label">Nome completo:</label>
        <input type="text" class="form-control border border-info" id="user" name="nomeusuario">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control border border-info" id="email" name="emailusuario">
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" class="form-control border border-info" id="senha" name="senha">
    </div>

    <div class="mb-3">
        <label for="doenca" class="form-label">Doença crônica: </label>
        <input type="text" class="form-control border border-info" id="doenca" name="doenca">
    </div>
    <div class="mb-3">
        <label for="tel" class="form-label">Telefone paciente:</label>
        <input type="text" class="form-control border border-info" id="tel" name="telefoneusuario">
    </div>
    <div class="mb-3">
    <label for="cuida" class="form-label">Nome cuidador(a):</label>
        <input type="text" class="form-control border border-info" id="cuida" name="nomecuidador">
    </div>
    <div class="mb-3">
        <label for="tel2" class="form-label">Telefone cuidador(a):</label>
        <input type="text" class="form-control border border-info" id="tel2" name="telefonecuidador">
    </div>
    
    <button type="submit" class="btn btn-primary mt-3 btn-lg">Cadastrar</button>

</form>
</div><!-- Final da div container -->
<footer class="folga"></footer>
<!-- ****************************************************************************************************  --> 
<footer>
      <div class="row bg-primary mt-3">
        <p class="text-white text-center mt-3"> Gerimind - Seu remédio na hora certa </p>
      </div>
    </footer>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>