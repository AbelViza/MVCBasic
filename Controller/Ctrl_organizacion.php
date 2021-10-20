<?php
require_once 'Model/Mdl_organizacion.php';

class Ctrl_organizacion
{

    public function __construct()
    {
    }

    public function listar()
    {
        $organizacion = new Mdl_organizacion();
        $array = $organizacion->selecionar();
        foreach($array as $value){
            echo $value['ruc'].'<br>';
        }
    }
}
