<?php

    // Abre os ficheiros necessários
    require_once "../modules/config.php";
    require_once "../modules/sql.php";
    require_once "../modules/funcoes.php";

    sessionExists(); //Verifica se existe sessão, se não existe retornar para o index
    session_start(); //Inicia a Sessão para obter dados do Administrador
    $username = $_SESSION["user"]["nome"]; //Define o nome do Administrador

    //Obtém os dados SQL de Banners
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $banner = selectSQLUnico("SELECT * FROM banners WHERE id=$id");
    }

    $update = $_GET["update"]; // Estado do Update

?>

    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>

    <!-- CARREGA A NAVBAR -->
    <?php require "../components/navbar.php"; ?>

    <!-- COMEÇA O MAIN -->
    <main class="container justify-content-center">

        <form action="../modules/banner_update.php" method="post">

            <div class="col-12 d-flex align-items-center justify-content-end mt-5">
                <a href="../components/filemanager/index.php" onclick="window.open('../components/filemanager/index.php','newwindow','width=300,height=250'); return false;"class="btn btn-sm btn-outline-warning px-4 mx-1">Imagens</a>
                <button type="submit" class="btn btn-sm btn-outline-success px-4 mx-1">Gravar</button>
                <a href="../modules/banner_apagar.php?id=<?= $banner['id']; ?>" class="btn btn-sm btn-outline-danger px-4 mx-1">Apagar</a>
                <a href="../views/banners.php" class="btn btn-sm btn-outline-secondary px-4 mx-1">Voltar</a>
            </div>

            <div class="col-12 m-4">

                <div class="card mt-5">
                    
                <input type="hidden" name="id" value="<?= $id; ?>">

                <div class="card-header">
                    <h3><i class="bi bi-easel2"></i> <?= ($banner["id"]) ? $banner['titulo'] : "Novo Banner"; ?></h3>
                    <?= ($update) ? "<p class='text-success'>Gravado com sucesso</p>" : ""; ?>                        
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3 px-2">
                            <label class="form-label">Imagem Desktop</label>
                            <img src="<?= $banner['img_desktop'] ?>" alt="img desktop" width="100%">
                            <label class="form-label mt-5">Imagem Mobile</label>
                            <img src="<?= $banner['img_mobile'] ?>" alt="img mobile" width="100%">
                        </div>
                        <div class="col-md-8 ms-3">
                            <div class="col-2">
                                <label for="ordem" class="form-label">Ordem (*)</label>
                                <input type="number" class="form-control" name="inputOrdem" value="<?= $banner['pos']; ?>" min="1" required="required">
                            </div>

                            <div class="col-12 mt-5">
                                <label for="inputImagemDesktop" class="form-label">Link da Imagem Desktop (*)</label>
                                <input value="<?= $banner['img_desktop'] ?>" class="form-control" name="inputImagemDesktop" required="required">
                            </div>
                            <div class="col-12 mt-5">
                                <label for="inputImagemMobile" class="form-label">Link da Imagem Mobile (*)</label>
                                <input value="<?= $banner['img_mobile'] ?>" class="form-control" name="inputImagemMobile" required="required">
                            </div>
                            
                            <div class="mt-5">
                                <label for="inputChamada" class="form-label">Highlight Tag</label>
                                <input type="text" class="form-control" name="inputChamada" value="<?= $banner['chamada']; ?>">
                            </div>

                            <div class="mt-5">
                                <label for="inputTitulo" class="form-label">Título (*)</label>
                                <input type="text" class="form-control" name="inputTitulo" value="<?= $banner['titulo']; ?>" required="required">
                            </div>

                            <div class="mt-5">
                                <label for="inputSinopse" class="form-label">Sinopse</label>
                                <textarea class="form-control" placeholder="Lorem ipsum dolor sit amet [...]" name="inputSinopse" rows="4"><?= $banner['texto'] ?></textarea>
                            </div>

                            <div class="mt-5">
                                <label for="inputLink" class="form-label">Link</label>
                                <input type="text" class="form-control" name="inputLink" value="<?= $banner['link']; ?>">
                            </div>
                            
                        
                        </div> 
                    </div>
                </div>
                
                
            </div>

            <div class="col-12 d-flex align-items-center justify-content-end mt-5">
                <a href="../components/filemanager/index.php" onclick="window.open('../components/filemanager/index.php','newwindow','width=300,height=250'); return false;"class="btn btn-sm btn-outline-warning px-4 mx-1">Imagens</a>
                <button type="submit" class="btn btn-sm btn-outline-success px-4 mx-1">Gravar</button>
                <a href="../modules/banner_apagar.php?id=<?= $banner['id']; ?>" class="btn btn-sm btn-outline-danger px-4 mx-1">Apagar</a>
                <a href="../views/banners.php" class="btn btn-sm btn-outline-secondary px-4 mx-1">Voltar</a>
            </div>

        </form>
    </main>

    <!-- FOOTER -->
    <?php require "../components/footer.php"; ?>

</html>