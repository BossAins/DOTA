<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity A</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container center">
    <h2>Activity A</h2>

    <a href="registration.php" class="btn">Registration Module</a>
    <a href="login.php" class="btn">Login Module</a>
</div>

</body>
</html>