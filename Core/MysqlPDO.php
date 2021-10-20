<?php

class MysqlPDO
{

    private static $conex;

    public function __construct()
    {
        if (self::$conex == null) {
            try {
                self::$conex = new PDO('mysql:host=localhost;dbname=vraemorg', 'root', '');
                //echo "se realizo una conexion";
            } catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

    protected function seleccion($sql)
    {
        $respuesta = null;
        if (self::$conex != null && $sql != '') {
            $rows = self::$conex->query($sql);
            $respuesta = $rows->fetchAll();
        }
        return $respuesta;
    }

    protected function actualizar(){

    }

    protected function insertar(){

    }

    protected function eliminar(){
        
    }
}
