<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $major = $_POST['major'];
    $enrollment_year = $_POST['enrollment_year'];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "
            INSERT INTO `students` (`first_name`, `last_name`, `email`, `date_of_birth`, `gender`, `major`, `enrollment_year`) 
            VALUES (:first_name, :last_name, :email, :date_of_birth, :gender, :major, :enrollment_year)
        ";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':date_of_birth', $date_of_birth);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':major', $major);
        $stmt->bindParam(':enrollment_year', $enrollment_year);

        $stmt->execute();

        echo "<h1 style=\"font-family:arial;\">Student data inserted successfully!</h1>";
    } 
    
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>