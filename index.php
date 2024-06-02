<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Gerimind</title>
</head>
<body>
    
<main>

    <div class="container">

    <div class="logo-login">
        <img src="./assets/img/logo_login.png" alt="">
    </div>
   
    <div class="logo-form d-flex justify-content-center">
        <div class="row container">
            <form action="./app/testLogin.php" method="post">

                <div class="mb-3">
                    <input type="text" class="form-control border border-primary" name="emailusuario" placeholder="Email ">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control border border-primary" name="senha" placeholder="Senha">
                </div>

                    <div class="d-flex justify-content-center">
                    <input class="inputSubmit btn btn-primary btn-lg" type="submit" name="submit" value="ENTRAR">
                    </div>

            </form>
            
            <div class="container">
                <div class="row mt-4">
                    <div class="col d-flex align-items-center flex-column">
                        <h2 class="text-secondary text-center mt-4"> Ainda não é cadastrado? </h2>
                        <a href="./sections/cadastrar-usuario.php">
                            <button class="btn btn-primary btn-lg mt-2"> CADASTRE-SE </button>
                        </a>
                    </div>
                </div> <!-- fIM da row mt-4-->
            </div>

        </div><!-- fIM da row-->
    </div><!-- Final do logo-form-->

    </div> <!-- Final container -->
    <footer class="folga"></footer>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
