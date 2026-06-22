<?php
$conn = new mysqli("localhost", "root", "", "dog_profile");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        $message = "Dog information saved successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 330px;
            margin: 20px;
        }

        h3 {
            font-weight: normal;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-top: 8px;
        }

        input {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
            border: 1px solid gray;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 8px;
            border: 1px solid gray;
            background-color: #f2f2f2;
            cursor: pointer;
        }

        button:hover {
            background-color: #ddd;
        }

        .message {
            margin-top: 10px;
            color: green;
        }

        .footer {
            margin-top: 10px;
            font-size: 14px;
        }

        a {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h3>Dog Information</h3>

    <form method="POST">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Breed</label>
        <input type="text" name="breed" required>

        <label>Age</label>
        <input type="text" name="age" required>

        <label>Address</label>
        <input type="text" name="address" required>

        <label>Color</label>
        <input type="text" name="color" required>

        <label>Height</label>
        <input type="text" name="height" required>

        <label>Weight</label>
        <input type="text" name="weight" required>

        <button type="submit" name="save">save</button>
    </form>

    <p class="message"><?php echo $message; ?></p>

    <a href="DogView.php">View All Dogs</a>

    <div class="footer">© Crix Brix</div>

</body>
</html>