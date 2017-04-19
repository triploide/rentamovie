<?php
session_start();
include('helpers.php');

$errors = validarRegistro();

//si hay errores conrto la ejecucion y los devuelvo
if (count($errors)) {
	$_SESSION['errors'] = $errors;
	header('Location: ../registro.php');
	exit();
}

guardarUsuario($path);

$path = dirname(__FILE__) . '/../images/';
guardarImagen('avatar', $path);
