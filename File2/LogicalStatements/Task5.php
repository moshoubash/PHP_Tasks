<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #5</title>
</head>
<body>
    <?php 
        $n = 10;

        $firstNumberInRange = 11;
        $secondNumberInRange = 20;

        $numbers = range($firstNumberInRange, $secondNumberInRange);
        shuffle($numbers);

        foreach(array_slice($numbers, 0, $n) as $key){
            echo $key . " ";
        }
    ?>
</body>
</html>