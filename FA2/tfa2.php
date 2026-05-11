<?php

$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Activities Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
            color: #003366;
        }

        
        .menu {
            text-align: center;
            margin-bottom: 30px;
        }

        .menu a {
            text-decoration: none;
            border: 2px solid #6bbf59;
            padding: 10px 20px;
            margin: 5px;
            display: inline-block;
            color: #000;
            background: #fff;
            font-weight: bold;
        }

        .menu a:hover {
            background: #6bbf59;
            color: #fff;
        }

        .box {
            background: #fff;
            padding: 25px;
            border: 2px solid #6bbf59;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }

        th {
            background: yellow;
        }

        .output {
            border: 1px solid #333;
            padding: 15px;
            font-size: 16px;
            word-break: break-word;
        }
    </style>
</head>
<body>

<h1>PHP LAB ACTIVITIES</h1>


<div class="menu">
    <a href="tfa2.php">Home</a>
    <a href="FA2-grade/grade.php">Grade Ranking</a>
    <a href="FA2-conversion/conversion.php">Length Conversion</a>
    <a href="FA2-combination/combination.php">Two‑Digit Combinations</a>
</div>

<div class="box">

<?php

if ($page == "home") {
    echo "<h2>Welcome</h2>";
    echo "<p style='text-align:center;'>Select a program from the menu above.</p>";
}


elseif ($page == "grade") {

    $name  = "Ainsley D. Gonzaga";
    $grade = 95;

    if ($grade >= 93) $rank = "A";
    elseif ($grade >= 90) $rank = "A-";
    elseif ($grade >= 87) $rank = "B+";
    elseif ($grade >= 83) $rank = "B";
    elseif ($grade >= 80) $rank = "B-";
    elseif ($grade >= 77) $rank = "C+";
    elseif ($grade >= 73) $rank = "C";
    elseif ($grade >= 70) $rank = "C-";
    elseif ($grade >= 67) $rank = "D+";
    elseif ($grade >= 63) $rank = "D";
    elseif ($grade >= 60) $rank = "D-";
    else $rank = "F";

    echo "<h2>Grade Ranking Program</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Grade:</strong> $grade</p>";
    echo "<p><strong>Rank:</strong> $rank</p>";
}


elseif ($page == "length") {

    echo "<h2>Measure Conversion Chart – Lengths (UK)</h2>";

    echo "<table>
        <tr><th colspan='3'>METRIC CONVERSIONS</th></tr>
        <tr><td>1 meter</td><td>=</td><td>" . (1 * 100) . " centimeters</td></tr>
        <tr><td>1 kilometer</td><td>=</td><td>" . (1 * 1000) . " meters</td></tr>
    </table>";

    echo "<table>
        <tr><th colspan='3'>IMPERIAL → METRIC</th></tr>
        <tr><td>1 inch</td><td>=</td><td>" . (1 * 2.54) . " centimeters</td></tr>
        <tr><td>1 mile</td><td>=</td><td>" . (1 * 1.609344) . " kilometers</td></tr>
    </table>";
}


elseif ($page == "loop") {

    echo "<h2>Two‑Digit Decimal Combinations</h2>";
    echo "<div class='output'>";

    for ($i = 0; $i <= 9; $i++) {
        for ($j = 0; $j <= 9; $j++) {
            echo $i . $j . ", ";
        }
    }

    echo "</div>";
}
?>

</div>

</body>
</html>