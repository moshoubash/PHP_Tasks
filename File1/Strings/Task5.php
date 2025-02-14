<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #5</title>
</head>
<body>
    <?php 
        $str = "info@orange.com";
        echo substr($str, 0, strpos($str, "@"));
    ?>
</body>
</html>