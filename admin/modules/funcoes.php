<?php

    // Função para verificar se esxiste Sessão ou retornar para index
    function sessionExists(){
        session_start();
        if(empty($_SESSION["user"])){
            header("Location: /sebastiaoalves/admin/index.php");
            exit();
        }
    }

    // Função para Verificar se Login é correcto
    function signIn($email, $password){
        $user = selectSQLUnico("SELECT * FROM users WHERE email='$email'");
        if(!empty($user)){
            if(password_verify($password, $user["password"])){
                saveLog($user["id"], 'login', 'session', 'Session Start');
                return $user;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    // Função para gravar logs
    function saveLog($id_user, $accao, $tabela, $titulo){
        $sql = "INSERT INTO logs (id_user, tipo, tabela, titulo) VALUES ('$id_user', '$accao', '$tabela', '$titulo')";
        iduSQL($sql);
    }

    //Função para debug
    function dd($var){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
        die();
    }

?>