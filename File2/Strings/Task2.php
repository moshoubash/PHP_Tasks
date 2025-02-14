<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task #2</title>
</head>
<body>
    <?php
        $char = 'a';
        $next_char = ++$char; 
        
        if (strlen($next_char) > 1) 
            $next_char = $next_char[0];

        echo $next_char;
    ?>
</body>
</html>