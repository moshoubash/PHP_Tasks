<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #1</title>
</head>
<body>
    <?php
        $first = 0;
        $second = 1;

        echo $first . ', ' . $second;

        for ($i = 2; $i < 10; $i++) {
            $next = $first + $second;
            echo ', ' . $next;

            $first = $second;
            $second = $next;
        }
    ?>
</body>
</html>