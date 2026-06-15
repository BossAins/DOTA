<!DOCTYPE html>
<html>
<head>
    <title>Personal Information (POST)</title>
</head>
<body>

<h2>Personal Information (POST)</h2>

<form method="POST" action="">
    First Name: <input type="text" name="firstname"><br><br>
    Middle Name: <input type="text" name="middlename"><br><br>
    Last Name: <input type="text" name="lastname"><br><br>
    Date of Birth: <input type="text" name="dob"><br><br>
    Address: <input type="text" name="address"><br><br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Submitted Information:</h3>";
    echo "First Name: " . $_POST['firstname'] . "<br>";
    echo "Middle Name: " . $_POST['middlename'] . "<br>";
    echo "Last Name: " . $_POST['lastname'] . "<br>";
    echo "Date of Birth: " . $_POST['dob'] . "<br>";
    echo "Address: " . $_POST['address'] . "<br>";
}
?>

</body>
</html>