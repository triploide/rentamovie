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

    public function save()
    {
        $sql = ($this->id)?$this->update():$this->insert();
        $stmt = DB::getConn()->prepare($sql);
        $stmt->bindValue(':titulo', $this->titulo, PDO::PARAM_STR);
        $stmt->bindValue(':estreno', $this->estreno, PDO::PARAM_STR);
        $stmt->bindValue(':genero_id', $this->genero_id, PDO::PARAM_INT);
        $stmt->execute();
    }

    private function insert()
    {
        return 'INSERT INTO peliculas (titulo, estreno, genero_id) VALUES (:titulo, :estreno, :genero_id)';
    }

    private function update()
    {
        return 'UPDATE usuarios SET nombre=:nombre, email=:email, password=:password, edad=:edad WHERE id = '.$this->id;
    }


}
