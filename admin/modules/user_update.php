<?php
    
    // Abre os ficheiros necessários
    require_once "./config.php";
    require_once "./sql.php";
    require_once "./funcoes.php";

    session_start();
    $table="users"; //Define qual a tabela da base de dados

    $user = $_SESSION["user"]["id"]; //obtém o id do utilizador activo
    $userEmail = $_SESSION["user"]["email"]; //obtém o email actual do utilizador
    $action = $_POST["action"]; //obtém qual é a acção de alteração solicitada
    
    // Guarda os valores do $_POST para update dos dados do utilizador
    $nome = $_POST["inputNome"];    
    $email = $_POST["inputEmail"];

    // Guarda dos valores do $_POST para o update da password
    $passActual = $_POST["inputPassActual"];
    $passNova = $_POST["inputPassNova"];
    $passCheck = $_POST["inputPassCheck"];
    
    if($action=="dados"){ // Se é uma alteração de dados do utilizador
        $sql = "UPDATE $table SET `nome`='$nome',`email`='$email' WHERE id=$user";
        iduSQL($sql); // Faz o update na tabela
        saveLog($user, 'update', $table, $_SESSION["user"]["nome"]); // Guarda o log da alteração
        $user = selectSQLUnico("SELECT * FROM users WHERE email='$email'");
        $_SESSION["user"] = $user; // Redifine os valores guardados no session
        header("Location: ../views/user.php?update=1"); //Retorna o retorna mensagem de sucesso
        exit();
    }
    elseif($action=="password"){
        $userCheck = signIn($userEmail, $passActual); //valida a password activa
        if(!empty($userCheck)){ // Se o login está correcto
            if($passNova == $passCheck){ // Verifica que o utilizador está certo da alteração da password
                $pass=password_hash($passNova, PASSWORD_DEFAULT);
                $sql = "UPDATE $table SET `password`='$pass' WHERE id=$user";
                iduSQL($sql); // Faz o update na tabela
                saveLog($user, 'update', $table, 'PASS_CHANGE'.$_SESSION["user"]["nome"]); // Guarda o log da alteração
                header("Location: ../views/user.php?update=2"); //Retorna para a página de sucesso
                exit();
            }
            else{ // Se a confirmação da password não se confirma
                header("Location: ../views/user.php?erro=1"); //Retorna o erro
                exit();
            }
        }
        else{
            header("Location: ../views/user.php?erro=2"); //Retorna o erro
            exit();
        }
    }
    else{
        header("Location: ../views/user.php?erro=3");
        exit();

    }
  
?>