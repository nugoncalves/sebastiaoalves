<?php 

require_once "./components/header.php";

// PAGINAÇÃO
//// Calcula o número de linhas da tabela
$rows_contacto = selectSQLUnico("SELECT Count(*) AS total_rows FROM blog")["total_rows"];
//// Estabelece o número de elementos por página
$rows_per_page = 2;
//// Calcula o número de páginas
$pages = ceil($rows_contacto/$rows_per_page);
//// Define o número da página, 1 por defeito
$current_page = (isset($_GET["page"])) ? $_GET["page"] : 1;
//// Botões de navegação
$next_page = $current_page + 1;
$previous_page = $current_page -1;

//// Carrega os dados para a tabela
$posts = selectSQL("SELECT * FROM blog ORDER BY data DESC LIMIT $rows_per_page OFFSET ". (($current_page-1)*$rows_per_page));

?>

<main>
    <!-- ÁREA BEM VINDO -->
    <div class="container-fluid">                
        <div class="row offset-md-1 bg-white p-3 mb-5 mb-sm-0 caixa-titulo" id="divInicial">
            <div class="col px-lg-5 pt-4">
                <h1 class="emphasis-text pt-2">Imprensa</h1>
                <h1 class="title-text">Últimas Notícias</h1>
            </div>
        </div>
    </div>

    <!-- ÁREA DE CONTEÚDOS -->
    <?php foreach ($posts as $k => $p): ?>
        <div class="container">            
            <div class="row article-box d-flex flex-column align-items-center justify-content-center">
                <div class="col-11 offset-md-1">
                    <h1 class="title-text imprensa-titulo"><?= $p["titulo"]; ?></h1>
                    <h1 class="imprensa-data">Publicado a 6 de Dezembro 2017"</h1>
                    <img src="<?= $p["img"]; ?>" alt="">
                    <p><?= $p["texto"]; ?></p>
                </div>
            </div>
        </div>
        <?php if($k == 0 && count($posts)>1): ?>
            <!-- SEPARADOR -->
            <div class="row imprensa-separador"></div>
        <?php endif; ?>
    <?php endforeach; ?>   

    <!-- PAGINADOR -->
    <div class="container text-center">
        <div class="row paginador">
            <div class="col-12">
                <?= ($current_page > 1) ? '<a href="imprensa.php?page='.$previous_page.'"'.'class="previous"></a>' : "" ?>
                <?php for($i=1; $i <= $pages; $i++): ?>
                    <a href="imprensa.php?page=<?= $i; ?>" class="<?= ($current_page==$i) ? "active" : "" ?>"><?= $i; ?></a>
                <?php endfor; ?>        
                <?= ($current_page < $pages) ? '<a href="imprensa.php?page='.$next_page.'"'.'class="next"></a>' : "" ?>

            </div>
            
        </div>
    </div>
    


</main>

<?php require_once "./components/footer.php" ; ?>
   