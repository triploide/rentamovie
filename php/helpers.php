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

//abm usuario
function getUsers ()
{
    $users = @file_get_contents(__DIR__.'/../usuarios.json');
    return (!$users)?[]:json_decode($users, true);
}

function guardarUsuario()
{
    //users es un array de arrays usuarios
    $users = getUsers();
    
    //newUser es un array del tipo usuario
    $newUser = [
        'nombre' => $_POST['nombre'],
        'email' => $_POST['email'],
        'edad' => $_POST['edad'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ];
    //guardo newUser dentro del array de usuarios
    $users[] = $newUser;
    //lo codifico a json
    $users = json_encode($users);
    //guardarlo en el archivo json
    file_put_contents(__DIR__.'/../usuarios.json', $users);

    return $newUser;
}

function guardarImagenUsuario()
{
    $errores = '';
    $file = $_FILES['avatar'];
    $path = __DIR__.'/../content/usuarios/';

    $tiposPermitidos = ['png', 'jpg', 'jpeg', 'gif'];

    if ($file["error"] == UPLOAD_ERR_OK) {
        $nombre = $file["name"];
        $archivo = $file["tmp_name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
        if (!in_array($ext, $tiposPermitidos)) {
            $errores = "No acepto la extensión";
        } else {
            $nombre = str_replace('@', '-', $_POST['email']);
            $nombre = str_replace('.', '-', $nombre);
            move_uploaded_file($archivo, $path.$nombre.'.'.$ext);
        }
    } else {
        $errores = "Hubo un problema en la carga de la imagen";
    }
    return $errores;
}
function getImageUser ($email) {
    $path = str_replace('@', '-', $email);
    $path = str_replace('.', '-', $path);
    return 'images/'.$path.'.png';
}
//----------
