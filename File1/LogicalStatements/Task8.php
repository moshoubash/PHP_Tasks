<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #8</title>
</head>
<body>
    <?php 
        $num = -23;
        
        function checkNumber($number){
            if($number === 0){
                echo "Zero";
            }
    
            else if($number > 0){
                echo "Positive";
            }
    
            else{
                echo "Negative";
            }
        }

        checkNumber($num);
    ?>
</body>
</html>