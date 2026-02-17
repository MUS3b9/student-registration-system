<?php
include "db_connection.php";

/* Departments */
$departments = mysqli_query($conn, "SELECT DISTINCT department FROM students");

/* Filter */
$selected_department = "";
$sql = "SELECT * FROM students";

if (isset($_GET['department']) && $_GET['department'] != "") {
    $selected_department = $_GET['department'];
    $sql .= " WHERE department='$selected_department'";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

<h2>Students List</h2>

<!-- Filter -->
<form method="GET">
    <strong>Search By Department:</strong>
    <select name="department">
        <option value="">All</option>
        <?php while ($d = mysqli_fetch_assoc($departments)) { ?>
            <option value="<?php echo $d['department']; ?>"
                <?php if ($d['department'] == $selected_department) echo "selected"; ?>>
                <?php echo $d['department']; ?>
            </option>
        <?php } ?>
    </select>
    <button type="submit">Search</button>
</form>

<hr>

<!-- Update All -->
<h3>Update Department for All Students</h3>
<form method="POST" action="update_all_departments.php">
    <input type="text" name="new_department" required>
    <button type="submit">Apply</button>
</form>

<hr>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Student No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Department</th>
    <th>Phone</th>
    <th>DOB</th>
    <th>Action</th>
</tr>

<?php while ($s = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $s['id']; ?></td>
    <td><?php echo $s['student_number']; ?></td>
    <td><?php echo $s['full_name']; ?></td>
    <td><?php echo $s['email']; ?></td>
    <td><?php echo $s['department']; ?></td>
    <td><?php echo $s['phone']; ?></td>
    <td><?php echo $s['birth_date']; ?></td>
    <td>
        <a href="edit_student.php?id=<?php echo $s['id']; ?>">Update</a>
    </td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.html">Add Student</a>

</body>
</html>
