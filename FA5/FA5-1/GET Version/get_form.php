<!DOCTYPE html>
<html>
<head>
    <title>Personal Information (GET)</title>
</head>
<body>

<h2>Personal Information (GET)</h2>

<form method="GET" action="">
    First Name: <input type="text" name="firstname"><br><br>
    Middle Name: <input type="text" name="middlename"><br><br>
    Last Name: <input type="text" name="lastname"><br><br>
    Date of Birth: <input type="text" name="dob"><br><br>
    Address: <input type="text" name="address"><br><br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['firstname'])) {
    echo "<h3>Submitted Information:</h3>";
    echo "First Name: " . $_GET['firstname'] . "<br>";
    echo "Middle Name: " . $_GET['middlename'] . "<br>";
    echo "Last Name: " . $_GET['lastname'] . "<br>";
    echo "Date of Birth: " . $_GET['dob'] . "<br>";
    echo "Address: " . $_GET['address'] . "<br>";
}
?>

</body>
</html>