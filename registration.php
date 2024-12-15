
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Register User</h1>
    <form action="register_user.php" method="POST">
        <label for="matric">Matric:</label>
        <input type="text" id="matric" name="matric" required><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="student">Student</option>
            <option value="lecturer">Lecturer</option>
        </select><br><br>

        <button type="submit">Register</button>
        <p><a href="login.php">Login</a></p>
    </form>
</body>
</html>
