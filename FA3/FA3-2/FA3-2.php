<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="box">

<?php
// Array with 10 numbers (same as your sample)
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 10);

// Display array list
echo "<div class='header'>Array list: " . implode(", ", $numbers) . "</div>";

// Initialize values
$sum = 0;
$product = 1;
$difference = $numbers[0];
$quotient = $numbers[0];

// Loop through array
foreach($numbers as $index => $num){
    $sum += $num;
    $product *= $num;

    if($index != 0){
        $difference -= $num;
        $quotient /= $num;
    }
}
?>

<table>
    <tr>
        <td>Addition</td>
        <td><?php echo $sum; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $difference; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $product; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $quotient; ?></td>
    </tr>
</table>

</div>

</body>
</html>
