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
    $livros = selectSQL("SELECT * FROM livros ORDER BY pos ASC");
    $destaques = selectSQL("SELECT COUNT(*) AS destaque FROM livros WHERE destaque='1'"); //Retorna o número de destaques
    $numDestaques = $destaques[0]["destaque"];

?>


    
    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>

        
        <!-- CARREGA O HEADER COM NAVBAR -->
        <?php require "../components/navbar.php"; ?>

        <!-- COMEÇA O MAIN -->
        <main class="container justify-content-center">
            <div class="row">
                <div class="col-12 mt-5 d-flex justify-content-end">
                    <a href="livro.php" type="submit" class="btn btn-sm btn-outline-success mx-2 px-4">Novo Livro</a>
                </div>
            </div>

            <div class="card my-5">
                <div class="card-header py-3" style="background-color: #e3f2fd;">
                    <h5><i class="bi bi-person-vcard"></i> Livros</h5>
                    <?php if($numDestaques > 3): ?>
                        <p class="text-danger">Existem <?= $numDestaques; ?> livros destacados. Só irão aparecer os 3 primeiros.</p>
                    <?php endif; ?>
                </div>


                <table class="table table-hover mt-4">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Ordem</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Chamada</th>
                            <th scope="col" class="text-center">Destaque</th>
                            <th scope="col" class="text-center">Img Principal</th>
                            <th scope="col" class="text-center">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($livros as $l): ?>
                            
                            <tr>
                                <td class="text-center"><?= $l["id"]; ?></td>
                                <td class="text-center"><?= $l["pos"]; ?></td>
                                <td><?= $l["titulo"]; ?></td>
                                <td><?= $l["chamada"]; ?></td>
                                <td class="text-center">
                                    <a href="../modules/livro_destaque.php?id=<?= $l['id']; ?>"
                                        <?= ($l["destaque"]) ?
                                            'class="btn btn-sm btn-warning"><i class="bi bi-star-fill"></i>' : 
                                            'class="btn btn-sm btn-outline-secondary"><i class="bi bi-star"></i>';
                                        ?>
                                    </a>
                 
                                </td>
                                <td class="text-center"><img src="<?= $l["img_principal"]; ?>" height="50px"></td>
                                <td class="text-center">
                                    <a href="livro.php?id=<?= $l["id"]; ?>" class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></a>
                                    <a href="../modules/livro_apagar.php?id=<?= $l['id']; ?>" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            
                        <?php endforeach; ?>    
                    </tbody>
                </table>

            </div>

            <!-- <div class="col-12 my-5 d-flex justify-content-end">
                <a href="livro.php" type="submit" class="btn btn-success mx-2 px-4">Novo Livro</a>
            </div> -->


        </main>

    <!-- FOOTER -->
    <?php require "../components/footer.php"; ?>


</html>