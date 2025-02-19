-- #5 List all courses along with the number of students enrolled.
SELECT c.course_name, COUNT(e.student_id) AS number_of_students
FROM Courses c
LEFT JOIN Enrollments e ON c.course_id = e.course_id
GROUP BY c.course_id, c.course_name;

-- #6 Find the students who were enrolled in a course with a grade of 'A'.
SELECT s.first_name, s.last_name, c.course_name
FROM Students s
JOIN Enrollments e ON s.student_id = e.student_id
JOIN Courses c ON e.course_id = c.course_id
WHERE e.grade = 'A';

-- #7 Retrieve the courses and the instructors assigned for a specific semester.
SELECT c.course_name, i.first_name, i.last_name
FROM CourseAssignments ca
JOIN Courses c ON ca.course_id = c.course_id
JOIN Instructors i ON ca.instructor_id = i.instructor_id
WHERE ca.semester = 'Fall' AND ca.year = 2023;

-- #8 Find the average grade for a particular course.
SELECT c.course_name, AVG(CASE 
                             WHEN e.grade = 'A' THEN 4
                             WHEN e.grade = 'B' THEN 3
                             WHEN e.grade = 'C' THEN 2
                             WHEN e.grade = 'D' THEN 1
                             WHEN e.grade = 'F' THEN 0
                             ELSE NULL
                         END) AS average_grade
FROM Enrollments e
JOIN Courses c ON e.course_id = c.course_id
WHERE e.course_id = 1
GROUP BY c.course_id, c.course_name;