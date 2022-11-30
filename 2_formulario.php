<?php

/**
 * 
 * 2. Formularios
 * - Crear una lista iterando el array anterior que muestre todos los alumnos y sus notas. 
 * - Crear un formulario que permita seleccionar la asignatura a mostrar de los estudiantes. Utilizar o un select o un grupo de radio-buttons.
 * - Filtrar las asignaturas de manera similar al apartado anterior.
 * - Crear un fichero json con los datos de cada alumno
 * - Decodificarlo y mostrar la nota media de cada alumno por pantalla
 * 
 * 
 */

/**
 * Controlador del formulario
 */
require_once("1_arrays.php");

if(!empty($_POST)){
    $asignaturaForm= $_POST["asignaturas"];
    $notasFiltradas=[];
    
    foreach ($notas as $alumnos => $asignaturas) {
        foreach ($asignaturas as $nombres => $nota) {
            if($asignaturaForm==$nombres){
                $notasFiltradas[$alumnos][$nombres]=$nota;
            }
        }
    }
    
        //CodificarJson
    file_put_contents("./alumnos.json", json_encode($notas,JSON_UNESCAPED_UNICODE));

    //Decodificar JSON
    $AlumnosJSON= json_decode(file_get_contents("./alumnos.json"),true,512,JSON_UNESCAPED_UNICODE);
    //Recorrer y sacar las notas de las asignaturas y sacar la media
    // Decodificarlo y mostrar la nota media de cada alumno por pantalla
    foreach ($AlumnosJSON as $alumno => $notasAlumno) {
        $notaMedia=0;
        $as=0;
        foreach ($notasAlumno as $asignatura => $nota) {
            // echo( "La nota de " . $alumno . " en ". $asignatura. " es "  . $nota. "<br>");
            $notaMedia+=$nota;
            $as++;
        }
        $notaMedia=$notaMedia/$as;
        echo("La media de ". $alumno ." es de: ". $notaMedia. "<br>");
    }


    print  "<pre>" . print_r($notasFiltradas) . "</pre>";

    echo "<br> <br>";

    // prin


}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  -->
    <?php require_once("1_arrays.php");
    
        foreach ($notas as $alumno => $arrAsignaturas) {
            echo "Notas de " . $alumno ;
            echo("<ul>");
            foreach ($arrAsignaturas as $asignatura => $nota) {
                ?> <li> <?= " Asignatura: ". $asignatura . " Nota: " . $nota ?> </li>
           <?php
            }
            ?>
            <br>
            </ul>
            <?php
        }
    ?>
        <form action="./2_formulario.php" method="post">
            <input type="radio" name="asignaturas" value="DWES" id="dwes">
            <label id="">DWES</label>
            <br>
            <input type="radio" name="asignaturas" value="DWEC" id="dwec">
            <label id="">DWEC</label>
            <br>
            <input type="radio" name="asignaturas" value="todas" id="todas">
            <label id="">TODAS</label>
            <br>
            <br><br>

            <input type="submit" value="Enviar">
        </form>
    
   
</body>
</html>