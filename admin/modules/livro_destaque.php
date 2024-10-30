<?php
    
    // Abre os ficheiros necessários
    require_once "./config.php";
    require_once "./sql.php";
    require_once "./funcoes.php";

    session_start();

    $table="livros"; //Define qual a tabela da base de dados
    
    
    // Guarda valores do utilizador para gravar no log
    $user = $_SESSION["user"]["id"];
    $date = date("Y/m/d H:i:s");
    
    // Guarda os valores do $_POST
    $id = $_GET["id"];
    $livro = selectSQLUnico("SELECT * FROM livros WHERE id=$id");
    $destaque = ($livro["destaque"]) ? "0" : "1";
    $log = "destaque[".$destaque."] ".$livro["titulo"];
        
    if(!empty($id)){
        $sql = "UPDATE $table SET `destaque`='$destaque' WHERE id=$id";
        iduSQL($sql);
        saveLog($user, 'update', $table, $log);
    }
    
  
    header("Location: ../views/livros.php");
    exit();
  
?>