<?php
include ('../sections/sessao.php');
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    
  </head>
  <body>
  <div class="container">


    <div class="row mt-40">
      <div class="col d-flex justify-content-center">
          <img src="../assets/img/logo.png" class="img-thumbnail image-size" >
      </div>
      


    </div>

    <div class="row mt-40">
      <div class="container-md">
        <div class="alert alert-primary text-center" role="alert">
         <h3> Olá, <?= $nomeusuario;?>, como posso lhe ajudar?</h3>
        </div>
      </div>
    </div>


    <div class="container">
            <div class="row d-flex ">

              <div class="col w-50 "> 
              <a href="medicamentos.php"> 
                  <div class="cartao">
                    <img src="../assets/img/medicamento.png" alt="" class="img-cartao">
                    <div class="titulo-cartao"> Medicamentos </div>
                  </div>
              </a>

              </div>

              <div class="col w-50 "> 
              <a href="medicos.php"> 
                <div class="cartao">
                  <img src="../assets/img/medico.png" alt="" class="img-cartao">
                  <div class="titulo-cartao"> <a href="medicos.php"> Médicos </a></div>
              </div>
              </a>
              </div>
            </div> <!-- Fim da row -->
            <div class="row">
              <div class="col w-50">
              <a href="historico.php"> 
                <div class="cartao">
                  <img src="../assets/img/historico.png" alt="" class="img-cartao">
                <div class="titulo-cartao"> <a href="historico.php"> Histórico </a></div>
                </div>
                </a>
              </div>
              <div class="col w-50"> 
              <a href="cuidador.php"> 
                <div class="cartao ">
                  <img src="../assets/img/cuidador.png" alt="" class="img-cartao">
                  <div class="titulo-cartao"> <a href="cuidador.php"> Cuidador(a) </a></div>
                </div>
                </a>
              </div>
          </div> <!-- Fim da row -->

          <div class="row">
            <div class="col w-50"> 
            <a href="telefones.php"> 
              <div class="cartao ">
                  <img src="../assets/img/telefone.png" alt="" class="img-cartao">
                  <div class="titulo-cartao"> <a href="telefones.php"> Telefones Úteis </a></div>
              </div>
            </div>
            </a>
            <div class="col w-50"> 
              <div class="cartao ">
                  
              </div>
            </div>
          </div> <!-- Fim da row -->
    </div> <!-- Fim da container -->


  
    <div class="row mt-3">
    <div class="col d-flex justify-content-end">
        
        <!-- Button trigger modal -->
        <button type="button" class="btn text-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
         Sair do app >>
        </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja realmente sair? </h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Não</button>
                  <a href="../app/sair.php"><button type="button" class="btn btn-primary">Sim</button></a>
                </div>
              </div>
            </div>
          </div>
    </div>
    </div>

   


    <footer>
      <div class="row bg-primary mt-3">
        <p class="text-white text-center mt-3"> Gerimind - Seu remédio na hora certa </p>
      </div>
    </footer>


  </div> <!-- Final da div container-->
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>