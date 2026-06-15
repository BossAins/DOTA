<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Colors</title>
    <style>
        body {
            font-family: Arial;
            background: #f7f7f7;
            text-align: center;
        }
        .box {
            width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>My Favorite Colors</h2>

    <p>My Favorite Color 1: <?php echo $_SESSION['color1']; ?></p>
    <p>My Favorite Color 2: <?php echo $_SESSION['color2']; ?></p>
    <p>My Favorite Color 3: <?php echo $_SESSION['color3']; ?></p>
    <p>My Favorite Color 4: <?php echo $_SESSION['color4']; ?></p>
    <p>My Favorite Color 5: <?php echo $_SESSION['color5']; ?></p>

</div>

</body>
</html>
