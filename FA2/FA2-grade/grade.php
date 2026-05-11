<?php

$name  = "Ainsley D. Gonzaga";
$grade = 95;


if ($grade >= 93 && $grade <= 100) {
    $rank = "A";
} elseif ($grade >= 90) {
    $rank = "A-";
} elseif ($grade >= 87) {
    $rank = "B+";
} elseif ($grade >= 83) {
    $rank = "B";
} elseif ($grade >= 80) {
    $rank = "B-";
} elseif ($grade >= 77) {
    $rank = "C+";
} elseif ($grade >= 73) {
    $rank = "C";
} elseif ($grade >= 70) {
    $rank = "C-";
} elseif ($grade >= 67) {
    $rank = "D+";
} elseif ($grade >= 63) {
    $rank = "D";
} elseif ($grade >= 60) {
    $rank = "D-";
} else {
    $rank = "F";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Ranking Program</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main-box">
    
    <div class="name-box">
        <strong>Name:</strong> <?php echo $name; ?>
    </div>

    <div class="content">
        <div class="box">
            <strong>Rank:</strong><br>
            <?php echo $rank; ?>
        </div>

        <div class="box">
            <strong>Grade:</strong><br>
            <?php echo $grade; ?>
        </div>

        <div class="picture-box">
            <img src="Student.jpg" alt="Student Picture">
        </div>
    </div>

</div>

</body>
</html>