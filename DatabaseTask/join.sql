-- #1. Write an inner join to fetch students and the courses they are enrolled in.

SELECT s.first_name, s.last_name, c.course_name, c.course_code
FROM Students s
INNER JOIN Enrollments e ON s.student_id = e.student_id
INNER JOIN Courses c ON e.course_id = c.course_id;

-- #2. Write a left join to show instructors and courses they teach.

SELECT i.first_name, i.last_name, c.course_name, c.course_code
FROM Instructors i
LEFT JOIN CourseAssignments ca ON i.instructor_id = ca.instructor_id
LEFT JOIN Courses c ON ca.course_id = c.course_id;

-- #3. Write a query using union to list all students and instructors.

SELECT first_name, last_name, 'Student' AS role
FROM Students
UNION
SELECT first_name, last_name, 'Instructor' AS role
FROM Instructors;