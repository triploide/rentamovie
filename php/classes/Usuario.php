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

    public function save()
    {
        $sql = ($this->id)?$this->update():$this->insert();
        $stmt = DB::getConn()->prepare($sql);
        $stmt->bindValue(':nombre', $this->nombre, PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
        $stmt->bindValue(':edad', $this->edad, PDO::PARAM_INT);
        $stmt->execute();
    }

    private function insert()
    {
        return 'INSERT INTO usuarios (nombre, email, password, edad) VALUES (:nombre, :email, :password, :edad)';
    }

    private function update()
    {
        return 'UPDATE usuarios SET nombre=:nombre, email=:email, password=:password, edad=:edad WHERE id = '.$this->id;
    }


}
