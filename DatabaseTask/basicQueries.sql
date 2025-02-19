-- #1

SELECT * FROM Students;

-- #2

SELECT COUNT(*) AS total_courses FROM Courses;

-- #3

SELECT s.first_name, s.last_name 
FROM Students s
JOIN Enrollments e ON s.student_id = e.student_id
WHERE e.course_id = 1;

-- #4

SELECT email 
FROM Instructors
WHERE department = 'Computer Science';