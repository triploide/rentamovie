<?php
if (!isset($CONFIG)) include '../config.php';
include $CONFIG['include'] . 'php/validators/registro.validator.php';
include $CONFIG['include'] . 'php/helpers/usuario.helper.php';

$errors = validarRegistro();

//si hay errores conrto la ejecucion y los devuelvo
if (count($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: '.$CONFIG['url'].'registro.php');
    exit;
}

if ($error = guardarImagenUsuario()) {
    $_SESSION['errors'][] = $error;
    header('Location: '.$CONFIG['url'].'registro.php');
    exit;
}

$user = guardarUsuario();
