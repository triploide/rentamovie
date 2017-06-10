<?php

class Model {

    public function __construct($data)
    {
        $this->toModel($data);
    }

    public static function find($id)
    {
        $sql = 'SELECT * FROM '.static::$table.' WHERE id = :id';
        $stmt = DB::getConn()->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $class = get_called_class();
        $usuario = new $class([]);
        $usuario->toModel($result);
        return $usuario;
    }

    private function toModel($data)
    {
        if (isset($data['id'])) $this->id = $data['id'];
        foreach ($data as $key => $value) {
            if (in_array($key, $this->fillable)) {
                $this->$key = $value;
            }
        }
    }

}
