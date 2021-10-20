<?php

class App
{

    public function __construct()
    {
        $vista = $_GET['view'];
        $rutaArchivo = "View/{$vista}.php";
        if(is_file($rutaArchivo)){
            require_once $rutaArchivo;
        }else{
            echo "NOOOOO existe la pagina";
        }
    }

}
