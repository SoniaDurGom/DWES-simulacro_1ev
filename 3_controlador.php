<?php

/**
 * Controlador del formulario
 */
require_once("3_asignatura.php");
$form= $_POST;
$nuevaAsignatura= new Asignatura($form["profesor"],$form["nombre"],$form["horas"]);
$nuevaAsignatura->guardar();

?>_