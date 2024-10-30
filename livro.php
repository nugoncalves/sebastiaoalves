
<?php 

    require_once "./components/header.php";
    
    $id = $_GET["livro"];
    
    if($id){
        $livro = selectSQLUnico("SELECT * FROM livros WHERE id=$id");
    }
    else{
        header("Location: index.php");
        exit();
    }

?>

<main>

    <!-- ÁREA BEM VINDO -->
    <div class="container-fluid">
        <div class="row bg-white p-3 caixa-titulo"  id="divInicial">
            <div class="col px-lg-5 pt-4">
                <h1 class="emphasis-text pt-2">Livros</h1>
                <h1 class="title-text"><?= $livro["titulo"]; ?></h1>
            </div>
        </div>
    </div>


    <!-- ÁREA DE CONTEÚDOS -->
    <div class="container">
        <div class="row d-flex justify-content-center justify-content-md-start mb-5">
            <div class="clearfix col-12 mt-3 mt-md-0 col-md-10 offset-md-1 text-lg-start">
                <img src="<?= $livro["img_principal"]; ?>" class="float-md-start mx-auto me-md-5 mb-5" alt="Imagem Autor">

                    <p><?= $livro["descricao"]; ?></p>
            </div>

            <div class="col-10 d-none d-md-block offset-md-1 text-sm-end mb-5">
                <button type="button" onclick="history.back()" class="btn rounded-0 more-button">Voltar Atrás</button>
            </div>
        </div>
    </div>
    
    


</main>

<?php require_once "./components/footer.php" ; ?>

