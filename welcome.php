<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>

<h2>WELCOME PAGE</h2>

<h3>
    Welcome <?php echo htmlspecialchars($_SESSION['username']); ?>
</h3>

<p>Login Successful!</p>

<a href="logout.php">Logout</a>

</body>
</html>
