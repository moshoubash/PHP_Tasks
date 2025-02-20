-- #1 Create a function to calculate a student's age based on date_of_birth.
DELIMITER //

CREATE FUNCTION calculateAge(birth_date DATE) 
RETURNS INT
BEGIN
    DECLARE age INT;
    SET age = TIMESTAMPDIFF(YEAR, birth_date, CURDATE());
    RETURN age;
END //

DELIMITER ;

-- GET DATA

SELECT 
    first_name,
    last_name,
    date_of_birth,
    calculateAge(date_of_birth) AS age
FROM 
    Students;


-- #2 Create a stored procedure to enroll a student in a course.

DELIMITER //

CREATE PROCEDURE EnrollStudent(
    IN student_id INT,
    IN course_id INT,
    IN semester VARCHAR(6),
    IN year INT,
    IN grade CHAR(1)
)
BEGIN
    INSERT INTO Enrollments (student_id, course_id, grade)
    VALUES (student_id, course_id, grade);
END //

DELIMITER ;

-- calling the prosedure :
CALL EnrollStudent(1, 1, 'Fall', 2023, 'A');

-- #3 Use aggregate functions to show average grades by department.
SELECT
    c.department,
    AVG(CASE
        WHEN e.grade = 'A' THEN 4.0
        WHEN e.grade = 'B' THEN 3.0
        WHEN e.grade = 'C' THEN 2.0
        WHEN e.grade = 'D' THEN 1.0
        WHEN e.grade = 'F' THEN 0.0
        ELSE NULL
    END) AS average_grade
FROM
    Enrollments e
JOIN
    Courses c ON e.course_id = c.course_id
GROUP BY
    c.department;