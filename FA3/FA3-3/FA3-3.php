<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">

<?php
// User-defined function
function my_function($a, $b, $c) {
    $sum = $a + $b + $c;
    $difference = $a - $b - $c;
    $product = $a * $b * $c;
    $quotient = $a / $b / $c;

    return array($sum, $difference, $product, $quotient);
}

// Given values
$num1 = 25;
$num2 = 13;
$num3 = 6;

// Call function
$result = my_function($num1, $num2, $num3);

// Display parameters
echo "<div class='header'>My Parameter values: $num1, $num2, $num3</div>";
?>

<table>
    <tr>
        <td>Addition</td>
        <td><?php echo $result[0]; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $result[1]; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $result[2]; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $result[3]; ?></td>
    </tr>
</table>

</div>

</body>
</html>
``