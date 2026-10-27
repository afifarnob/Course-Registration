<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Student added successfully! <br><a href='index.html'>Go Back</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>