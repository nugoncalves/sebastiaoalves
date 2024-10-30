
    <?php 
        
        require_once "components/header.php";

        $settings = selectSQLUnico("SELECT * FROM settings");
        $autorDescricaoReduced = substr($settings["autor_descricao"], 0, 1000)." [...]";
        $destaques = selectSQL("SELECT * FROM livros WHERE destaque='1' ORDER BY pos ASC");
        
    ?>

        <!-- CONTEÚDO -->
        
        <main class="container-fluid">

            <!-- ÁREA BEM VINDO -->

          <div class="row offset-xl-1 px-lg-3 bg-white caixa-titulo d-flex justify-content-center">
                <div class="col-11 col-sm-4 col-lg-3 p-4 mt-5 my-lg-5">
                    <img src="<?= $settings["autor_img"]; ?>" width=100% alt="">
                </div>
                <div class="col-11 col-sm-6 col-lg-7 p-4 m-lg-5">
                    <h1 class="title-text mb-4">Bem vindo ao meu Website</h1>
                    <p><?= $autorDescricaoReduced; ?></p>
                    <div class="mt-5 d-flex justify-content-center justify-content-lg-end mx-5">
                        <a href="autor.php" class="more-button">Saber Mais</a>
                    </div>
                </div>
            </div>

            <!-- ÁREA DESTAQUES LIVROS -->

            <!-- ÁREA DESTAQUES TEXTO -->
            <div class="container">               
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-11 mb-4 title-text">
                        Últimos Livros
                    </div>
               
                    <div class="col-11 mb-5">
                      <p><?= $settings["ultimosLivros"]; ?></p>
                    </div>
                </div>
            </div>

            <!-- ÁREA CARDS LIVROS -->
	    <div class="container">   
              <div class="row justify-content-around card-area">
                <?php for($i=0; $i<3; $i++): ?>
                    <div class="col-10 col-lg-3 mb-3 card">
                        <img src="<?= $destaques[$i]["img_principal"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="emphasis-text"><?= $destaques[$i]["chamada"]; ?></h5>
                            <h5 class="card-title-text"><?= $destaques[$i]["titulo"]; ?></h5>
                            <p class="card-text"><?= substr($destaques[$i]["descricao"], 0, 255)." [...]"; ?></p>
                            <div class="d-flex justify-content-end my-3">
                                <a href="livro.php?livro=<?= $destaques[$i]["id"] ;?>" class="more-button">Saber Mais</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>

	    </div>

        </main>

        <?php require_once "./components/footer.php" ; ?>
