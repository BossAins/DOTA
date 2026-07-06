<?php
session_start();
include "config.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION["user_id"];
$message = "";

$sql = "SELECT * FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $reenter_password = $_POST["reenter_password"];

    if (!password_verify($current_password, $user["password"])) {
        $message = "Current password is not the same with the old password.";
    } else if ($new_password != $reenter_password) {
        $message = "New password and Re-Enter new password should be the same.";
    } else {
        $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $update_sql = "UPDATE users SET password = ? WHERE id = ?";
        $update_stmt = mysqli_prepare($conn, $update_sql);

        mysqli_stmt_bind_param($update_stmt, "si", $new_hashed_password, $user_id);

        if (mysqli_stmt_execute($update_stmt)) {
            $message = "Password reset successful.";
        } else {
            $message = "Password reset failed.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="home-container">
    <h1>User Information Form</h1>

    <a href="logout.php" class="logout">Log-out</a>

    <div class="info">
        <p>
            <strong>Welcome</strong>
            <?php echo htmlspecialchars($user["first_name"] . " " . $user["middle_name"] . " " . $user["last_name"]); ?>
        </p>

        <p>
            <strong>Birthday:</strong>
            <?php echo htmlspecialchars($user["birthday"]); ?>
        </p>

        <p><strong>Contact Details</strong></p>

        <p class="indent">
            <strong>Email:</strong>
            <?php echo htmlspecialchars($user["email"]); ?>
        </p>

        <p class="indent">
            <strong>Contact:</strong>
            <?php echo htmlspecialchars($user["contact_number"]); ?>
        </p>
    </div>

    <hr>

    <h3>RESET PASSWORD</h3>

    <form method="POST" class="reset-form">
        <label>Enter Current Password:</label>
        <input type="password" name="current_password" required>

        <label>Enter New Password:</label>
        <input type="password" name="new_password" required>

        <label>Re-Enter New Password:</label>
        <input type="password" name="reenter_password" required>

        <button type="submit">Reset Password</button>
    </form>

    <p class="message"><?php echo $message; ?></p>

    <p class="footer">&copy; Crix Brix</p>
</div>

</body>
</html>