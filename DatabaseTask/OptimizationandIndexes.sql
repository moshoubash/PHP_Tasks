-- #1 Create an index on the course_code to speed up searches.

CREATE INDEX idx_course_code ON Courses(course_code);


-- #2 Optimize a query using EXPLAIN to fetch students enrolled in a course.

EXPLAIN SELECT s.first_name, s.last_name, s.email
FROM Students s
JOIN Enrollments e ON s.student_id = e.student_id
WHERE e.course_id = 1;