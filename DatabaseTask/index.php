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
        CREATE TABLE IF NOT EXISTS Instructors (
            instructor_id INT PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(50) NOT NULL,
            last_name VARCHAR(50) NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            hire_date DATE NOT NULL,
            department VARCHAR(100) NOT NULL
        );
    ";
    $conn->query($sqlInstructors);

    $sqlEnrollments = "
        CREATE TABLE IF NOT EXISTS Enrollments (
            enrollment_id INT PRIMARY KEY AUTO_INCREMENT,
            student_id INT NOT NULL,
            course_id INT NOT NULL,
            grade DECIMAL(5, 2),
            CONSTRAINT fk_student FOREIGN KEY (student_id) REFERENCES Students(student_id) ON DELETE CASCADE,
            CONSTRAINT fk_course FOREIGN KEY (course_id) REFERENCES Courses(course_id) ON DELETE CASCADE
        );
    ";
    $conn->query($sqlEnrollments);

    $sqlCourseAssignments = "
        CREATE TABLE IF NOT EXISTS CourseAssignments (
            assignment_id INT PRIMARY KEY AUTO_INCREMENT,
            instructor_id INT NOT NULL,
            course_id INT NOT NULL,
            semester VARCHAR(20) NOT NULL,
            year INT NOT NULL,
            CONSTRAINT fk_instructor FOREIGN KEY (instructor_id) REFERENCES Instructors(instructor_id) ON DELETE CASCADE,
            CONSTRAINT fk_course_assignment FOREIGN KEY (course_id) REFERENCES Courses(course_id) ON DELETE CASCADE
        );
    ";
    $conn->query($sqlCourseAssignments);

    echo "Tables created successfully.";

    $conn->close();
?>