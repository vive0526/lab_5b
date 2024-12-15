<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="authenticate.php" method="POST">
        <label for="matric">Matric:</label>
        <input type="text" id="matric" name="matric" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
        <p><a href="registration.php">Register</a></p>
    </form>
</body>
</html>
