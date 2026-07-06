<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

$result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $lastName = $_POST["last_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];

    if ($password !== $confirmPassword) {
        $error = "Password and Confirm Password are not the same.";
    } else {
        $fullName = $firstName . " " . $middleName . " " . $lastName;

        $result = "
            <div class='result'>
                <p><strong>Full Name:</strong> " . htmlspecialchars($fullName) . "</p>
                <p><strong>Username:</strong> " . htmlspecialchars($username) . "</p>
                <p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>
                <p><strong>Birthday:</strong> " . htmlspecialchars($birthday) . "</p>
                <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                <p><strong>Contact Number:</strong> " . htmlspecialchars($contact) . "</p>
            </div>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Module</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>My Personal Information</h2>

    <form method="POST" action="">
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
        <input type="text" name="contact" required>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (!empty($error)) {
        echo "<p class='error'>$error</p>";
    }

    echo $result;
    ?>

    <p class="footer">&copy; Crix Brix</p>
</div>

</body>
</html>