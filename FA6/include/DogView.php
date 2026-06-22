<?php
$conn = new mysqli("localhost", "root", "", "dog_profile");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .dog-box {
            border: 1px solid gray;
            padding: 10px;
            margin-bottom: 10px;
            width: 600px;
        }

        .dog-title {
            margin-bottom: 8px;
        }

        p {
            margin: 6px 0;
        }

        a {
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <a href="DogRegister.php">Add New Dog</a>

    <?php
    if ($result->num_rows > 0) {
        $count = 1;

        while ($row = $result->fetch_assoc()) {
            echo "<div class='dog-box'>";
            echo "<div class='dog-title'>Dog " . $count . "</div>";
            echo "<p>Name: " . $row['name'] . "</p>";
            echo "<p>Breed: " . $row['breed'] . "</p>";
            echo "<p>Age: " . $row['age'] . "</p>";
            echo "<p>Address: " . $row['address'] . "</p>";
            echo "<p>Color: " . $row['color'] . "</p>";
            echo "<p>Height: " . $row['height'] . "</p>";
            echo "<p>Weight: " . $row['weight'] . "</p>";
            echo "</div>";

            $count++;
        }
    } else {
        echo "No dog records found.";
    }

    $conn->close();
    ?>

</body>
</html>