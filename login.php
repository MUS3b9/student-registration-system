<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Admin Login</h2>

<form method="POST" action="login_process.php">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
    <br>
    <a href="signup.php">Create new account</a>

</form>

</body>
</html>
