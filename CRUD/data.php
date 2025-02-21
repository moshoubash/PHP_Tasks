<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/d890c03bb3.js" crossorigin="anonymous"></script>
    <style>
        *{
            font-family:arial;
            text-decoration:none;
        }
        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
            text-align: center;
            border-radius:5px;
        }
        .close {
            color: red;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Students</h1>
    <a href="create.php" class="btn btn-dark create-btn">Create new Student</a>
    <a href="restore.php" class="btn btn-secondary create-btn">Restore Students</a>
    <?php 
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "university";

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM STUDENTS WHERE deleted_at IS NULL";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($students) {
            echo "<table class=\"table table-striped table-bordered \">";

            echo "<tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Major</th>
                    <th>Enrollment Year</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>";
    
            foreach ($students as $student) {
                echo "<tr>";
                    echo "<td>{$student['student_id']}</td>";
                    echo "<td>{$student['first_name']}</td>";
                    echo "<td>{$student['last_name']}</td>";
                    echo "<td>{$student['email']}</td>";
                    echo "<td>{$student['date_of_birth']}</td>";
                    echo "<td>{$student['gender']}</td>";
                    echo "<td>{$student['major']}</td>";
                    echo "<td>{$student['enrollment_year']}</td>";
                    echo "<td>{$student['create_at']}</td>";
                    echo "<td>
                            <button class='btn btn-danger' onclick='openModal({$student['student_id']})'><i class=\"fa-solid fa-trash\"></i></button>
                            <a href=\"update.php?id={$student['student_id']}\" class=\"btn btn-dark\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                        </td>";
                echo "</tr>";
            }
            
            echo "</table>";
        } 
        
        else {
            echo "No students found.";
        }
    ?>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Confirm Deletion</h2>
            <p>Are you sure you want to delete this student?</p>
            <div class="row">
                <button id="confirmDeleteBtn" class="btn btn-danger col">Delete</button>
                <button class="btn btn-secondary col" onclick="closeModal()">Cancel</button>
            </div>
        </div>
    </div>
    </div>

    <script>
        let deleteId = null;

        function openModal(id) {
            deleteId = id;
            document.getElementById("deleteModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("deleteModal").style.display = "none";
        }

        document.getElementById("confirmDeleteBtn").addEventListener("click", function() {
            if (deleteId !== null) {
                window.location.href = "delete.php?id=" + deleteId;
            }
        });

        // Close modal if user clicks outside of it
        window.onclick = function(event) {
            let modal = document.getElementById("deleteModal");
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>