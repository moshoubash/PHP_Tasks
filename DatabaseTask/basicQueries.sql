-- #1 List all students along with their details.

SELECT * FROM Students;

-- #2 Find the total number of courses offered by the university.

SELECT COUNT(*) AS total_courses FROM Courses;

-- #3 Show the names of all students enrolled in a specific course.

SELECT s.first_name, s.last_name 
FROM Students s
JOIN Enrollments e ON s.student_id = e.student_id
WHERE e.course_id = 1;

-- #4 Retrieve the email addresses of all instructors in a department.

SELECT email 
FROM Instructors
WHERE department = 'Computer Science';