<?php

require_once 'DB.php';

class Usuario
{
    public $id;
    public $email;
    public $password;
    public $edad;
    public $nombre;
    
    public function __construct($nombre, $email, $password, $edad)
    {
        $this->nombre  = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->edad = $edad;
    }

    public static function find($id)
    {
        $sql = 'SELECT * FROM usuarios WHERE id = :id';
        $stmt = DB::getConn()->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $usuario = new Usuario('', '', '', 0);
        $usuario->toUser($result);
        return $usuario;
    }

    private function toUser($data)
    {
        $this->id = $data['id'];
        $this->nombre = $data['nombre'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->edad = $data['edad'];
    }

    public function save()
    {
        $sql = ($this->id)?$this->update():$this->insert();
        $stmt = DB::getConn()->prepare($sql);
        $stmt->bindValue(':nombre', $this->nombre, PDO::PARAM_STR );
        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR );
        $stmt->bindValue(':password', $this->password, PDO::PARAM_STR );
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
