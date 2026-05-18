<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Student Information (Alphabetical Order)</h1>

<?php
$students = array(
    array("name"=>"Johan \"N0tail\" Sundstein", "image"=>"images/johan.jpg", "age"=>20, "birthday"=>"2004-01-10", "contact"=>"09123456789"),
    array("name"=>"Sébastien \"Ceb\" Debs", "image"=>"images/ceb.jpg", "age"=>21, "birthday"=>"2003-02-15", "contact"=>"09234567891"),
    array("name"=>"Jesse \"JerAx\" Vainikka", "image"=>"images/jesse.jpg", "age"=>19, "birthday"=>"2005-03-20", "contact"=>"09345678912"),
    array("name"=>"Topias \"Topson\" Taavitsainen", "image"=>"images/topson.jpg", "age"=>22, "birthday"=>"2002-04-05", "contact"=>"09456789123"),
    array("name"=>"Anathan \"ana\" Pham", "image"=>"images/ana.jpg", "age"=>20, "birthday"=>"2004-05-12", "contact"=>"09567891234"),
    array("name"=>"Magomed \"Collapse\" Khalilov", "image"=>"images/collapse.jpg", "age"=>18, "birthday"=>"2006-06-25", "contact"=>"09678912345"),
    array("name"=>"Illya \"Yatoro\" Mulyarchuk", "image"=>"images/yatoro.jpg", "age"=>23, "birthday"=>"2001-07-30", "contact"=>"09789123456"),
    array("name"=>"Amer \"Miracle\" Al-Barkawi", "image"=>"images/miracle.jpg", "age"=>21, "birthday"=>"2003-08-18", "contact"=>"09891234567"),
    array("name"=>"Wang \"Ame\" Chunyu", "image"=>"images/ame.jpg", "age"=>20, "birthday"=>"2004-09-09", "contact"=>"09912345678"),
    array("name"=>"Tal \"Fly\" Aizik", "image"=>"images/fly.jpg", "age"=>19, "birthday"=>"2005-10-22", "contact"=>"09023456789")
);

// Sort alphabetically
usort($students, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});
?>

<table>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact</th>
    </tr>

    <?php foreach($students as $student): ?>
    <tr>
        <td><img src="<?php echo $student['image']; ?>"></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['age']; ?></td>
        <td><?php echo $student['birthday']; ?></td>
        <td><?php echo $student['contact']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>