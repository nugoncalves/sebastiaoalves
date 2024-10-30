<?php

$url = $_SERVER['REQUEST_URI']; //obtém o url
$url = explode('/', $url); //transforma num vector
$url = end($url); //obtém o último valor do vector
$url = substr($url, 0, strpos($url, ".")); //obtém o nome da página actual


?>

<header>
    <nav class="navbar navbar-expand-lg border border-bottom bg-light">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="">Sebastião Alves | BackOffice </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= ($url=='home') ? 'active': '' ?>" href="../views/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($url=='banners' || $url=='banner') ? 'active': '' ?>" href="../views/banners.php">Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($url=='livros' || $url =='livro') ? 'active': '' ?>" href="../views/livros.php">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($url=='blog') ? 'active': '' ?>" href="../views/blog.php">Imprensa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($url=='contactos') ? 'active': '' ?>" href="../views/contactos.php">Contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($url=='gestor_ficheiros') ? 'active': '' ?>" href="../views/gestor_ficheiros.php">Gestor de Ficheiros</a>
                    </li>
                </ul>              
                <form class="d-flex" role="log-out">
                    <a href="../views/user.php" class="btn btn-sm btn-outline-secondary mx-3"><i class="bi bi-person-circle"></i> <?= $_SESSION["user"]["nome"] ?></a>
                    <a href="../modules/login/logout.php" class="btn btn-sm btn-outline-danger"><i class="bi bi-box-arrow-left"></i> LOG OUT</a>
                </form>
            </div>
            
        </div>
    </nav>
</header>