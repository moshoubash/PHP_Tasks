<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #6</title>
</head>
<body>
    <?php
        $temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

        $unique_temps = array_unique($temperatures);

        $average = array_sum($unique_temps) / count($unique_temps);

        sort($unique_temps);

        $lowest = array_slice($unique_temps, 0, 5);
        $highest = array_slice($unique_temps, -5);

        echo "Average Temperature is: " . round($average, 1);
        echo "<br>";
        echo "List of five lowest unique temperatures: " . implode(", ", $lowest);
        echo "<br>";
        echo "List of five highest unique temperatures: " . implode(", ", $highest);
    ?>
</body>
</html>