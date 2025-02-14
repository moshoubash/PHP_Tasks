<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #6</title>
</head>
<body>
    <p>Remove duplicated items :</p>
    <?php 
        $array1 = array(2, 4, 7, 4, 8, 4);

        echo join(', ', array_unique($array1));
    ?>
</body>
</html>