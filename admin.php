<?php
include "auth.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>

<h2>Admin Panel</h2>

<p>Welcome, <?php echo $_COOKIE['username']; ?></p>

<ul>
    <li><a href="students.php">Manage Students</a></li>
    <li><a href="index.php">Add Student</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
