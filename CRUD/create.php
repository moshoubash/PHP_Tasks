<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Data insert</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <form action="index.php" method="post">
        <h1>Student</h1>
        <hr>
        <label for="first_name">First Name : </label>
        <input type="text" id="first_name" name="first_name" required>
        <br>
        <label for="last_name">Last Name : </label>
        <input type="text" id="last_name" name="last_name" required>
        <br>
        <label for="email">Email : </label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="date_of_birth">Date of Birth : </label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>
        <br>
        <label for="gender">Gender : </label>
        <select name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <label for="major">Major : </label>
        <input type="text" id="major" name="major" required>
        <br>
        <label for="enrollment_year">Enrollment year : </label>
        <input type="number" id="enrollment_year" name="enrollment_year" required>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>