<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
        <h1>Calculadora</h1>
        <form action="index.php" method="post">
    <input type="text" id="primerNumero" placeholder="Primer numero" name="num1">
        <input type="text" id="segundoNumero" placeholder="Segundo numero" name="num2">
        <br>
        <input type="checkbox" id="suma" name="operacion[]" value="sumar">
        <label for="suma">+</label>
        <br>
        <input type="checkbox" id="resta" name="operacion[]" value="restar">
        <label for="resta">-</label>
        <br>
        <input type="checkbox" id="multiplicacion" name="operacion[]" value="multiplicar">
        <label for="multiplicacion">*</label>
        <br>
        <input type="checkbox" id="division" name="operacion[]" value="dividir">
        <label for="division">/</label>
        <br>
        <input type="submit" value="Calcular" name="Calcular">
        <input type="reset" value="Limpiar">
        <input type="text" id="resultado" placeholder="Resultado" disabled value=<?php if (isset($resultado)) echo $resultado; ?>>
        <br>
        </form>
    <?php
    if (isset($_REQUEST['Calcular'])) {
    
    
    
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];
        $operacion = $_REQUEST['operacion'];
        $resultados = array();
        
            foreach ($operacion as $op) {
                
                switch ($op) {
                    case 'sumar':
                        $resultado=$num1+$num2;
                        array_push($resultados, $resultado);
                        break;
                    case 'restar':
                        $resultado=$num1-$num2;
                        array_push($resultados, $resultado);
                        break;
                    case 'multiplicar':
                        $resultado = $num1 * $num2;
                        array_push($resultados, $resultado);
                        break;
                    case 'dividir':
                        if ($num2 != 0) {
                            $resultado = $num1 / $num2;
                            array_push($resultados, $resultado);
                        } else {
                            $resultado = "Error: División por cero";
                        }
                        break;
                    default:
                        $resultado = "Operación no válida";
                        break;
                }
            }
            foreach ($resultados as $res) {
                echo "<h1>El resultado de la operación es: " . $res . "</h1><br>\n";
            }
        }
        ?>
</body>
</html>