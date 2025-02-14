<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #1</title>
</head>
<body>
    <!-- It is divisible by 4, and
    It is not divisible by 100, unless
    It is also divisible by 400. -->

    <?php 
        $year = 2013;
        
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "This year is a leap year.";
        } else {
            echo "This year is not a leap year.";
        }
    ?>
</body>
</html>