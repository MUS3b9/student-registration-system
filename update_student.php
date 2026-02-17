<?php
include "db_connection.php";

$id = $_POST['id'];

$sql = "UPDATE students SET
student_number='$_POST[student_number]',
full_name='$_POST[full_name]',
email='$_POST[email]',
department='$_POST[department]',
phone='$_POST[phone]',
birth_date='$_POST[birth_date]'
WHERE id=$id";

mysqli_query($conn, $sql);
header("Location: students.php");
?>
