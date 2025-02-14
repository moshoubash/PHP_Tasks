<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #4</title>
</head>
<body>
    <?php 
        for($i = 200; $i <= 250; $i++){
            if($i % 4 === 0)
                echo $i."\t";
        }
    ?>
</body>
</html>