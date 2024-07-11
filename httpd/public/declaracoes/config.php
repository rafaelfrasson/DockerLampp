<?php
session_set_cookie_params(['lifetime' => 0, 'httponly' => true]);

//Habilita 1 desabilita 0.
//ini_set('session.use_strict_mode', 0)
//$newid = session_create_id('dsbd-');

$seconds = 14400;

if (!isset($_SESSION)) {
    session_start();
    if ($seconds != 0) {
        setcookie(session_name(), session_id(), time() + $seconds);
    } else {
        setcookie(session_name(), session_id(), $seconds);
    }
} else {
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params(
        $seconds,
        $cookieParams['path'],
        $cookieParams['domain'],
        $cookieParams['secure']
    );
}



//Modo desenvolvimento
ini_set('display_errors', 1); 
error_reporting(E_ALL);


//Controle de erro
$_SESSION['error'] = (!isset($_SESSION['error'])) ?   false : $_SESSION['error'];

// rota de pastas do projeto
$_SESSION['root'] = $_SERVER['DOCUMENT_ROOT'] . "/";

// Versão do sistema
$_SESSION['version'] = "2024.00.01";

// Copyright
$_SESSION['copyright'] = "Rafael Leonardo Frasson";

//Conexão com o Banco de dados
include_once($_SESSION['root'] . "controller/services/conn.php");
