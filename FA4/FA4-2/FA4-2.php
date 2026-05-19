<!DOCTYPE html>
<html>
<head>
    <title>String Functions Table</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 95%;
            margin: auto;
            background: white;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #ddd;
        }
        h2 {
            background: #ccc;
            padding: 15px;
        }
    </style>
</head>
<body>

<h2>List of Names</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Number of characters</th>
        <th>Uppercase first character</th>
        <th>Replace vowels with @</th>
        <th>Position of letter "a"</th>
        <th>Reverse name</th>
    </tr>

<?php
$names = [
    "chrisa","john doe","maria clara","angelo cruz","sarah lee",
    "mark anthony","lisa ann","paul james","joshua king","anna marie",
    "leo carter","daniel cruz","ella rose","kevin hart","laura jane",
    "miguel santos","nina dela cruz","oliver twist","peter parker","quentin tarantino"
];

foreach($names as $name){

    $length = strlen($name);
    $ucfirst = ucfirst($name);

    // Replace vowels with @
    $replace = str_replace(
        ['a','e','i','o','u','A','E','I','O','U'],
        '@',
        $name
    );

    // Position of 'a'
    $pos = strpos($name, 'a');
    $pos = ($pos !== false) ? $pos + 1 : "Not found";

    $reverse = strrev($name);

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$length</td>";
    echo "<td>$ucfirst</td>";
    echo "<td>$replace</td>";
    echo "<td>$pos</td>";
    echo "<td>$reverse</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
