<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #7</title>
</head>
<body>
    <table border='1' cellpadding='3px' cellspacing='0px'>
        <tbody>
            <?php 
                for($i = 1; $i <= 6; $i++){
                    echo "<tr>";
                        for($j = 1; $j <= 5; $j++){
                            echo "<td>{$i}*{$j}=" . $i*$j . "</td>";
                        }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>