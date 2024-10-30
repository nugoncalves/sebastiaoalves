<?php

    // Abre os ficheiros necessários
    require_once "../modules/config.php";
    require_once "../modules/sql.php";
    require_once "../modules/funcoes.php";

    sessionExists(); //Verifica se existe sessão, se não existe retornar para o index

    session_start(); //Inicia a Sessão para obter dados do Administrador

    $username = $_SESSION["user"]["nome"]; //Define o nome do Administrador para uso no FrontEnd

?>

    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>

    <!-- CARREGA A NAVBAR -->
    <?php require "../components/navbar.php"; ?>

    <!-- COMEÇA O MAIN -->
    <main class="container justify-content-center">
        <div class="row">
            <div class="col-12 mt-5">
                <?php require "../components/filemanager/index.php"; ?>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <?php require "../components/footer.php"; ?>


</html>