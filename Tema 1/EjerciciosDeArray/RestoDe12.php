<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="RestoDe12.php" method="post">
        <input type="number" name="numero">
        <input type="submit" value="envia">
    </form>
    <?php
    $numeros = array(
        "uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez","once","doce"
    );

    if (isset($_POST['numero'])){
        $num = $_POST['numero'];
        $resul = $num /12;
        $resto = $num % 12;
        echo "El resutado de la division de ".$num." entre 12 es ".$resul." y el resto es ".$numeros[$resto-1];
    }
    ?>
</body>
</html>