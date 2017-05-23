<?php

$usuario = getUserByEmail($_POST['email']);

if (!$usuario) {
    $_SESSION['errors'][] = 'El password o el mail ingresado no es correcto.';
    header('Location: '.$CONFIG['url'].'login.php');
    exit;
}

if (!password_verify($_POST['password'], $usuario['password'])) {
    $_SESSION['errors'][] = 'El password o el mail ingresado no es correcto.';
    header('Location: '.$CONFIG['url'].'login.php');
    exit;
}
