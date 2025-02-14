<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #3</title>
</head>
<body>
    <?php 
        $number = 30;

        function isInRange($number){
            echo ($number >= 30 && $number <= 50)? "true" : "false";
        }

        isInRange($number);
    ?>
</body>
</html>