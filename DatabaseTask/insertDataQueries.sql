INSERT INTO Students (student_id, first_name, last_name, email, date_of_birth, gender, major, enrollment_year)
VALUES
(1, 'John', 'Doe', 'johndoe@example.com', '2001-05-14', 'M', 'Computer Science', 2020),
(2, 'Jane', 'Smith', 'janesmith@example.com', '2000-07-21', 'F', 'Electrical Engineering', 2019),
(3, 'Alice', 'Johnson', 'alicejohnson@example.com', '1999-09-15', 'F', 'Mechanical Engineering', 2018),
(4, 'Bob', 'Williams', 'bobwilliams@example.com', '2002-01-30', 'M', 'Civil Engineering', 2021),
(5, 'Emily', 'Davis', 'emilydavis@example.com', '2001-11-04', 'F', 'Mathematics', 2020),
(6, 'Michael', 'Brown', 'michaelbrown@example.com', '2000-03-18', 'M', 'Biology', 2019),
(7, 'Sarah', 'Jones', 'sarahjones@example.com', '2001-08-09', 'F', 'Psychology', 2020),
(8, 'David', 'Garcia', 'davidgarcia@example.com', '2000-12-12', 'M', 'Physics', 2019),
(9, 'Sophia', 'Martinez', 'sophiamartinez@example.com', '2001-04-22', 'F', 'Chemistry', 2020),
(10, 'Daniel', 'Wilson', 'danielwilson@example.com', '2002-02-10', 'M', 'Environmental Science', 2021);

INSERT INTO Instructors (instructor_id, first_name, last_name, email, hire_date, department)
VALUES
(1, 'Dr. Alice', 'Taylor', 'alice.taylor@example.com', '2015-08-01', 'Computer Science'),
(2, 'Prof. Mark', 'Harris', 'mark.harris@example.com', '2014-09-12', 'Electrical Engineering'),
(3, 'Dr. Rachel', 'Moore', 'rachel.moore@example.com', '2016-06-23', 'Mechanical Engineering'),
(4, 'Prof. James', 'Clark', 'james.clark@example.com', '2013-03-15', 'Civil Engineering'),
(5, 'Dr. Laura', 'Lee', 'laura.lee@example.com', '2017-11-20', 'Biology');

INSERT INTO Courses (course_id, course_name, course_code, credits, department)
VALUES
(1, 'Data Structures', 'CS101', 3, 'Computer Science'),
(2, 'Digital Circuits', 'EE201', 4, 'Electrical Engineering'),
(3, 'Thermodynamics', 'ME301', 3, 'Mechanical Engineering'),
(4, 'Structural Analysis', 'CE401', 3, 'Civil Engineering'),
(5, 'Biology 101', 'BIO101', 3, 'Biology');

INSERT INTO Enrollments (enrollment_id, student_id, course_id, grade)
VALUES
(1, 1, 1, 'A'),
(2, 1, 5, 'B'),
(3, 2, 2, 'A'),
(4, 2, 3, 'C'),
(5, 3, 1, 'B'),
(6, 3, 2, 'A'),
(7, 4, 3, 'C'),
(8, 4, 5, 'B'),
(9, 5, 1, 'A'),
(10, 5, 4, 'B'),
(11, 6, 3, 'A'),
(12, 6, 4, 'B'),
(13, 7, 2, 'B'),
(14, 7, 5, 'A'),
(15, 8, 1, 'C'),
(16, 8, 4, 'A'),
(17, 9, 1, 'B'),
(18, 9, 5, 'A'),
(19, 10, 2, 'C'),
(20, 10, 3, 'B');

INSERT INTO Course_Assignments (assignment_id, instructor_id, course_id, semester, year)
VALUES
(1, 1, 1, 'Fall', 2023),
(2, 2, 2, 'Spring', 2024),
(3, 3, 3, 'Fall', 2023),
(4, 4, 4, 'Spring', 2024),
(5, 5, 5, 'Fall', 2023);