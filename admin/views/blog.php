<?php

    // Abre os ficheiros necessários
    require_once "../modules/config.php";
    require_once "../modules/sql.php";
    require_once "../modules/funcoes.php";

    sessionExists(); //Verifica se existe sessão, se não existe retornar para o index
    session_start(); //Inicia a Sessão para obter dados do Administrador
    $username = $_SESSION["user"]["nome"]; //Define o nome do Administrador para uso no FrontEnd

    //Obtém os dados SQL de Banners
    $posts = selectSQL("SELECT * FROM blog ORDER BY data DESC");

?>

    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>

    <!-- CARREGA A NAVBAR -->
    <?php require "../components/navbar.php"; ?>

    <!-- COMEÇA O MAIN -->
    <main class="container">
        
            <div class="row">
                <div class="col-12 mt-5 d-flex justify-content-end">
                    <a href="blogpost.php" type="submit" class="btn btn-sm btn-outline-success mx-2 px-4">Novo Post</a>
                </div>
            </div>
            <div class="row">
                 <div class="col-12">
                    <div class="card my-5">
                        <div class="card-header py-3" style="background-color: #e3f2fd;">
                            <h5><i class="bi bi-newspaper"></i> Imprensa</h5>
                        </div>
                        
                        
                        <table class="table table-hover mt-4">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Data</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col" class="text-center">Img</th>
                                    <th scope="col" class="text-center">Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($posts as $p): ?>
                                
                                <tr>
                                    <td class="text-center"><?= $p["data"]; ?></td>
                                    <td><?= $p["titulo"]; ?></td>
                                    <td class="text-center"><img src="<?= $p["img"]; ?>" height="50px"></td>
                                    <td class="text-center">
                                        <a href="blogpost.php?id=<?= $p['id']; ?>" class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></a>
                                        <a href="../modules/blogpost_apagar.php?id=<?= $p['id']; ?>" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
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