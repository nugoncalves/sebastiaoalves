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
    $morada = $_POST["inputMorada"];
    $telefone = $_POST["inputTelefone"];
    $email = $_POST["inputEmail"];
    $facebook = $_POST["inputFacebook"];
    $instagram = $_POST["inputInstagram"];
    $linkedin = $_POST["inputLinkedin"];
        
    if(!empty($id)){
        $sql = "UPDATE $table SET `morada`='$morada',`email`='$email',`telefone`='$telefone',`facebook_link`='$facebook',`instagram_link`='$instagram',`linkedin_link`='$linkedin' WHERE id=1";
        saveLog($user, 'update', 'settings', 'Contactos');
        iduSQL($sql);
    }
  
    header("Location: ../views/contactos.php?update=1");
    exit();
  
?>