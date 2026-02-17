<?php
include "db_connection.php";

$new_department = $_POST['new_department'];

mysqli_query($conn, "UPDATE students SET department='$new_department'");
header("Location: students.php");
?>
