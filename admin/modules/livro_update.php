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
    $id = $_POST["id"];
    $ordem = $_POST["inputOrdem"];
    $titulo = $_POST["inputTitulo"];
    $chamada = $_POST["inputChamada"];
    $sinopse = $_POST["inputSinopse"];
    $img = $_POST["inputImagem"];
    $destaque = (empty($_POST["inputDestaque"])) ? "0" : "1";
        
    if(!empty($id)){
        $sql = "UPDATE $table SET `pos`='$ordem',`titulo`='$titulo',`chamada`='$chamada',`descricao`='$sinopse',`img_principal`='$img',`destaque`='$destaque' WHERE id=$id";
        iduSQL($sql);
        saveLog($user, 'update', $table, $titulo);
    }
    else{
        $posmax = selectSQL("SELECT COUNT(id) AS pos FROM $table");
        $ordem=$posmax[0]["pos"] + 1;
        $sql = "INSERT INTO $table (`pos`,`titulo`,`chamada`,`descricao`,`img_principal`,`destaque`) VALUES ('$ordem','$titulo','$chamada','$sinopse','$img','$destaque')";
        iduSQL($sql);
        saveLog($user, 'insert', $table, $titulo);
        $id=selectSQLUnico("SELECT id FROM livros ORDER BY id DESC");
        $id=implode(",",$id);
    }
  
    header("Location: ../views/livro.php?id=$id&update=1");
    exit();
  
?>