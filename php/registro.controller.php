<?php
session_start();
include('helpers.php');

$errors = validarRegistro();

//si hay errores conrto la ejecucion y los devuelvo
if (count($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: ../registro.php');
    exit;
}

if ($error = guardarImagenUsuario()) {
    $_SESSION['errors'][] = $error;
    header('Location: ../registro.php');
    exit;
}

$user = guardarUsuario();
