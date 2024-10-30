<?php
    require_once "./components/header.php";
    
    $settings = selectSQLUnico("SELECT * FROM settings");    
?>

<main>
    <!-- TÍTULO DA ÁREA -->
    <div class="container-fluid">                
        <div class="row offset-md-1 bg-white p-3 caixa-titulo" id="divInicial">
            <div class="col px-lg-5 pt-4">
                <h1 class="emphasis-text pt-2">Contactos</h1>
                <h1 class="title-text">Pode Contactar-me através do e-mail ou telefone</h1>
            </div>
        </div>
    </div>

    <!-- ÁREA DE CONTEÚDOS -->

    <div class="container text-center my-5">
        
        <div class="row d-flex justify-content-evenly">
            <div class="col-12 col-sm-3 mb-5">
                <h3 class="footer-sub-title">Telefone</h3>
                <p><?= $settings["telefone"]; ?></p>
            </div>
            <div class="col-12 col-sm-3 mb-5">
                <h3 class="footer-sub-title">Morada</h3>
                <p><?= $settings["morada"]; ?></p>
            </div>
            <div class="col-12 col-sm-3 mb-5">
                <h3 class="footer-sub-title">Email</h3>
                <p><?= $settings["email"]; ?></p>
            </div>
        </div>
        <div class="row mx-auto contactos-separador"></div>
        <div class="row justify-content-center">
            <div class="col-12 p-4">
                <h3 class="footer-sub-title mt-3">Horário</h3>
                <p>
                    De segunda a sexta das 0:00h às 00:ooh
                </p>
            </div>
        </div>
    </div>

</main>

<?php require_once "./components/footer.php" ; ?>
 