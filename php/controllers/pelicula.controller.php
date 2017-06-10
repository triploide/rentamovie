<?php
if (!isset($CONFIG)) include '../config.php';
include $CONFIG['include'] . 'php/classes/Pelicula.php';

//validacion

$pelicula = new Pelicula($_POST);
var_dump($pelicula);

//$pelicula->save();

