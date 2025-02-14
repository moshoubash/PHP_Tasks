<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #7</title>
</head>
<body>
    <?php 
        $userDefinedNumber = 8; #4 for example without using random
        $str = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
        echo substr(str_shuffle($str), 0, $userDefinedNumber);
    ?>
</body>
</html>