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
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container center">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>

    <p>You are now logged in.</p>

    <a href="logout.php" class="btn">Logout</a>
</div>

</body>
</html>