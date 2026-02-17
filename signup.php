<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>

<h2>Create Account</h2>

<form method="POST" action="signup_process.php">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Sign Up</button>
</form>

<br>
<a href="login.php">Already have an account? Login</a>

</body>
</html>
