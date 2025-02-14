<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
</head>
<body>
    <?php 
        $factorial = 1;
        $n = 5;

        for($i = 1; $i <= $n; $i++){
            $factorial*=$i;
        }

        echo "factorial of $n = $factorial";
    ?>
</body>
</html>