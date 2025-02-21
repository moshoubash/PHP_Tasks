<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <?php 
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "university";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $student_id = $_GET['id'];

            $sql = "SELECT * 
                    FROM students 
                    WHERE student_id = :student_id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
            $stmt->execute();
            
            $student = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$student) {
                echo "Student not found!";
                exit;
            }

            // Update student data
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $date_of_birth = $_POST['date_of_birth'];
                $gender = $_POST['gender'];
                $major = $_POST['major'];
                $enrollment_year = $_POST['enrollment_year'];

                $update_sql = "UPDATE students 
                               SET first_name = :first_name, 
                                   last_name = :last_name, 
                                   email = :email, 
                                   date_of_birth = :date_of_birth, 
                                   gender = :gender, 
                                   major = :major, 
                                   enrollment_year = :enrollment_year,
                                   updated_at = NOW() 
                               WHERE student_id = :student_id";

                $update_stmt = $conn->prepare($update_sql);
                
                $update_stmt->bindParam(':first_name', $first_name);
                $update_stmt->bindParam(':last_name', $last_name);
                $update_stmt->bindParam(':email', $email);
                $update_stmt->bindParam(':date_of_birth', $date_of_birth);
                $update_stmt->bindParam(':gender', $gender);
                $update_stmt->bindParam(':major', $major);
                $update_stmt->bindParam(':enrollment_year', $enrollment_year);
                $update_stmt->bindParam(':student_id', $student_id);

                if ($update_stmt->execute()) {
                    echo "Student updated successfully!";
                    header("Location: data.php"); // Redirect back to student list
                    exit;
                } else {
                    echo "Failed to update student!";
                }
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    ?>

    <form method="post">
    <h1>Update Student</h1>
    <hr>
        <label for="first_name">First Name: </label>
        <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($student['first_name']); ?>" required>
        <br>
        <label for="last_name">Last Name: </label>
        <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($student['last_name']); ?>" required>
        <br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($student['email']); ?>" required>
        <br>
        <label for="date_of_birth">Date of Birth: </label>
        <input type="date" id="date_of_birth" name="date_of_birth" value="<?= $student['date_of_birth']; ?>" required>
        <br>
        <label for="gender">Gender: </label>
        <select name="gender" id="gender" required>
            <option value="male" <?= ($student['gender'] == 'male') ? 'selected' : ''; ?>>Male</option>
            <option value="female" <?= ($student['gender'] == 'female') ? 'selected' : ''; ?>>Female</option>
        </select>
        <br>
        <label for="major">Major: </label>
        <input type="text" id="major" name="major" value="<?= htmlspecialchars($student['major']); ?>" required>
        <br>
        <label for="enrollment_year">Enrollment Year: </label>
        <input type="number" id="enrollment_year" name="enrollment_year" value="<?= $student['enrollment_year']; ?>" required>
        <br>
        <button type="submit">Update</button>
        <a href="data.php">Cancel</a>
    </form>
</body>
</html>
