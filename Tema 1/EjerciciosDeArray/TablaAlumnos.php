<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table id="tabla">
        <tbody id="cuerpoTabla">
            <tr>
                <th id="nombreAlumno"></th>
                <th id="notaAlumno"></th>
            </tr>
            <?php 
    $alumnos = array(
        array("nombre" => "Pepe", "nota" => 7),
        array("nombre" => "Jose", "nota" => 5),
        array("nombre" => "Ana", "nota" => 6),
        array("nombre" => "Pepita", "nota" => 1),
        array("nombre" => "Paco", "nota" => 9),
    );
    foreach($alumnos as $alumno){
        echo "<tr>";
        echo "<td>".$alumno["nombre"]."</td>";
        echo "<td>".$alumno["nota"]."</td>";
        echo "</tr>";
    }
    ?>
        </tbody>
    </table>
    
</body>
</html>