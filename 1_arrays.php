<?php

/**
 * 
 * 1. Arrays:
 * Crear un array que recoja las notas de la asignatura "DWES" de 5 alumnos. Dicho array ha de ser asociativo y las notas números aleatorios entre 1 y 10.
 * Añadir por cada estudiante, una clave más "DWEC" con números aleatorios entre 1 y 10.
 * 
 */

 function aleatorio(){
    return rand(1,10);
 }

//  $arrayAsociativo= ["Sonia"=>[
//                                 "DWES"=>aleatorio()
//                             ], 

//                     "Cecilia"=>[
//                                 "DWES"=> aleatorio()
//                                 ], 

//                     "Tizziano"=>[
//                                 "DWES"=> aleatorio()
//                                 ], 
//                     "Hugo"=>[
//                                 "DWES"=> aleatorio()
//                                 ], 
//                     "Adán"=>[
//                                 "DWES"=> aleatorio()
//                                 ], 
//                     ];

$alumnos= ["Sonia", "Cecilia","Tizziano","Hugo","Adan"];
$notas=[];

//Rellenar el array de notas con los alumnos y la asignatura iniciañ
foreach ($alumnos as $alumno) {
    $notas[$alumno] = ["DWES"=>aleatorio()];
} 

// var_dump($notas);
foreach ($notas as $alumno => $asignatura) {
    $notas[$alumno]["DWEC"] = aleatorio();
}

print "<pre>" . print_r($notas, true). "</pre>";


?>