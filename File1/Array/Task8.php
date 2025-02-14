<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #8</title>
</head>
<body>
    <?php 
        $colors = array("red","blue", "white","yellow");
        echo "Array (<br><pre style=\"font-family:times new roman;\">";
            array_map(function ($item) {
                echo "\t" . strtoupper($item) . "<br>";
            }, $colors);
        echo "</pre>)";
    ?>
</body>
</html>