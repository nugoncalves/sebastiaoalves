<?php

    // Abre os ficheiros necessários
    require_once "../modules/config.php";
    require_once "../modules/sql.php";
    require_once "../modules/funcoes.php";

    sessionExists(); //Verifica se existe sessão, se não existe retornar para o index
    session_start(); //Inicia a Sessão para obter dados do Administrador
    $username = $_SESSION["user"]["nome"]; //Define o nome do Administrador para uso no FrontEnd
    $dadosPagina = selectSQLUnico("SELECT * FROM settings"); //Retorna os valores do SQL para a página

    $update=$_GET["update"];

?>

    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>

    <!-- CARREGA A NAVBAR -->
    <?php require "../components/navbar.php"; ?>

    <!-- COMEÇA O MAIN -->
    <main class="container justify-content-center">
        <div class="col-12 m-4">
            <form action="../modules/home_update.php" method="post">
                
                <!-- BOTÕES DE ACÇÃO -->
                <div class="col-12 mt-5 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-outline-success mx-2 px-4">Gravar</button>
                </div>

                <!-- INFO SOBRE UPDATE  -->
                <?php if($update): ?>
                    <div class="card my-3">
                        <div class="card-header py-3" style="background-color: #e3f2fd;">
                            <p class="text-success fw-bold"><?= ($update) ? "Sobre o Autor gravado com sucesso!": ""; ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    
                    
                <!-- ÁREA SOBRE O AUTOR -->
                <div class="card mt-5">
                    <div class="card-header py-3" style="background-color: #e3f2fd;">
                        <h5><i class="bi bi-card-text"></i> [Home Page] Sobre o Autor</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3">
                            <label class="form-label">Imagem</label>
                            <img src="<?= $dadosPagina['autor_img'] ?>" alt="" width="100%">
                        </div>
                        <div class="col-md-9">
                            <div class="col-12">
                                <label for="inputImagem" class="form-label">Link da Imagem</label>
                            </div>
                            <div class="row d-flex justify-content-between align-items-center mb-3">
                                <div class="col-9">
                                    <input value="<?= $dadosPagina['autor_img'] ?>" class="form-control" name="inputImagem">
                                </div>
                                <div class="col-auto">
                                    <a href="../components/filemanager/index.php" onclick="window.open('../components/filemanager/index.php','newwindow','width=300,height=250'); return false;"class="btn btn-outline-warning m-3 px-4">Imagem</a>
                                </div>
                            </div>
                            
                            <label for="inputTxtAutor" class="form-label">Texto sobre o Autor</label>
                            <textarea class="form-control" id="editor" placeholder="Lorem ipsum dolor sit amet [...]" name="inputTxtAutor"><?= $dadosPagina['autor_descricao'] ?></textarea>
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

                <!-- ÁREA ÚLTIMOS LIVROS -->
                <div class="card mt-5">
                    <div class="card-header py-3" style="background-color: #e3f2fd;">
                        <h5><i class="bi bi-card-text"></i> [Home Page] Últimos Livros</h5>
                    </div>
                    <div class="card-body">
                        
                            <label for="inputTxtUltLivros" class="form-label">Últimos Livros</label>
                            <textarea class="form-control" id="editorLivros" placeholder="Lorem ipsum dolor sit amet [...]" name="inputTxtUltLivros"><?= $dadosPagina['ultimosLivros'] ?></textarea>
                            <script>
                                ClassicEditor
                                .create( document.querySelector( '#editorLivros' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                                </script>

                            </div>
                        </div> 
                    </div>
                </div>
                
                <!-- BOTÕES DE ACÇÃO -->
                <div class="col-12 my-5 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-outline-success mx-2 px-4">Gravar</button>
                </div>
                
            </form>
        </div>

    </main>


    <!-- FOOTER -->
    <?php require "../components/footer.php"; ?>


</html>