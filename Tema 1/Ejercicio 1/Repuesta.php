<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resupuesta</title>
</head>
<body>
    <?php 
    $nombre = $_REQUEST["nombre"];
    $apellidos = $_REQUEST["apellidos"];
    $nombreCompleto = $nombre." ". $apellidos;
    $correo = $_REQUEST["email"];
    $telefono = $_REQUEST["telefono"];
    $seleccion = $_REQUEST["Seleccion"];
    $radio = $_REQUEST["Radio"];
    $chboxs = $_REQUEST["chbox"];


    
    

    print "<h1>Los datos introducidos son:</h1><br>";
    echo "<h2>Nombre completo: " .$nombreCompleto."</h2>";
    echo "<p>sus opciones son:.".$seleccion." </p>";
    echo "<p>su genero es:.".$radio." </p>";
    echo "<p>su correo es:.".$correo." </p>";
    echo "<p>su telefono es:.".$telefono." </p>";
    echo "<p>sus aficiones son:.</p>";
    $n = count ($chboxs);
    for ($i=0; $i<count($chboxs); $i++)
        echo ($chboxs[$i]."\n");
    ?>
</body>
</html>