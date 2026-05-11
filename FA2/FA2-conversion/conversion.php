<?php

$cm = 1;
$dm = 1;
$m  = 1;
$km = 1;


$foot = 1;
$yard = 1;
$mile = 1;


$cm_to_mm = $cm * 10;
$dm_to_cm = $dm * 10;
$m_to_cm  = $m * 100;
$km_to_m  = $km * 1000;


$ft_to_in = $foot * 12;
$yd_to_ft = $yard * 3;
$mi_to_yd = $mile * 1760;


$mm_to_in = 0.03937;
$cm_to_in = 0.3937;
$m_to_in  = 39.37008;
$m_to_yd  = 1.09361;
$km_to_mi = 0.62137;


$in_to_cm = 2.54;
$ft_to_cm = 30.48;
$yd_to_m  = 0.9144;
$mi_to_km = 1.609344;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Measure Conversion Chart – Lengths (UK)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>MEASURE CONVERSION CHART – LENGTHS (UK)</h1>

<table>
    <tr><th colspan="3">METRIC CONVERSIONS</th></tr>
    <tr><td>1 centimeter</td><td>=</td><td><?= $cm_to_mm ?> millimeters</td></tr>
    <tr><td>1 decimeter</td><td>=</td><td><?= $dm_to_cm ?> centimeters</td></tr>
    <tr><td>1 meter</td><td>=</td><td><?= $m_to_cm ?> centimeters</td></tr>
    <tr><td>1 kilometer</td><td>=</td><td><?= $km_to_m ?> meters</td></tr>
</table>

<table>
    <tr><th colspan="3">IMPERIAL CONVERSIONS</th></tr>
    <tr><td>1 foot</td><td>=</td><td><?= $ft_to_in ?> inches</td></tr>
    <tr><td>1 yard</td><td>=</td><td><?= $yd_to_ft ?> feet</td></tr>
    <tr><td>1 mile</td><td>=</td><td><?= $mi_to_yd ?> yards</td></tr>
</table>

<table>
    <tr><th colspan="3">METRIC → IMPERIAL CONVERSIONS</th></tr>
    <tr><td>1 millimeter</td><td>=</td><td><?= $mm_to_in ?> inches</td></tr>
    <tr><td>1 centimeter</td><td>=</td><td><?= $cm_to_in ?> inches</td></tr>
    <tr><td>1 meter</td><td>=</td><td><?= $m_to_in ?> inches</td></tr>
    <tr><td>1 meter</td><td>=</td><td><?= $m_to_yd ?> yards</td></tr>
    <tr><td>1 kilometer</td><td>=</td><td><?= $km_to_mi ?> miles</td></tr>
</table>

<table>
    <tr><th colspan="3">IMPERIAL → METRIC CONVERSIONS</th></tr>
    <tr><td>1 inch</td><td>=</td><td><?= $in_to_cm ?> centimeters</td></tr>
    <tr><td>1 foot</td><td>=</td><td><?= $ft_to_cm ?> centimeters</td></tr>
    <tr><td>1 yard</td><td>=</td><td><?= $yd_to_m ?> meters</td></tr>
    <tr><td>1 mile</td><td>=</td><td><?= $mi_to_km ?> kilometers</td></tr>
</table>

</body>
</html>
``