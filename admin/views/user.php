<?php

    // Abre os ficheiros necessários
    require_once "../modules/config.php";
    require_once "../modules/sql.php";
    require_once "../modules/funcoes.php";

    sessionExists(); //Verifica se existe sessão, se não existe retornar para o index

    // Guarda os dados do Administrador
    session_start();
    $userID = $_SESSION["user"]["id"];

    //Obtém os dados SQL de Livros
    $user = selectSQLUnico("SELECT * FROM users WHERE id='$userID'");
    $sessions = selectSQL("SELECT * FROM logs WHERE id_user='$userID' AND tabela='session' ORDER BY data DESC LIMIT 6");
    $logs = selectSQL("SELECT * FROM logs WHERE id_user='$userID' AND tabela!='session' ORDER BY data DESC LIMIT 20");

    //Obtém os códigos de erro e update
    $update = $_GET["update"];
    $erro = $_GET["erro"];


?>


    
    <!-- CARREGA O <head> -->
    <?php require "../components/head.php"; ?>

        
        <!-- CARREGA O HEADER COM NAVBAR -->
        <?php require "../components/navbar.php"; ?>

        <!-- COMEÇA O MAIN -->
        <main class="container justify-content-center">

        <div class="row">

            <div class="col-5">
                <form action="../modules/user_update.php" method="post">                   
                    <input type="hidden" class="form-control" name="action" value="dados">
                    <div class="card mt-5">
                        <div class="card-header py-3" style="background-color: #e3f2fd;">
                            <h5><i class="bi bi-person-circle"></i> <?= $user["nome"] ?></h5>
                            <?= ($update == 1) ? "<p class='text-success'>Dados do Utilizador alterados com sucesso</p>" : ""; ?>                        
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div>
                                    <label for="inputNome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="inputNome" value="<?= $user["nome"]; ?>">
                                </div>
                                <div>
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="inputEmail" value="<?= $user["email"]; ?>">
                                </div>
                            </div>
                            <div class="col-12 my-4 d-flex justify-content-end">
                                <button class="btn btn-sm btn-outline-success mx-2 px-4">Alterar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="../modules/user_update.php" method="post">                   
                    <input type="hidden" class="form-control" name="action" value="password">

                    <div class="card mt-5">
                        <div class="card-header py-3" style="background-color: #e3f2fd;">
                            <h5><i class="bi bi-key"></i> Alterar Password</h5>
                            <?= ($update == 2) ? "<p class='text-success'>Password alterada com sucesso</p>" : ""; ?>                        
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-3">
                                    <label for="inputPassActual" class="col-form-label">Actual</label>
                                </div>
                                <div class="col">
                                    <input type="password" name="inputPassActual" class="form-control" aria-labelledby="passwordHelpInline">
                                </div>
                                <?= ($erro == 2) ? "<p class='text-danger'>Password actual não corresponde</p>" : ""; ?>                        
                            
                            </div>
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-3">
                                    <label for="inputPassNova" class="col-form-label">Nova</label>
                                </div>
                                <div class="col">
                                    <input type="password" name="inputPassNova" class="form-control" aria-labelledby="passwordHelpInline">
                                </div>
                                
                            </div>
                            <div class="row g-3 align-items-center mb-3">
                                <div class="col-3">
                                    <label for="inputPassCheck" class="col-form-label">Confirmar</label>
                                </div>
                                <div class="col">
                                    <input type="password" name="inputPassCheck" class="form-control" aria-labelledby="passwordHelpInline">
                                </div>
                                <?= ($erro == 1) ? "<p class='text-danger'>As novas passwords não correspondem</p>" : ""; ?>                        
                                
                            </div>
                            <div class="col-12 my-4 d-flex justify-content-end">
                                <button class="btn btn-sm btn-outline-success mx-2 px-4">Alterar</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
            <div class="col-7">
                <div class="card my-5">
                    <div class="card-header py-3" style="background-color: #e3f2fd;">
                        <h5><i class="bi bi-braces-asterisk"></i></i> Sessões [últimas 6]</h5>
                    </div>


                    <table class="table table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Data e Hora</th>
                                <th scope="col">Registo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($sessions as $s): ?>
                                
                                <tr>
                                    <td><?= $s["data"]; ?></td>
                                    <td><?= $s["titulo"]; ?></td>
                                </tr>
                                
                            <?php endforeach; ?>    
                        </tbody>
                    </table>

                </div>

                <div class="card my-5">
                    <div class="card-header py-3" style="background-color: #e3f2fd;">
                        <h5><i class="bi bi-braces-asterisk"></i> Log de Acções [últimas 20]</h5>
                    </div>


                    <table class="table table-hover mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Data e Hora</th>
                                <th scope="col">Tabela</th>
                                <th scope="col">Acção</th>
                                <th scope="col">Registo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($logs as $l): ?>
                                
                                <tr>
                                    <td><?= $l["data"]; ?></td>
                                    <td><?= $l["tabela"]; ?></td>
                                    <td><?= $l["tipo"]; ?></td>
                                    <td><?= $l["titulo"]; ?></td>
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