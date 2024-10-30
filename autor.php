
<?php 
    require_once "./components/header.php";

    $settings = selectSQLUnico("SELECT * FROM settings");

?>

<main class="container-fluid">

    <!-- ÁREA BEM VINDO -->

    <div class="row offset-md-1 bg-white p-3 caixa-titulo"  >
        <div class="col px-lg-5 pt-4" id="divInicial">
            <h1 class="emphasis-text pt-2">Autor</h1>
            <h1 class="title-text">Sobre mim</h1>
        </div>
    </div>


    <!-- ÁREA DE CONTEÚDOS -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 d-flex flex-column align-items-center justify-content-center">
                <div class="col-12 col-sm-6 col-lg-4 my-5 my-lg-5">
                    <img src="<?= $settings["autor_img"]; ?>" width="100%" alt="Imagem Autor">
                </div>
                <div id="autorTXT">
                    <p><?= $settings["autor_descricao"]; ?></p>
                </div>                 
            </div>
        </div>
        <div class="row">
            <div id="autorVerMais" class="col-12 d-flex justify-content-center mt-3 d-none">
                <button type="button" onclick="autorTxtMostrar()" id="btn-autorVerMais" class="more-button">Mostrar Mais</button>
            </div>
            <div class="col-12 d-flex justify-content-center justify-content-md-start offset-md-1 button-more-area autor-voltar">
                <button type="button" onclick="history.back()" class="more-button">Voltar Atrás</button>
            </div>
        </div>
    </div>

</main>

<script src="js/autor.js"></script>

<?php require_once "./components/footer.php" ; ?>
