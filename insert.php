<?php
include "db_connection.php";

$student_number = $_POST['student_number'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$department = $_POST['department'];
$phone = $_POST['phone'];
$birth_date = $_POST['birth_date'];

$sql = "INSERT INTO students
(student_number, full_name, email, department, phone, birth_date)
VALUES
('$student_number','$full_name','$email','$department','$phone','$birth_date')";

if (mysqli_query($conn, $sql)) {
    header("Location: students.php");
} else {
    echo "Error";
}
?>
