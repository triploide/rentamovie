<?php

//validaciones
function validarRegistro () {

    $errors = [];

    //validar nombre
    $nombre = trim($_POST['nombre']);
    if ($nombre == "") {
        $errors[] = "Te faltó ingresar tu nombre";
    }

    //validar email
    $email = trim($_POST['email']);
    if ($email == "") {
        $errors[] = "Te faltó ingresar tu email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El email ingresado no es válido";
    }

    //validar edad
    $edad = trim($_POST['edad']);
    if (!is_numeric($edad)) {
        $errors[] = "La edad tiene que ser un número";
    }

    //validar pass
    if ($_POST['password'] != $_POST['password2']) {
        $errors[] = "Las contraseñas no coinciden";
    }

    //devuelvo los errores
    return $errors;

}
//----------
