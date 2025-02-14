<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #3</title>
</head>
<body>
    <?php 
        $str =  "I am a full stack developer at orange coding academy";
        $item = "ORANGE";
        $isContain = strpos(strtolower($str), strtolower($item));
        echo $isContain !== false? "word found":"word not founded";
    ?>
</body>
</html>