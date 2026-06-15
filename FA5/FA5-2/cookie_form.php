<!DOCTYPE html>
<html>
<head>
    <title>Personal Information (Cookies)</title>
</head>
<body>

<h2>Enter Your Personal Information</h2>

<form method="POST">
    First Name: <input type="text" name="firstname"><br><br>
    Middle Name: <input type="text" name="middlename"><br><br>
    Last Name: <input type="text" name="lastname"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<hr>

<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];

    
    setcookie("fname", $fname, time() + 10); 
    setcookie("mname", $mname, time() + 20); 
    setcookie("lname", $lname, time() + 30); 

    echo "<p>Cookies are set. Refresh the page to see them.</p>";
}

echo "<h3>Stored Cookies:</h3>";


if (isset($_COOKIE['fname'])) {
    echo "First Name: " . $_COOKIE['fname'] . "<br>";
} else {
    echo "First Name: (Not available yet or expired)<br>";
}

if (isset($_COOKIE['mname'])) {
    echo "Middle Name: " . $_COOKIE['mname'] . "<br>";
} else {
    echo "Middle Name: (Not available yet or expired)<br>";
}

if (isset($_COOKIE['lname'])) {
    echo "Last Name: " . $_COOKIE['lname'] . "<br>";
} else {
    echo "Last Name: (Not available yet or expired)<br>";
}
?>

</body>
</html>