<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <?php
            echo '<td class = "rojo" >X</td>';
            for($i = 1; $i < 11 ;$i++){
                echo '<td class ="fondo">'.$i.'</td>';
            };
            
            for($i = 1; $i < 11 ;$i++){
                echo '<tr><td class = "fondo">'.$i.'</td>';
                for($j = 1; $j < 11; $j++){
                    echo "<td>".$j*$i."</td>";
                }
                echo "</tr>";
            };
            ?>
        </tr>
    </table>
</body>
</html>