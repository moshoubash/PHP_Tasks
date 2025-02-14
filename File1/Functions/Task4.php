<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #4</title>
</head>
<body>
    <?php 
        $number = 152;
        $arr = str_split((string) $number);
        $total = 0;
        foreach($arr as $item){
            $total += pow((int) $item, 3);
        }
        if($number === $total){
            echo "$number is armstrong number!";
        }
        else{
            echo "$number is not armstrong number!";
        }
    ?>
</body>
</html>