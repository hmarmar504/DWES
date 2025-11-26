<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fibonacci.php">
        <input type="number" id="numero" name="numero">
        <input type="submit" value="calcula" id="fibo" name="envia">
    </form>
    <?php
    function TerminoFibonacci($numero){
        $actual = 1;
        $anterior = 1;
        $holder = 1;
        for($i = 0; $i<$numero-2 ; $i++){
            $holder = $actual;
            $actual = $holder+$anterior;
            $anterior = $holder;
            $holder = 0;
        };
        return $actual;
    };
    if (isset($_REQUEST['envia'])){
        $fibo = $_REQUEST['numero'];
        echo ''.TerminoFibonacci($fibo).'';
    }
    ?>
</body>
</html>