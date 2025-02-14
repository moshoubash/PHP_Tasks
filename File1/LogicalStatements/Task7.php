<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #7</title>
</head>
<body>
    <?php 
        $age = 15;

        function isUserEligible($age){
            echo ($age < 18)? "is no eligible to vote" : "eligible to vote";
        }

        isUserEligible($age);
    ?>
</body>
</html>