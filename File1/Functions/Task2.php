<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #2</title>
</head>
<body>
    <?php 
        $str = "remove";
        
        function reverseString($str){
            $arr = str_split($str);
            $reversedArray = array_reverse($arr);
            echo join("", $reversedArray);
        }

        reverseString($str);
    ?>
</body>
</html>