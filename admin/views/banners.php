<?php

    // Abre os ficheiros necessários
    require_once "../modules/config.php";
    require_once "../modules/sql.php";
    require_once "../modules/funcoes.php";

    sessionExists(); //Verifica se existe sessão, se não existe retornar para o index
    session_start(); //Inicia a Sessão para obter dados do Administrador
    $username = $_SESSION["user"]["nome"]; //Define o nome do Administrador para uso no FrontEnd

    //Obtém os dados SQL de Banners
    $banners = selectSQL("SELECT * FROM banners ORDER BY pos ASC");

?>

    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>

    <!-- CARREGA A NAVBAR -->
    <?php require "../components/navbar.php"; ?>

    <!-- COMEÇA O MAIN -->
    <main class="container">
        
            <div class="row">
                <div class="col-12 mt-5 d-flex justify-content-end">
                    <a href="banner.php" type="submit" class="btn btn-sm btn-outline-success mx-2 px-4">Novo Banner</a>
                </div>
            </div>
            
            <div class="row">
                 <div class="col-12">
                    <div class="card my-5">
                        <div class="card-header py-3" style="background-color: #e3f2fd;">
                            <h5><i class="bi bi-easel2"></i> Banners</h5>
                        </div>
                        
                        
                        <table class="table table-hover mt-4">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Ordem</th>
                                    <th scope="col">Chamada</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col" class="text-center">Desktop</th>
                                    <th scope="col" class="text-center">Mobile</th>
                                    <th scope="col" class="text-center">Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($banners as $b): ?>
                                
                                <tr>
                                    <td class="text-center"><?= $b["pos"]; ?></td>
                                    <td><?= $b["chamada"]; ?></td>
                                    <td><?= $b["titulo"]; ?></td>
                                    <td class="text-center"><img src="<?= $b["img_desktop"]; ?>" height="50px"></td>
                                    <td class="text-center"><img src="<?= $b["img_mobile"]; ?>" height="50px"></td>
                                    <td class="text-center">
                                        <a href="banner.php?id=<?= $b['id']; ?>" class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></a>
                                        <a href="../modules/banner_apagar.php?id=<?= $b['id']; ?>" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                
                                <?php endforeach; ?>    
                            </tbody>
                        </table>
                    </div>
                </div>                      
            </div>
    </main>

    <!-- FOOTER -->
    <?php require "../components/footer.php"; ?>

</html>