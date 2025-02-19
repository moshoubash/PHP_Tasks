<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "university";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    # I CREATE THE FIRST 2 TABLES USING THE GUI FOR MYSQL

    $sqlInstructors = "
        CREATE TABLE Instructors (
            instructor_id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(50),
            last_name VARCHAR(50),
            email VARCHAR(100) UNIQUE,
            hire_date DATE,
            department VARCHAR(100)
        );
    ";
    $conn->query($sqlInstructors);

    $sqlEnrollments = "
        CREATE TABLE Enrollments (
            enrollment_id INT AUTO_INCREMENT PRIMARY KEY,
            student_id INT,
            course_id INT,
            grade CHAR(2),
            FOREIGN KEY (student_id) REFERENCES Students(student_id),
            FOREIGN KEY (course_id) REFERENCES Courses(course_id)
        );
    ";
    $conn->query($sqlEnrollments);

    $sqlCourseAssignments = "
        CREATE TABLE CourseAssignments (
            assignment_id INT AUTO_INCREMENT PRIMARY KEY,
            instructor_id INT,
            course_id INT,
            semester VARCHAR(10),
            year YEAR,
            FOREIGN KEY (instructor_id) REFERENCES Instructors(instructor_id),
            FOREIGN KEY (course_id) REFERENCES Courses(course_id)
        );
    ";
    $conn->query($sqlCourseAssignments);

    echo "Tables created successfully.";

    $conn->close();
?>