<?php
session_start();

$userEmail = filter_var($_POST['formEmail'], FILTER_SANITIZE_EMAIL);
$userPassword = $_POST['formSenha'];

if (isset($userEmail) && isset($userPassword)){
    if ($userEmail === 'roger@gmail.com' && $userPassword === '193327'){
        header('Location: home.php');
        exit();
    } else {
        $_SESSION['login_error'] = 'E-mail ou senha incorretos';
        header('Location: index.php');
        
        exit();
    }
} else {
    $_SESSION['login_error'] = 'Por favor preencha todos os campos';
    header('Location: index.php');
    exit();
}