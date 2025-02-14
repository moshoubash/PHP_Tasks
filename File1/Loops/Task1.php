<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #1</title>
</head>
<body>
    <?php 
        $arr = [];
        for($i = 1; $i <= 10; $i++){
            array_push($arr, $i);
        }
        echo join('-', $arr);
    ?>
</body>
</html>