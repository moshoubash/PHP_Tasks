<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #2</title>
</head>
<body>
    <?php 
        $number = 20;

        function isDivisibleByThree($number){
            echo ($number % 3 === 0)? "true" : "false";
        }

        isDivisibleByThree($number);
    ?>
</body>
</html>