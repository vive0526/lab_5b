
<?php
$conn = new mysqli("localhost", "root", "", "lab_5b");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matric = $_POST["matric"];
    $name = $_POST["name"];
    $role = $_POST["role"];

    $sql = "UPDATE users SET name='$name', role='$role' WHERE matric='$matric'";

    if ($conn->query($sql) === TRUE) {
        header("Location: display_users.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
