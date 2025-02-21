<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $student_id = $_GET['id'];

        $sql = "UPDATE STUDENTS 
                SET deleted_at = NULL 
                WHERE student_id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([':id' => $student_id]);

        header("Location: restore.php?restored=true");
        exit();
    }
?>
