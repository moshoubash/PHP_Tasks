<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #5</title>
</head>
<body>
    <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                if ($i == $j)
                    echo ($i + 1) . " ";
                else
                    echo "0 ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>