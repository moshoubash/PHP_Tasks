INSERT INTO Students (first_name, last_name, email, date_of_birth, gender, major, enrollment_year)
VALUES 
('John', 'Doe', 'john.doe@example.com', '2000-01-01', 'Male', 'Computer Science', 2018),
('Jane', 'Smith', 'jane.smith@example.com', '2001-02-02', 'Female', 'Mathematics', 2019),
('Alice', 'Johnson', 'alice.johnson@example.com', '2000-03-03', 'Female', 'Physics', 2018),
('Bob', 'Brown', 'bob.brown@example.com', '1999-04-04', 'Male', 'Chemistry', 2017),
('Eve', 'Davis', 'eve.davis@example.com', '2002-05-05', 'Female', 'Biology', 2020),
('Charlie', 'Miller', 'charlie.miller@example.com', '2000-06-06', 'Male', 'Computer Science', 2018),
('Grace', 'Wilson', 'grace.wilson@example.com', '2001-07-07', 'Female', 'Mathematics', 2019),
('David', 'Martinez', 'david.martinez@example.com', '1998-08-08', 'Male', 'Physics', 2016),
('Hannah', 'Taylor', 'hannah.taylor@example.com', '2000-09-09', 'Female', 'Chemistry', 2018),
('Frank', 'Anderson', 'frank.anderson@example.com', '1999-10-10', 'Male', 'Biology', 2017);

INSERT INTO Instructors (first_name, last_name, email, hire_date, department)
VALUES 
('Emily', 'Clark', 'emily.clark@example.com', '2010-01-01', 'Computer Science'),
('Michael', 'Lewis', 'michael.lewis@example.com', '2011-02-02', 'Mathematics'),
('Sarah', 'Walker', 'sarah.walker@example.com', '2012-03-03', 'Physics'),
('James', 'Hall', 'james.hall@example.com', '2013-04-04', 'Chemistry'),
('Laura', 'Allen', 'laura.allen@example.com', '2014-05-05', 'Biology');

INSERT INTO Courses (course_name, course_code, credits, department)
VALUES 
('Intro to Computer Science', 'CS101', 4, 'Computer Science'),
('Calculus I', 'MATH101', 3, 'Mathematics'),
('General Physics', 'PHYS101', 4, 'Physics'),
('Organic Chemistry', 'CHEM101', 3, 'Chemistry'),
('Introduction to Biology', 'BIO101', 3, 'Biology');

INSERT INTO CourseAssignments (instructor_id, course_id, semester, year)
VALUES 
(1, 1, 'Fall', 2023),
(2, 2, 'Fall', 2023),
(3, 3, 'Fall', 2023),
(4, 4, 'Fall', 2023),
(5, 5, 'Fall', 2023);

INSERT INTO Enrollments (student_id, course_id, grade)
VALUES 
(1, 1, 'A'), (1, 2, 'B'),
(2, 3, 'A'), (2, 4, 'B'),
(3, 5, 'A'), (3, 1, 'B'),
(4, 2, 'A'), (4, 3, 'B'),
(5, 4, 'A'), (5, 5, 'B'),
(6, 1, 'A'), (6, 3, 'B'),
(7, 2, 'A'), (7, 4, 'B'),
(8, 5, 'A'), (8, 1, 'B'),
(9, 2, 'A'), (9, 3, 'B'),
(10, 4, 'A'), (10, 5, 'B');
