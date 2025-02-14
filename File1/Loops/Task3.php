<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #3</title>
</head>
<body>
    <?php
        $arr = [
            ['A', 'A', 'A', 'A', 'A'],
            ['A', 'A', 'A', 'B', 'B'],
            ['A', 'A', 'C', 'C', 'C'],
            ['A', 'D', 'D', 'D', 'D'],
            ['E', 'E', 'E', 'E', 'E']
        ];
        
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 5; $j++){
                echo $arr[$i][$j] . "\t";
            }

            echo "<br>";
        }
    ?>
</body>
</html>