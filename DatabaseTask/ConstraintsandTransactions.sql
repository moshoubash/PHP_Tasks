-- #1 Add a constraint to ensure unique student emails.
ALTER TABLE Students
ADD CONSTRAINT unique_email UNIQUE (email);

-- #2 Write a transaction to enroll a student if the course capacity isn't exceeded.
DELIMITER //

CREATE PROCEDURE EnrollStudentTransaction(IN p_student_id INT, IN p_course_id INT)
BEGIN
    DECLARE current_enrollment INT;
    DECLARE course_capacity INT;
    
    SELECT COUNT(*) INTO current_enrollment
    FROM Enrollments
    WHERE course_id = p_course_id;
    
    SELECT capacity INTO course_capacity
    FROM Courses
    WHERE course_code = p_course_id
    LIMIT 1;
    
    START TRANSACTION;
    
    -- Check if the course is full
    IF current_enrollment < course_capacity THEN
        INSERT INTO Enrollments (student_id, course_id, grade)
        VALUES (p_student_id, p_course_id, NULL);
        
        COMMIT;
        SELECT 'Enrollment successful' AS message;
    ELSE
        ROLLBACK;
        SELECT 'Enrollment failed: Course is full' AS message;
    END IF;
END //

DELIMITER ;

-- after calling the prosedure :
-- message : Enrollment failed: Course is full