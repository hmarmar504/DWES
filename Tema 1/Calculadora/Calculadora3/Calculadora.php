<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculadora.php">
    <input type="text" id="primerNumero" placeholder="Primer numero" name="num1">
        <input type="text" id="segundoNumero" placeholder="Segundo numero" name="num2">
        <br>
        <select name="operacion">
            <option value="sumar">+</option>
            <option value="restar">-</option>
            <option value="multiplicar">*</option>
            <option value="dividir">/</option>
        </select>
        <br>
        <input type="submit" value="Calcular" id="calcular">
        <input type="reset" value="Limpiar">
    </form>
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