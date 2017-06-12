<?php
require_once '../classes/JSONDB.php';
require_once '../classes/DBFactory.php';
require_once '../classes/Usuario.php';
require_once '../classes/Pelicula.php';

DBFactory::$db_type = 'JSONDB';

/*
$pelicula = new Pelicula(['titulo' => 'Los hombres son golpeados por el Fútbol', 'estreno' => '1994-03-09', 'genero_id' => 3]);
$pelicula->save();
exit;
*/

/*
$pelicula = Pelicula::find(5);
$pelicula->titulo = 'Avatar 3';
$pelicula->save();
*/

$pelicula = Pelicula::find('593dfab1a9b07');
var_dump($pelicula);
