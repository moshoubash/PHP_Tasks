SELECT 
    s.first_name AS student_first_name,
    s.last_name AS student_last_name,
    s.email AS student_email,
    s.major AS student_major,
    GROUP_CONCAT(c.course_name ORDER BY c.course_code) AS courses_enrolled,
    GROUP_CONCAT(i.first_name, ' ', i.last_name ORDER BY c.course_code) AS instructors,
    GROUP_CONCAT(e.grade ORDER BY c.course_code) AS grades,
    SUM(c.credits) AS total_credits
FROM Students s
INNER JOIN Enrollments e ON s.student_id = e.student_id
INNER JOIN Courses c ON e.course_id = c.course_id
INNER JOIN CourseAssignments ca ON c.course_id = ca.course_id
INNER JOIN Instructors i ON ca.instructor_id = i.instructor_id
GROUP BY s.student_id
ORDER BY s.student_id;