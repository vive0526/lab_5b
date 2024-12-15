<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_5b";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT matric, name, role FROM users";
$result = $conn->query($sql);

echo "<h1>Users</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Matric</th><th>Name</th><th>Access Level</th><th>Action</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['matric']}</td>
                <td>{$row['name']}</td>
                <td>{$row['role']}</td>
                <td>
                    <a href='update_user.php?matric={$row['matric']}'>Update</a> |
                    <a href='delete_user.php?matric={$row['matric']}'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

$conn->close();
?>
