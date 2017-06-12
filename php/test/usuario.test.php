<?php
require_once '../classes/JSONDB.php';
require_once '../classes/DBFactory.php';
require_once '../classes/Usuario.php';
require_once '../classes/Pelicula.php';

DBFactory::$db_type = 'JSONDB';

/*
$usuario = new Usuario('Bart2', 'bart2@mail.com', '123', 10);
$usuario->save();
*/

$usuario = Usuario::find(2);
var_dump($usuario); exit;
$pelicula->titulo = 'Avatar';
$pelicula->save();


