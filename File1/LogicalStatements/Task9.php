<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #9</title>
</head>
<body>
    <?php 
        $arr = [60,86,95,63,55,74,79,62,50];
        
        function findGrade($arr){
            $total = array_sum($arr);
            $avg = $total / count($arr);
            
            if($avg > 90){
                echo "A";
            }
            elseif($avg > 80){
                echo "B";
            }
            elseif($avg > 70){
                echo "C";
            }
            elseif($avg > 60){
                echo "D";
            }
            else{
                echo "F";
            }
        }

        findGrade($arr);
    ?>
</body>
</html>