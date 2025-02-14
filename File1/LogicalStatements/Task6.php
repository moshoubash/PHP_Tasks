<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #6</title>
</head>
<body>
    <?php 
        $x = 10;
        $y = 20;

        $operator = "*";

        #for example if the user choose '+'

        function calculator($num1, $op, $num2){
            switch($op){
                case '+' :
                    echo "num1 + num2 = " . $num1 + $num2;
                    break;
                case '-' :
                    echo "num1 - num2 = " . $num1 - $num2;
                    break;
                case '/' :
                    echo "num1 / num2 = " . $num1 / $num2;
                    break;
                case '*' :
                    echo "num1 * num2 = " . $num1 * $num2;
                    break;
            }
        }

        calculator($x, $operator, $y);
    ?>
</body>
</html>