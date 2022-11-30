<?php

/**
 * Clase Asignatura
 */
class Asignatura{
    private $nombre;
    private $horas;
    private $profesor;
    // nombre, horas, profesor

    function __construct($profesor, $nombre, $horas) {
    	$this->profesor = $profesor;
    	$this->nombre = $nombre;
    	$this->horas = $horas;
    
    }

    public function getProfesor() {
    	return $this->profesor;
    }

    /**
    * @param $profesor
    */
    public function setProfesor($profesor) {
    	$this->profesor = $profesor;
    }

    public function getNombre() {
    	return $this->nombre;
    }

    /**
    * @param $nombre
    */
    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function getHoras() {
    	return $this->horas;
    }

    /**
    * @param $horas
    */
    public function setHoras($horas) {
    	$this->horas = $horas;
    }

    /**
     * @return string
     */
    public function __toString() {
    	return "Profesor: {$this->profesor}, Nombre: {$this->nombre}, Horas: {$this->horas}";
    }

    public function toArray() {
        $array=[
            "nombre"=> $this->nombre,
            "horas"=> $this->horas,
            "profesor"=> $this->profesor
        ];
    	return $array;
    }

    //JsonEncode de la instancia convertida a aaray y guardarla con fileputContents
    public function guardar() {
        //LeeJson
        $jsonLeido= json_decode(file_get_contents("3_asignaturas.json"),true, 512,JSON_UNESCAPED_UNICODE);
        //Convertir instancia en Array
        array_push($jsonLeido, $this->toArray());
        //Hacer push a datos.json decodificado
        file_put_contents("./3_asignaturas.json",json_encode($jsonLeido,JSON_UNESCAPED_UNICODE));
       
    }








}