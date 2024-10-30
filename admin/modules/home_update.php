<?php
    
    // Abre os ficheiros necessários
    require_once "./config.php";
    require_once "./sql.php";
    require_once "./funcoes.php";

    session_start();
    $table="settings"; //Define qual a tabela da base de dados

    // Guarda valores do utilizador para gravar no log
    $user = $_SESSION["user"]["id"];
    $date = date("Y/m/d H:i:s");
    
    // Guarda os valores do $_POST
    $id = 1;
    $img = $_POST["inputImagem"];
    $txt = $_POST["inputTxtAutor"];
    $ultLivros = $_POST["inputTxtUltLivros"];

        
    if(!empty($id)){
        $sql = "UPDATE $table SET `autor_img`='$img',`autor_descricao`='$txt', `ultimosLivros`='$ultLivros' WHERE id=1";
        saveLog($user, 'update', 'settings', 'Sobre o Autor');
        iduSQL($sql);
    }
  
    header("Location: ../views/home.php?update=1");
    exit();
  
?>