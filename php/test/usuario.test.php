<?php
require '../classes/Usuario.php';
/*
$usuario = new Usuario('Bart2', 'bart2@mail.com', '123', 10);
$usuario->save();
*/

$usuario = Usuario::find(2);
$usuario->edad = 26;
$usuario->save();

var_dump($usuario);
