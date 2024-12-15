<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_5b";

$conn = new mysqli($servername, $username, $password, $dbname);

$matric = $_GET["matric"];
$sql = "SELECT * FROM users WHERE matric = '$matric'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="save_update.php" method="POST">
        <input type="hidden" name="matric" value="<?php echo $row['matric']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br>

        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="student" <?php if ($row['role'] == "student") echo "selected"; ?>>Student</option>
            <option value="lecturer" <?php if ($row['role'] == "lecturer") echo "selected"; ?>>Lecturer</option>
        </select><br><br>

        <button type="submit">Update</button>
        <a href="display_users.php">Cancel</a>
    </form>
</body>
</html>
