<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

$error = "";

$savedUsername = isset($_COOKIE["saved_username"]) ? $_COOKIE["saved_username"] : "";
$savedPassword = isset($_COOKIE["saved_password"]) ? $_COOKIE["saved_password"] : "";

function checkLogin($username, $password) {
    static $validUsername = "user123";
    static $validPassword = "12345";

    return $username === $validUsername && $password === $validPassword;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (checkLogin($username, $password)) {
        $_SESSION["username"] = $username;

        if (isset($_POST["remember"])) {
            setcookie("saved_username", $username, time() + (86400 * 7), "/");
            setcookie("saved_password", $password, time() + (86400 * 7), "/");
        } else {
            setcookie("saved_username", "", time() - 3600, "/");
            setcookie("saved_password", "", time() - 3600, "/");
        }

        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Module</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">

    <div class="top-bar">
        <div class="logo">G</div>
        <div class="menu">&#9776;</div>
    </div>

    <form method="POST" action="">
        <label>Username</label>
        <input 
            type="text" 
            name="username" 
            value="<?php echo htmlspecialchars($savedUsername); ?>" 
            required
        >

        <label>Password</label>
        <input 
            type="password" 
            name="password" 
            value="<?php echo htmlspecialchars($savedPassword); ?>" 
            required
        >

        <div class="remember-row">
            <label>
                Remember Me
                <input type="checkbox" name="remember" <?php echo $savedUsername ? "checked" : ""; ?>>
            </label>

            <button type="submit">Submit</button>
        </div>
    </form>

    <?php
    if (!empty($error)) {
        echo "<p class='error'>$error</p>";
    }
    ?>

    <p class="green-footer">&copy; GENE JUSTINE P. ROSALES</p>

</div>

</body>
</html>