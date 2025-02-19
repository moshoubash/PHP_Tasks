-- #9 List students taking more than 3 courses in the current semester.
SELECT s.first_name, s.last_name, COUNT(e.course_id) AS courses_taken
FROM Students s
JOIN Enrollments e ON s.student_id = e.student_id
JOIN CourseAssignments ca ON e.course_id = ca.course_id
WHERE ca.semester = 'Fall' AND ca.year = 2023
GROUP BY s.student_id, s.first_name, s.last_name
HAVING COUNT(e.course_id) > 3;

-- #10 Generate a report of students with incomplete grades.
SELECT s.first_name, s.last_name, c.course_name, e.grade
FROM Students s
JOIN Enrollments e ON s.student_id = e.student_id
JOIN Courses c ON e.course_id = c.course_id
WHERE e.grade IS NULL;

-- #11 Show the student with the highest average grade across courses.
SELECT s.first_name, s.last_name, AVG(CASE 
                                        WHEN e.grade = 'A' THEN 4
                                        WHEN e.grade = 'B' THEN 3
                                        WHEN e.grade = 'C' THEN 2
                                        WHEN e.grade = 'D' THEN 1
                                        WHEN e.grade = 'F' THEN 0
                                        ELSE NULL
                                    END) AS average_grade
FROM Students s
JOIN Enrollments e ON s.student_id = e.student_id
GROUP BY s.student_id, s.first_name, s.last_name
ORDER BY average_grade DESC
LIMIT 1;

-- #12 Find the department with the most courses taught this year.
SELECT c.department, COUNT(c.course_id) AS courses_taught
FROM Courses c
JOIN CourseAssignments ca ON c.course_id = ca.course_id
WHERE ca.year = 2023
GROUP BY c.department
ORDER BY courses_taught DESC
LIMIT 1;

-- #13 List courses with no student enrollments.
SELECT c.course_name 
FROM Courses c
LEFT JOIN Enrollments e ON c.course_id = e.course_id
WHERE e.student_id IS NULL;