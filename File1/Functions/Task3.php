<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #3</title>
</head>
<body>
    <h1>Sample Input: x = 12 y= 10</h1>
    <p>result : </p>
    <?php
        function swap(&$x, &$y) {
            $x = $x + $y;
            $y = $x - $y;
            $x = $x - $y;
        }

        $x = 12;
        $y = 10;

        echo "Before swap: x = $x, y = $y\n";
        swap($x, $y);
        echo "After swap: x = $x, y = $y\n";
    ?>
</body>
</html>