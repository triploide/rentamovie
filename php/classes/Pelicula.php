<?php

require_once 'DB.php';
require_once 'Model.php';

class Pelicula extends Model {
    public $id;
    public $titulo;
    public $estreno;
    public $genero_id;

    public $fillable = ['titulo', 'estreno', 'genero_id'];
    public static $table = 'peliculas';
}
