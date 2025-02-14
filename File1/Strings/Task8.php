<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #8</title>
</head>
<body>
    <?php 
        $str = "That new trainee is so genius.";
        $word = "Our";
        $targetWord = substr($str,0,strpos($str, ' '));
        
        $newStr = str_replace($targetWord, $word, $str);
        echo $newStr;
    ?>
</body>
</html>