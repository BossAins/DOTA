<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f0f0f0;
            text-align: center;
        }
        .container {
            width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border: 2px solid #555;
            border-radius: 10px;
        }
        h2 {
            background-color: #ddd;
            padding: 10px;
        }
        input[type=text] {
            width: 90%;
            padding: 6px;
            margin: 5px;
        }
        input[type=submit] {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Enter your favorite colors</h2>

    <form method="POST" action="ResultColors.php">
        Favorite color 1: <input type="text" name="color1"><br>
        Favorite color 2: <input type="text" name="color2"><br>
        Favorite color 3: <input type="text" name="color3"><br>
        Favorite color 4: <input type="text" name="color4"><br>
        Favorite color 5: <input type="text" name="color5"><br><br>

        <input type="submit" name="submit" value="Send Colors">
    </form>
</div>

</body>
</html>
