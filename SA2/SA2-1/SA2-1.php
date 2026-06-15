<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>

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
            width: 90%;
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

        img{
            width: 120px;
            height: 100px;
        }
    </style>

</head>
<body>

<h2>My Fruits</h2>

<table>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>

<?php
// ✅ ARRAY (Alphabetical Order)
$fruits = [
    ["name"=>"Apple","desc"=>"Color Red/Green","fact"=>"Apples are rich in fiber and vitamin C.","img"=>"https://www.collinsdictionary.com/images/full/apple_158989157.jpg"],
    ["name"=>"Banana","desc"=>"Color Yellow","fact"=>"Bananas provide energy and potassium.","img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvuFWmgStX6zF38A7ZufXtDXTlUag-rcKnew&s"],
    ["name"=>"Cherry","desc"=>"Color Red","fact"=>"Cherries are packed with antioxidants.","img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIlpjzdCbI-sjItMNrzjoL0IDWAeDc446tQ&s"],
    ["name"=>"Grapes","desc"=>"Color Purple/Green","fact"=>"Grapes help improve heart health.","img"=>"https://www.shopfreshandgreen.com/cdn/shop/products/Grapes-min_728x.png?v=1743777076"],
    ["name"=>"Mango","desc"=>"Color Yellow/Orange","fact"=>"Mangoes are high in vitamin A.","img"=>"https://shopmetro.ph/wp-content/uploads/2026/01/SM13560-2-1.jpg"],
    ["name"=>"Orange","desc"=>"Color Orange","fact"=>"Oranges are rich in vitamin C.","img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZbB_doR9LVg_xVbDXOOZc3TNbgNCEIzLLKw&s"],
    ["name"=>"Papaya","desc"=>"Color Orange","fact"=>"Papayas aid digestion.","img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaAXtZXW0NwXfeThZW9BbWaT36At6cOjfv4Q&s"],
    ["name"=>"Pineapple","desc"=>"Color Yellow","fact"=>"Pineapple contains bromelain enzyme.","img"=>"https://4rfreshandfrozen.com/cdn/shop/products/Fruits-Pineapple_1200x1200.jpg?v=1585410267"],
    ["name"=>"Strawberry","desc"=>"Color Red","fact"=>"Strawberries boost immunity.","img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzuu9QPFmtFMGK4sMLqZ89vrwnWdO9ADmX6w&s"],
    ["name"=>"Watermelon","desc"=>"Color Green/Red","fact"=>"Watermelons keep you hydrated.","img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhTn9mIiFqW_tqIhD1fi5nLBV--vF1fGLrEQ&s"]
];

// ✅ DISPLAY USING FOREACH
foreach($fruits as $fruit){
    echo "<tr>";
    echo "<td><img src='".$fruit['img']."'></td>";
    echo "<td>".$fruit['name']."</td>";
    echo "<td>".$fruit['desc']."</td>";
    echo "<td>".$fruit['fact']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
