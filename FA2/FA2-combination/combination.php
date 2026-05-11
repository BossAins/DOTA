<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Decimal Combinations</title>

    
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Two-Digit Decimal Combinations</h2>

<div class="output">
<?php
for ($i = 0; $i <= 9; $i++) {
    for ($j = 0; $j <= 9; $j++) {
        echo $i . $j . ", ";
    }
}
?>
</div>

</body>
</html>