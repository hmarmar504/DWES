<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* Declaracion de las variables */
    $Notas = [1,2,3,4,5,6,7,8,9];
    $NotasAlumno = array(
        "Pepito" => 2,
        "Francisco" => 7,
        "Jose" => 9,
        "Paco" => 4,
        "Juan" => 8,
        "Francisca" => 5,
        "Josefa" => 4
    );
    /* Recorrer los arrays */
    echo"<p>";
    foreach($Notas as $nota)
        echo $nota." ";
    echo"</p>";
    echo"<p>";
    foreach($NotasAlumno as $alumno)
        echo $alumno." ";
    echo "</p>";
    /* Nota media */
    $media = (array_sum($NotasAlumno)/count($NotasAlumno));
    echo"<p>La nota media de la clase es ".$media."</p>";
    /* Nota menor */
    asort($NotasAlumno);
    $notaBaja = array_keys($NotasAlumno)[0];
    echo"<p>La nota mas baja es de ".$notaBaja." que ha sacado un ".$NotasAlumno[$notaBaja]."</p>";
    /* Nota mayor */
    $notaAlta = array_key_last($NotasAlumno);
    echo"<p>La nota mas alta es de ".$notaAlta." que ha sacado un ".$NotasAlumno[$notaAlta]."</p>"
?>
</body>
</html>