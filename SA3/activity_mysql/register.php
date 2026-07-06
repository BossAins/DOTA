<?php
session_start();
include "config.php";

if (isset($_SESSION["user_id"])) {
    header("Location: home.php");
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $contact_number = $_POST["contact_number"];

    if ($password != $confirm_password) {
        $message = "Password and confirm password are not the same.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users 
        (first_name, middle_name, last_name, username, password, birthday, email, contact_number)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param(
            $stmt,
            "ssssssss",
            $first_name,
            $middle_name,
            $last_name,
            $username,
            $hashed_password,
            $birthday,
            $email,
            $contact_number
        );

        if (mysqli_stmt_execute($stmt)) {
            $message = "Registration successful. You may now login.";
        } else {
            $message = "Username already exists or registration failed.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="register-container">
    <h3>My Personal Information</h3>

    <form method="POST">
        <label>First Name</label>
        <input type="text" name="first_name" required>

        <label>Middle Name</label>
        <input type="text" name="middle_name" required>

        <label>Last Name</label>
        <input type="text" name="last_name" required>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <label>Birthday</label>
        <input type="text" name="birthday" placeholder="January 30 1993" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact_number" required>

        <button type="submit">Submit</button>
    </form>

    <p class="message"><?php echo $message; ?></p>

    <p>
        Already registered?
        <a href="login.php">Login here</a>
    </p>

    <p class="footer">&copy; Crix Brix</p>
</div>

</body>
</html>