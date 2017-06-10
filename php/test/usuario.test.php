<?php
require '../classes/Usuario.php';
require '../classes/Pelicula.php';
/*
$usuario = new Usuario('Bart2', 'bart2@mail.com', '123', 10);
$usuario->save();
*/

$pelicula = Pelicula::find(5);
$pelicula->titulo = 'Avatar 2';
$pelicula->save();


