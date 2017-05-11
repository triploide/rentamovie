<?php
if (!isset($CONFIG)) include '../config.php';
//include $CONFIG['include'] . 'php/validators/login.validator.php';
include $CONFIG['include'] . 'php/helpers/usuario.helper.php';

//email (form) -> recuperar un usuario (json)
if ($usuario = getUserByEmail($_POST['email'])) {
    //si el pass del usuario coincide con el pass pasado por form
    if (password_verify($_POST['password'], $usuario['password'])) {
        //login
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $usuario;
        header('Location: '.$_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['errors'][] = 'El password o el mail ingresado no es correcto.';
    }    
} else {
    $_SESSION['errors'][] = 'El mail ingresado no coincide con un usuario válido.';
}

if (count($_SESSION['errors'])) {
    header('Location: '.$CONFIG['url'].'login.php');
}
