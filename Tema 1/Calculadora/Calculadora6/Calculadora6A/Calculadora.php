<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
        <h1>Calculadora</h1>
        <form action="Calculadora.php" method="post">
            <input type="text" id="primerNumero" placeholder="Primer numero" name="num">
            <br>
        
            <input type="submit" value="Calcular" name="Calcular">
            <input type="reset" value="Limpiar">
            <input type="text" id="resultado" placeholder="Resultado">
            <br>
        </form>
    <?php
    if (isset($_REQUEST['Calcular'])) {
    
        $num = $_REQUEST['num'];
        $multiplicacion = array();
        $divisores = array();
            //Tabla de multiplicar
            for($i = 0; $i<10; $i++){
                array_push($multiplicacion, $num*($i+1));
            }
            //Divisores
            for($i = 1; $i<=$num; $i++){
                if($num % $i == 0){
                    array_push($divisores, $i);
                }
            }
            //Imprimir tabla
                echo "<h3>Tabla de multiplicar del " . $num . ":</h3>\n";
            foreach ($multiplicacion as $res) {
                echo " " . $res . " ";
            }
            //Imprimir divisores
                echo "<h3>Divisores del " . $num . ":</h3>\n";
            foreach ($divisores as $res) {
                echo " " . $res . " ";
            }
            //Valores del 1 al dato
                echo "<h3>Valores del 1 al " . $num . ":</h3>\n";
            for($i = 1; $i<=$num; $i++){
                echo " " . $i . " ";
            }
            //Suma de divisores
                echo "<h3>Suma de divisores del " . $num . ":</h3>\n";
                echo " " . array_sum($divisores) . " ";
            //Factorial
                echo "<h3>Factorial del " . $num . ":</h3>\n";
                $factorial = 1;
                for($i = 1; $i<=$num; $i++){
                    $factorial *= $i;
                }
                echo " " . $factorial . " ";
            //par/impar
                echo "<h3>El " . $num . " es:</h3>\n";
                if($num % 2 == 0){
                    echo "Par";
                } else {
                    echo "Impar";
                }
        }
        ?>
</body>
</html>