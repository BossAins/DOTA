<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Student Information
    $firstName = ucfirst(strtolower($_POST['first_name']));
    $lastName  = ucfirst(strtolower($_POST['last_name']));
    $fullName  = strtoupper("$lastName, $firstName");

    $birthDate = $_POST['birth_date'];
    $gender    = $_POST['gender'];
    $address   = strtoupper($_POST['address']);
    $contact   = number_format($_POST['contact'], 0, '', '-');
    $email     = strtolower($_POST['email']);

    // Parent / Guardian
    $parentName = ucwords(strtolower($_POST['parent_name']));
    $relationship = ucfirst($_POST['relationship']);
    $parentContact = number_format($_POST['parent_contact'], 0, '', '-');
    $parentEmail = strtolower($_POST['parent_email']);

    // Academic Information
    $grade  = strtoupper($_POST['grade']);
    $school = ucwords(strtolower($_POST['school']));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Enrollment Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Student Enrollment Form</h1>

<form method="post">

<h2>Student Information</h2>

<div class="row">
    <div>
        <label>First Name</label>
        <input type="text" name="first_name" required>
    </div>
    <div>
        <label>Last Name</label>
        <input type="text" name="last_name" required>
    </div>
</div>

<div class="row">
    <div>
        <label>Birth Date</label>
        <input type="date" name="birth_date" required>
    </div>
    <div>
        <label>Gender</label><br>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
    </div>
</div>

<label>Address</label>
<input type="text" name="address" required>

<div class="row">
    <div>
        <label>Contact Number</label>
        <input type="text" name="contact" required>
    </div>
    <div>
        <label>Email Address</label>
        <input type="email" name="email" required>
    </div>
</div>

<h2>Parent / Guardian Information</h2>

<label>Parent / Guardian Name</label>
<input type="text" name="parent_name" required>

<div class="row">
    <div>
        <label>Relationship</label>
        <input type="text" name="relationship" required>
    </div>
    <div>
        <label>Contact Number</label>
        <input type="text" name="parent_contact" required>
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="parent_email" required>
    </div>
</div>

<h2>Academic Information</h2>

<div class="row">
    <div>
        <label>Grade / Program</label>
        <input type="text" name="grade" required>
    </div>
    <div>
        <label>Previous School</label>
        <input type="text" name="school">
    </div>
</div>

<button type="submit" class="submit-btn">Submit Registration</button>

</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
<div class="output">
    <h2>Registration Summary</h2>
    <p><strong>Student Name:</strong> <?php echo $fullName; ?></p>
    <p><strong>Birth Date:</strong> <?php echo $birthDate; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Address:</strong> <?php echo $address; ?></p>
    <p><strong>Contact:</strong> <?php echo $contact; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>

    <p><strong>Parent/Guardian:</strong> <?php echo $parentName; ?></p>
    <p><strong>Relationship:</strong> <?php echo $relationship; ?></p>
    <p><strong>Parent Contact:</strong> <?php echo $parentContact; ?></p>
    <p><strong>Parent Email:</strong> <?php echo $parentEmail; ?></p>

    <p><strong>Grade:</strong> <?php echo $grade; ?></p>
    <p><strong>Previous School:</strong> <?php echo $school; ?></p>
</div>
<?php endif; ?>

</div>

</body>
</html>
