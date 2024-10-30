<?php
    
    // Abre os ficheiros necessários
    require_once "./config.php";
    require_once "./sql.php";
    require_once "./funcoes.php";

    session_start();
    $table="banners"; //Define qual a tabela da base de dados

    // Guarda valores do utilizador para gravar no log
    $user = $_SESSION["user"]["id"];
    $date = date("Y/m/d H:i:s");
    
    // Guarda os valores do $_POST
    $id = $_POST["id"];
    $ordem = $_POST["inputOrdem"];
    $titulo = $_POST["inputTitulo"];
    $chamada = $_POST["inputChamada"];
    $sinopse = $_POST["inputSinopse"];
    $imgdesktop = $_POST["inputImagemDesktop"];
    $imgmobile = $_POST["inputImagemMobile"];
    $link = $_POST["inputLink"];
        
    if(!empty($id)){
        $sql = "UPDATE $table SET `pos`='$ordem',`titulo`='$titulo',`chamada`='$chamada',`texto`='$sinopse',`link`='$link',`img_desktop`='$imgdesktop', `img_mobile`='$imgmobile' WHERE id=$id";
        iduSQL($sql);
        saveLog($user, 'update', $table, $titulo);
    }
    else{
        $posmax = selectSQL("SELECT COUNT(id) AS pos FROM $table");
        $ordem=$posmax[0]["pos"] + 1;
        $sql = "INSERT INTO $table (`pos`,`titulo`,`chamada`,`texto`, `link`,`img_desktop`,`img_mobile`) VALUES ('$ordem','$titulo','$chamada','$sinopse', '$link', '$imgdesktop','$imgmobile')";
        iduSQL($sql);
        saveLog($user, 'insert', $table, $titulo);
        $id=selectSQLUnico("SELECT id FROM $table ORDER BY id DESC");
        $id=implode(",",$id);
    }
  
    header("Location: ../views/banner.php?id=$id&update=1");
    exit();
  
?>