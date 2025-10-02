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
        $divisores = array();            
            //Divisores
            for($i = 1; $i<=$num; $i++){
                if($num % $i == 0){
                    array_push($divisores, $i);
                }
            }
            //Imprimir tabla
            function imprimirMulti($numero){
                echo "<h3>Tabla de multiplicar del " . $numero . ":</h3>\n";
                for($i = 0; $i<10; $i++){
                echo " ". $numero*($i+1);
                }
            }
            //Imprimir divisores
            function imprimirDivisores($numero){
                echo "<h3>Divisores del " . $numero . ":</h3>\n";
                for($i = 1; $i<=$numero; $i++){
                    if($numero % $i == 0){
                        echo " ". $numero . " ";
                    }
                }
            }
            //Valores del 1 al dato
            function imprimirValores($vals){
                echo "<h3>Valores del 1 al " . $vals . ":</h3>\n";
                for($i = 1; $i<=$vals; $i++){
                    echo " " . $i . " ";
                }
            }
            //Suma de divisores
            function sumaDivisores($divs){
                return array_sum($divs);
            }
            //Calculo factorial
            function calcFactorial($numero){
                $factorial = 1;
                for($i = 1; $i<=$numero; $i++){
                    $factorial *= $i;
                }
                return $factorial;
            }
            function parOimpar($numero){
                return ($numero % 2 == 0);
            }
            imprimirMulti($num);
            imprimirDivisores($num);
            imprimirValores($num);
            //Muestra de suma de divisores
                echo "<h3>Suma de divisores del " . $num . ":</h3>\n";
                echo " " . sumaDivisores($divisores) . " ";
            //Muestra Factorial
                echo "<h3>Factorial del " . $num . ":</h3>\n";
                echo calcFactorial($num);
            //par/impar
                echo "<h3>El " . $num . " es:</h3>\n";
                if(parOimpar($num)){
                    echo "Par";
                } else {
                    echo "Impar";
                }
        }
        ?>
</body>
</html>