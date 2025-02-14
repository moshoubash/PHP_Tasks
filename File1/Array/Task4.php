<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #4</title>
</head>
<body>
    <?php 
        $array = [1, 2, 3, 4, 5];
        $location = 4;
        $item = "$";

        array_splice($array, $location-1, 0, $item);

        echo implode(" ", $array);
    ?>
</body>
</html>