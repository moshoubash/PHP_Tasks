<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #4</title>
</head>
<body>
    <?php 
        $str = "www.orange.com/index.php";
        echo substr($str, strpos($str, '/')+1);
    ?>
</body>
</html>