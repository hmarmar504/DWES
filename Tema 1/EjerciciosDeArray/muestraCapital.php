<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $paises = [
            "España","Francia","Alemania","Italia"
        ];
        $capitales = [
            "Madrid","París","Berlín","Roma"
        ];
        $paisesAsocia = [
        "España" => "Madrid",
        "Francia" => "París",
        "Alemania" => "Berlín",
        "Italia" => "Roma"
        ];
    ?>
    <form action="muestraCapital.php">
        <select name="seleccion" id="seleccion">
            <?php
            for($i = 0; $i < count($paises);$i++){
                echo '<option value="'.$paises[$i].'">'.$paises[$i].'</option>';
            };
            ?>
        </select>
        <input type="submit"name="subir">
    </form>

    <?php
        

    if(isset($_REQUEST['subir'])){
        $seleccion = $_REQUEST['seleccion'];
        for($i = 0; $i < count($paises);$i++){
            if($seleccion == $paises[$i]){
                echo '<p>La capital seleccionada por for de '.$paises[$i].' es '.$capitales[$i].'</p>';
            };
        }
        foreach($paises as $key=>$value) {
            if($seleccion == $paises[$key]){
                echo '<p>La capital seleccionada por foreach de '.$paises[$key].' es '.$capitales[$key].'</p>';
            };
        }
        foreach($paisesAsocia as $pais=>$capital){
            if($seleccion == $pais){
                echo '<p>La capital seleccionada por asociativo de '.$pais.' es '.$capital.'</p>';
            };
        }
    };

    ?>
</body>
</html>