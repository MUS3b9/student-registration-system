<?php
include "db_connection.php";

mysqli_query($conn, "DELETE FROM students");

header("Location: students.php");
?>
