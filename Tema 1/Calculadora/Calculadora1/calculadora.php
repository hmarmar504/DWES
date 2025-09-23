<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];
        $operacion = $_REQUEST['operacion'];

        switch ($operacion) {
            case 'sumar':
                $resultado=$num1+$num2;
                break;
            case 'restar':
                $resultado=$num1-$num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Error: División por cero";
                }
                break;
            default:
                $resultado = "Operación no válida";
                break;
        }

        echo "<h1>El resultado de la operación es: " . $resultado . "</h1>";
        ?>
</body>
</html>