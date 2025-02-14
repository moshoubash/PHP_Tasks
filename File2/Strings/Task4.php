<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #4</title>
</head>
<body>
    <?php 
        $str = "0000657022.24";
        $newStr = str_replace(' ', '', str_replace("0", " ", $str));
        echo $newStr;
    ?>
</body>
</html>