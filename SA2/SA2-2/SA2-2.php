<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>

    <style>
        body{
            font-family: Arial;
            background-color: #f5f5f5;
        }

        h2{
            text-align: center;
        }

        table{
            border-collapse: collapse;
            width: 70%;
            margin: auto;
            background-color: #eee;
        }

        th, td{
            border: 2px solid gray;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: #ddd;
        }
    </style>

</head>
<body>

<h2>Volume of Shapes</h2>

<table>
<tr>
    <th>Values</th>
    <th>Formula</th>
    <th>Answer</th>
</tr>

<?php
// ✅ USER-DEFINED FUNCTIONS

function cube($s){
    return pow($s,3);
}

function rectangularPrism($l,$w,$h){
    return $l*$w*$h;
}

function cylinder($r,$h){
    return pi()*pow($r,2)*$h;
}

function cone($r,$h){
    return (1/3)*pi()*pow($r,2)*$h;
}

function sphere($r){
    return (4/3)*pi()*pow($r,3);
}

// ✅ SAMPLE VALUES
$s = 5;
$l = 4; $w = 3; $h = 2;
$r = 3; $hc = 6;

// ✅ DISPLAY OUTPUT

echo "<tr>
        <td>s = $s</td>
        <td>V = s³</td>
        <td>".cube($s)."</td>
      </tr>";

echo "<tr>
        <td>l=$l, w=$w, h=$h</td>
        <td>V = l × w × h</td>
        <td>".rectangularPrism($l,$w,$h)."</td>
      </tr>";

echo "<tr>
        <td>r=$r, h=$hc</td>
        <td>V = πr²h</td>
        <td>".round(cylinder($r,$hc),2)."</td>
      </tr>";

echo "<tr>
        <td>r=$r, h=$hc</td>
        <td>V = 1/3 πr²h</td>
        <td>".round(cone($r,$hc),2)."</td>
      </tr>";

echo "<tr>
        <td>r=$r</td>
        <td>V = 4/3 πr³</td>
        <td>".round(sphere($r),2)."</td>
      </tr>";
?>

</table>

</body>
</html>