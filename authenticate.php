<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_5b";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matric = $_POST["matric"];
    $password = $_POST["password"];

    $sql = "SELECT password FROM users WHERE matric = '$matric'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            header("Location: display_users.php");
        } else {
            echo "Invalid username or password. <a href='login.php'>Try again</a>";
        }
    } else {
        echo "Invalid username or password. <a href='login.php'>Try again</a>";
    }
}

$conn->close();
?>
