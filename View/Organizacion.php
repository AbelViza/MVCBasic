<?php
require_once 'Controller/Ctrl_organizacion.php';

$control = new Ctrl_organizacion();
//echo "Mostrar ruc";
$control->listar();
