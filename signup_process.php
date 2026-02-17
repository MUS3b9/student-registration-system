<?php
include "db_connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

/* منع تكرار اسم المستخدم */
$check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($check) > 0) {
    echo "Username already exists";
    exit();
}

/* حفظ المستخدم */
$sql = "INSERT INTO users (username, password)
        VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
} else {
    echo "Error creating account";
}
?>
