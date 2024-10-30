<?php

    $login = isset($_GET["login"]); //verifica se o login é inválido para retornar mensagem de erro

    session_start();
    if(!empty($_SESSION["user"])){
        header("Location: views/home.php");
        exit();
    }

?>


<!DOCTYPE html>
<html lang="pt">
    
    <!-- HEAD -->
    <head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sebastião Alves | BackOffice</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


        <!-- STYLE PERSONALIZADO -->
        <link rel="stylesheet" href="css/log-in-style.css">

    </head>


    <body>
   
            <div class="container-fluid">
                <div class="row index-form d-flex justify-content-center align-items-center">
                    <nav class="navbar navbar-expand-lg fixed-top bg-light bg-opacity-75 m-0">
                        <div>
                            <a class="navbar-brand ms-5" href="#">Sebastião Alves | BackOffice </a>                    
                        </div>
                    </nav>
                
                <div class="col-3 border rounded bg-white bg-opacity-75 p-5 m-3"> <!-- Abre o Form de Login -->                   
                    
                    <h3 class="mb-3 text-center">Login</h3>   <!-- Título da caixa de Login -->

                    <?php if($login == "fail") : ?>

                        <p class="text-danger">Login Inválido. Tente de Novo.</p>

                    <?php endif; ?>
                    
                    <form action="modules/login/login.php" method="POST"> 

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" aria-describedby="emailHelp" required="required">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required="required">
                        </div>

                        <div class="d-flex justify-content-around">
                            <button type="submit" class="px-5 mt-3 btn btn-success">ENTRAR</button>
                        </div>

                    </form>
                </div> <!-- div form user end -->


            </div> <!-- div 1st row end -->

        </div> <!-- div container end -->
        
    </body>
</html>