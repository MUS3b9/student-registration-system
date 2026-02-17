<?php
include "db_connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = mysqli_prepare(
    $conn,
    "SELECT id, username FROM users WHERE username=? AND password=?"
);

mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    /* إنشاء Cookie لمدة 1 ساعة */
    setcookie("user_id", $user['id'], time() + 3600, "/");
    setcookie("username", $user['username'], time() + 3600, "/");

    header("Location: admin.php");
} else {
    echo "Invalid username or password";
}
?>
