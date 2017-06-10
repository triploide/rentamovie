<?php

require_once 'DB.php';
require_once 'Model.php';

class Usuario extends Model {
    public $id;
    public $email;
    public $password;
    public $edad;
    public $nombre;

    public $fillable = ['nombre', 'email', 'password', 'edad'];
    public static $table = 'usuarios';
}
