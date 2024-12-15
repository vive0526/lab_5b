<?php
$conn = new mysqli("localhost", "root", "", "lab_5b");

$matric = $_GET["matric"];
$sql = "DELETE FROM users WHERE matric='$matric'";

if ($conn->query($sql) === TRUE) {
    header("Location: display_users.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
