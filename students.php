<?php
include "db_connection.php";

/* جلب التخصصات بدون تكرار */
$departments = mysqli_query($conn, "SELECT DISTINCT department FROM students");

/* فلترة */
$selected_department = "";
$sql = "SELECT * FROM students";

if (isset($_GET['department']) && $_GET['department'] != "") {
    $selected_department = $_GET['department'];
    $sql .= " WHERE department = '$selected_department'";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
</head>
<body>

<h2>Students List</h2>

<!-- 🔍 الفلتر -->
<form method="GET">
    <label><strong>Search By Department:</strong></label>

    <select name="department">
        <option value="">-- All Departments --</option>

        <?php while ($row = mysqli_fetch_assoc($departments)) { ?>
            <option value="<?php echo $row['department']; ?>"
                <?php if ($row['department'] == $selected_department) echo "selected"; ?>>
                <?php echo $row['department']; ?>
            </option>
        <?php } ?>
    </select>

    <button type="submit">Search</button>
</form>

<br><br>

<!-- 📋 جدول الطلاب -->
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Student Number</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Department</th>
        <th>Phone</th>
        <th>Date of Birth</th>
    </tr>

    <?php while ($student = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $student['id']; ?></td>
        <td><?php echo $student['student_number']; ?></td>
        <td><?php echo $student['full_name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['department']; ?></td>
        <td><?php echo $student['phone']; ?></td>
        <td><?php echo $student['birth_date']; ?></td>
    </tr>
    <?php } ?>
</table>

<br>
<a href="index.html">➕ Add New Student</a>

</body>
</html>
