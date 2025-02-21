<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = "UPDATE STUDENTS 
                SET deleted_at = NOW() 
                WHERE student_id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) {
            header("Location: data.php?deleted=true");
            exit();
        } else {
            echo "Error deleting record.";
        }
    }
?>