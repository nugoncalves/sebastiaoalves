<?php

// Abre os ficheiros necessários
require_once "../config.php";
require_once "../sql.php";
require_once "../funcoes.php";

session_start(); // Carrega a sessão aberta
saveLog($_SESSION["user"]["id"], 'logout', 'session', 'Session End');
session_destroy(); // Apaga os dados da sessão gravada
header("Location: /admin/index.php"); // Redirecciona para o index.php
exit();
