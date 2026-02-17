<?php
include "db_connection.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$s = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<form method="POST" action="update_student.php">
<input type="hidden" name="id" value="<?php echo $s['id']; ?>">

Student No:<br>
<input type="text" name="student_number" value="<?php echo $s['student_number']; ?>"><br><br>

Name:<br>
<input type="text" name="full_name" value="<?php echo $s['full_name']; ?>"><br><br>

Email:<br>
<input type="email" name="email" value="<?php echo $s['email']; ?>"><br><br>

Department:<br>
<input type="text" name="department" value="<?php echo $s['department']; ?>"><br><br>

Phone:<br>
<input type="text" name="phone" value="<?php echo $s['phone']; ?>"><br><br>

DOB:<br>
<input type="date" name="birth_date" value="<?php echo $s['birth_date']; ?>"><br><br>

<button type="submit">Update</button>
</form>

</body>
</html>
