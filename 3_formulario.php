<?php

/**
 * Formulario
 *  Un formulario que cree instancias de la clase asignatura
 */


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
    <form action="3_controlador.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="">
        <br> <br>
        <label for="horas">Horas</label>
        <input type="text" name="horas" id="">
        <br> <br>
        <label for="profesor">Profesor</label>
        <input type="text" name="profesor" id="">
        <br><br>
        <input type="submit" value="Subir">
        
    </form>
    
</body>
</html>

