<?php

    // Abre os ficheiros necessários
    require_once "../modules/config.php";
    require_once "../modules/sql.php";
    require_once "../modules/funcoes.php";
    
    $update = $_GET["update"];

    sessionExists(); //Verifica se existe sessão, se não existe retornar para o index

    session_start(); //Inicia a Sessão para obter dados do Administrador

    $username = $_SESSION["user"]["nome"]; //Define o nome do Administrador para uso no FrontEnd
    $dadosPagina = selectSQLUnico("SELECT * FROM settings"); //Retorna os valores do SQL para a página home
    

?>

    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>



    <!-- CARREGA O HEADER COM NAVBAR -->
    <?php require "../components/navbar.php"; ?>

    <!-- COMEÇA O MAIN -->
    <main class="container justify-content-center">

        <div class="col-12 mt-5 m-4">
            <?php if($update): ?>
                <div class="card mb-3">
                    <div class="card-header py-3" style="background-color: #e3f2fd;">
                        <p class="text-success fw-bold"><?= ($update) ? "Contactos gravados com sucesso!": ""; ?></p>
                    </div>
                </div>
            <?php endif; ?>


            <form action="../modules/contactos_update.php" method="post">

                <div class="col-12 my-5 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-outline-success mx-2 px-4">Gravar</button>
                </div>
                <div class="card">
                    <div class="card-header py-3" style="background-color: #e3f2fd;">
                        <h5><i class="bi bi-person-vcard"></i> Contactos</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12 mb-3">
                                <label for="inputMorada" class="form-label">Morada</label>
                                <textarea class="form-control" id="editor" placeholder="e.g. Rua, Av. Pcta, etc." name="inputMorada" value="<?= $dadosPagina['morada'] ?>"><?= $dadosPagina['morada'] ?></textarea>
                                <script>
                                    ClassicEditor
                                    .create( document.querySelector( '#editor' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                                </script>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" name="inputEmail" value="<?= $dadosPagina['email'] ?>" placeholder="exemplo@exemplo.pt">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTelefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" name="inputTelefone" value="<?= $dadosPagina['telefone'] ?>" placeholder="(+351) 999 999 999">
                            </div>
                            
                        </div> 
                    </div>
                </div>
                
                <div class="card mt-5">
                    <div class="card-header py-3" style="background-color:#e3f2fd;">
                        <h5><i class="bi bi-mic-fill"></i></i> Redes Sociais</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12 input-group mb-3">                        
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-facebook"></i></span>
                                <input type="text" class="form-control" name="inputFacebook" aria-label="Username" aria-describedby="basic-addon1" value="<?= $dadosPagina['facebook_link'] ?>">
                            </div>
                            <div class="col-12 input-group mb-3">                        
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-instagram"></i></span>
                                <input type="text" class="form-control" name="inputInstagram" aria-label="Username" aria-describedby="basic-addon1" value="<?= $dadosPagina['instagram_link'] ?>">
                            </div>
                            <div class="col-12 input-group mb-3">                        
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-linkedin"></i></span>
                                <input type="text" class="form-control" name="inputLinkedin" aria-label="Username" aria-describedby="basic-addon1" value="<?= $dadosPagina['linkedin_link'] ?>">
                            </div>
                            
                        </div> 
                    </div>
                </div>
                
                <div class="col-12 my-5 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-outline-success mx-2 px-4">Gravar</button>
                </div>
            </form>
                        
        </div>

    </main>


    <!-- FOOTER -->
    <?php require "../components/footer.php"; ?>

    <!-- BOOTSTRAP SCRIPT -->
    <?php require "../components/bs_script.php"; ?>

</html>