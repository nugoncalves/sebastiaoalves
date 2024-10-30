<?php
    
    // Abre os ficheiros necessários
    require_once "./config.php";
    require_once "./sql.php";
    require_once "./funcoes.php";

    session_start();
    $table="blog"; //Define qual a tabela da base de dados

    // Guarda valores do utilizador para gravar no log
    $user = $_SESSION["user"]["id"];
    
    // Guarda os valores do $_POST
    $id = $_POST["id"];
    $data = $_POST["inputData"];
    $titulo = $_POST["inputTitulo"];
    $texto = $_POST["inputTexto"];
    $img = $_POST["inputImagem"];
        
    if(!empty($id)){
        $sql = "UPDATE $table SET `data`='$data',`titulo`='$titulo',`texto`='$texto',`img`='$img' WHERE id=$id";
        iduSQL($sql);
        saveLog($user, 'update', 'imprensa', $titulo);
    }
    else{
        $sql = "INSERT INTO $table (`data`,`titulo`,`texto`, `img`) VALUES ('$data','$titulo','$texto','$img')";
        // dd($sql);
        iduSQL($sql);
        saveLog($user, 'insert', 'imprensa', $titulo);
        $id=selectSQLUnico("SELECT id FROM $table ORDER BY id DESC");
        $id=implode(",",$id);
    }
  
    header("Location: ../views/blogpost.php?id=$id&update=1");
    exit();
  
?>