<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch soft-deleted records
    $sql = "SELECT * 
            FROM STUDENTS 
            WHERE deleted_at IS NOT NULL";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $deleted_students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restore Students</title>
</head>
<body>

    <?php if (isset($_GET['restored']) && $_GET['restored'] == 'true'): ?>
        <p style="color: green;">Student restored successfully!</p>
    <?php endif; ?>

    <h1>Restore Deleted Students</h1>
    <a href="data.php">Back to Students</a>

    <?php
    if ($deleted_students) {
        echo "<ul>";
        foreach ($deleted_students as $student) {
            echo "<li>{$student['first_name']} {$student['last_name']} 
                    <a href='restore_action.php?id={$student['student_id']}'>Restore</a>
                  </li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No deleted students to restore.</p>";
    }
    ?>

</body>
</html>