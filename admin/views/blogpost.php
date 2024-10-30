<?php

    // Abre os ficheiros necessários
    require_once "../modules/config.php";
    require_once "../modules/sql.php";
    require_once "../modules/funcoes.php";

    sessionExists(); //Verifica se existe sessão, se não existe retornar para o index

    // Guarda os dados do Administrador
    session_start();
    $username = $_SESSION["user"]["nome"];

    //Obtém os dados SQL de Livros
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $post = selectSQLUnico("SELECT * FROM blog WHERE id=$id");
    }

    $update = $_GET["update"];


?>


    
    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>

        
        <!-- CARREGA O HEADER COM NAVBAR -->
        <?php require "../components/navbar.php"; ?>

        <!-- COMEÇA O MAIN -->
        <main class="container justify-content-center">
            
            <form action="../modules/blogpost_update.php" method="post">

                <div class="col-10 d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-sm btn-outline-success mx-2 px-4">Gravar</button>
                    <a href="../modules/blogpost_apagar.php?id=<?= $post['id']; ?>" class="btn btn-sm btn-outline-danger mx-2 px-4">Apagar</a>
                    <a href="../views/blog.php" class="btn btn-sm btn-outline-secondary mx-2 px-4">Voltar</a>
                </div>

                <div class="col-10 m-4">

                    <div class="card mt-5">
                        
                        <input type="hidden" name="id" value="<?= $id; ?>">

                        <div class="card-header">
                            <h3><?= ($post["id"]) ? $post['titulo'] : "Novo Post"; ?></h3>
                            <?= ($update) ? "<p class='text-success'>Gravado com sucesso</p>" : ""; ?>                        
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-3 px-2">
                                    <label class="form-label">Imagem</label>
                                    <img src="<?= $post['img'] ?>" alt="" width="100%">
                                </div>
                                <div class="col-md-8 ms-3">
                                    <div class="col-12">
                                        <label for="inputImagem" class="form-label">Link da Imagem</label>
                                    </div>
                                    <div class="row d-flex justify-content-between align-items-center mb-3">
                                        <div class="col-9">
                                            <input value="<?= $post['img'] ?>" class="form-control" name="inputImagem">
                                        </div>
                                        <div class="col-auto">
                                            <a href="../components/filemanager/index.php" onclick="window.open('../components/filemanager/index.php','newwindow','width=300,height=250'); return false;"class="btn btn-outline-warning m-3 px-4">Substituir</a>
                                        </div>
                                    </div>

                                    <div class="row d-flex align-items-end">
                                        <div class="col-4">
                                            <label for="data" class="form-label">Data (*)</label>
                                            <input type="date" class="form-control" name="inputData" value="<?= $post['data']; ?>" required="required">
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <label for="inputTitulo" class="form-label">Título (*)</label>
                                        <input type="text" class="form-control" name="inputTitulo" value="<?= $post['titulo']; ?>" required="required">
                                    </div>
                                    <div class="mt-5">
                                        <label for="inputTexto" class="form-label">Texto</label>
                                        <textarea class="form-control" id="editor" placeholder="Lorem ipsum dolor sit amet [...]" name="inputTexto"><?= $post['texto'] ?></textarea>
                                        <script>
                                            ClassicEditor
                                            .create( document.querySelector( '#editor' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                        </script>
                                    </div>
                                
                                
                                </div> 
                            </div>
                        </div>
                    </div>                 
                </div>
                
                <div class="col-10 d-flex justify-content-end my-5">
                    <button type="submit" class="btn btn-sm btn-outline-success mx-2 px-4">Gravar</button>
                    <a href="../modules/blogpost_apagar.php?id=<?= $post['id']; ?>" class="btn btn-sm btn-outline-danger mx-2 px-4">Apagar</a>
                    <a href="../views/blog.php" class="btn btn-sm btn-outline-secondary mx-2 px-4">Voltar</a>
                </div>
                
            </form>

        </main>

    <!-- FOOTER -->
    <?php require "../components/footer.php"; ?>
        

    <!-- BOOTSTRAP SCRIPT -->
    <?php require "../components/bs_script.php"; ?>

</html>
