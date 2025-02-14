<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #1</title>
</head>
<body>
    <?php 
        $num1 = 15;
        $num2 = 15;

        function isEqualToThirty($num1, $num2){
            $result = $num1 + $num2;
            echo ($num1 + $num2 === 30)? "<p>The result is : $result</p>" : var_dump($num1 + $num2 === 30);
        }

        isEqualToThirty($num1, $num2);
    ?>
</body>
</html>