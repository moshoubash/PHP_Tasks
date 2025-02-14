<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #4</title>
</head>
<body>
    <?php 
        $arr = [
            [1, 1, 1, 1, 1],
            [1, 1, 1, 2, 2],
            [1, 1, 3, 3, 3],
            [1, 4, 4, 4, 4],
            [5, 5, 5, 5, 5]
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