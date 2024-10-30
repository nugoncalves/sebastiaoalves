<?php

// Abre os ficheiros necessários
require_once "../config.php";
require_once "../sql.php";
require_once "../funcoes.php";

$form = isset($_POST["username"]) && isset($_POST["password"]); // verifica se todos os campos foram preenchidos

// Se todos os campos foram preenchidos
if ($form) {

    $user = signIn($_POST["username"], $_POST["password"]);

    if (!empty($user)) {
        session_start(); //dá inicio da uma sessão
        $_SESSION["user"] = $user; // Guarda o objecto para a sessão
        unset($_SESSION["user"]["password"]); //apagar o valor da password          
        header("Location: /admin/views/home.php"); // Vai para a home page em caso de sucesso no login
        exit();
    } else {
        header("Location: /admin/index.php?login=fail"); // Retorna à página de login em caso de erro
        exit();
    }
} else {
    header("Location: /admin/index.php?login=fail"); // Retorna à página de login em caso de erro
    exit();
}
