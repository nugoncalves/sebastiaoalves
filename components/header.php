<?php

require_once "admin/modules/config.php";
require_once "admin/modules/sql.php";
require_once "admin/modules/funcoes.php";

$banners = selectSQL("SELECT * FROM banners");
$livros = selectSQL("SELECT id, titulo FROM livros");

$url = $_SERVER['REQUEST_URI']; //obtém o url
$url = explode('/', $url); //transforma num vector
$url = end($url); //obtém o último valor do vector
$url = substr($url, 0, strpos($url, ".")); //obtém o nome da página actual

$livroActivo = $_GET["livro"];


?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sebastião Alves</title>


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.css">

  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="./css/style.css">

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


</head>

<body>


  <header class="position-relative">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators mb-lg-5 d-flex justify-content-start">
        <?php foreach ($banners as $b): ?>
          <button type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="<?= ($b["pos"] - 1); ?>"
            <?= ($b["pos"] - 1 == 0) ? 'class="active" aria-current="true"' : '' ?>
            aria-label="Slide <?= $b["pos"]; ?>">
          </button>
        <?php endforeach; ?>
      </div>
      <div class="carousel-inner">
        <?php foreach ($banners as $b): ?>
          <div class="carousel-item <?= ($b["pos"] - 1 == 0) ? 'active' : '' ?>">
            <picture>
              <source media="(min-width:992px)" srcset="<?= $b["img_desktop"] ?>">
              <img src="<?= $b["img_mobile"] ?>" alt="" class="d-block w-100">
            </picture>

            <div class="col col-lg-5 mb-lg-5 carousel-caption text-start">
              <h5 class="emphasis-text"><?= $b["chamada"] ?></h5>
              <h5 class="caroussel-title"><?= $b["titulo"] ?></h5>
              <p class="caroussel-text"><?= $b["texto"] ?></p>
              <a href="<?= $b["link"] ?>" class="more-button">Saber Mais</a>
            </div>
          </div>

        <?php endforeach; ?>

        <!-- NAVBAR E TÍTULO DA PÁGINA -->
        <div class="container-fluid position-absolute top-0 menu">
          <div class="row align-items-center mt-5">
            <div class="col-6 col-lg-12 text-start text-lg-center mb-lg-2">
              <a class="navbar-brand d-block" href="index.php">SEBASTIÃO ALVES</a>
            </div>
            <div class="col-6 d-block d-lg-none text-end">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>

            <div class="col-12 separador"></div>

            <nav class="navbar navbar-expand-lg">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
                  <li class="nav-item">
                    <a class="nav-link <?= ($url == 'index') ? 'active' : '' ?>" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($url == 'autor') ? 'active' : '' ?>" href="autor.php">Autor</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link <?= ($url == 'livro') ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Livros
                    </a>
                    <ul class="dropdown-menu" id="menuLivros">
                      <?php foreach ($livros as $l): ?>
                        <li><a class="dropdown-item <?= ($livroActivo == $l["id"]) ? 'active' : '' ?>" href="livro.php?livro=<?= $l["id"]; ?>"><?= $l["titulo"]; ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($url == 'imprensa') ? 'active' : '' ?>" href="imprensa.php">Imprensa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($url == 'contactos') ? 'active' : '' ?>" href="contactos.php">Contactos</a>
                  </li>
                </ul>
              </div>
            </nav>

          </div>
        </div>

  </header> <!-- FIM DO HEADER -->