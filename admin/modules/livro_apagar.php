<?php

    // Abre os ficheiros necessários
    require_once "config.php";
    require_once "sql.php";
    require_once "funcoes.php";

    sessionExists(); //Verifica se existe sessão, se não existe retornar para o index

    // Guarda os dados do Administrador
    session_start();
    $user = $_SESSION["user"]["id"];

    //Obtém os dados SQL de Livros
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $livro = selectSQLUnico("SELECT * FROM livros WHERE id=$id");
    }

    if(isset($_POST["id"])){
        $id=$_POST["id"];
        iduSQL("DELETE FROM livros WHERE id=$id");
        saveLog($user, 'delete', 'livros', $titulo);
        header("Location: ../views/livros.php");
        exit();
    }

?>


    
    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>

        
        <!-- CARREGA O HEADER COM NAVBAR -->
        <?php require "../components/navbar.php"; ?>

        <!-- COMEÇA O MAIN -->
        <main class="container">
            
            <form method="post">
                <div class="col-10 m-4">
                    
                    <div class="card mt-5">
                        
                    <input type="hidden" name="id" value="<?= $id; ?>">

                    <div class="card-header">
                        <p class='text-danger'>Tem a certeza que quer apagar o livro?</p>                     
                        <h3><?= $livro["titulo"]; ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3 px-2">
                                <label class="form-label">Imagem</label>
                                <img src="<?= $livro['img_principal'] ?>" alt="" width="100%">
                            </div>
                            <div class="col-md-8 ms-3">
                                <div class="mt-5">
                                    <label for="inputTitulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" name="inputTitulo" value="<?= $livro['titulo']; ?>">
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    
                </div>
                
                <div class="col-12 d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-sm btn-outline-danger mx-2 px-4">Confirmar</button>
                    <a href="../views/livros.php" class="btn btn-sm btn-outline-secondary mx-2 px-4">Cancelar</a>
                </div>
                
            </form>

        </main>

    <!-- FOOTER -->
    <?php require "../components/footer.php"; ?>
        
    </body>

    <!-- BOOTSTRAP SCRIPT -->
    <?php require "../components/bs_script.php"; ?>

</html>