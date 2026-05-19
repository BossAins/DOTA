<!DOCTYPE html>
<html>
<head>
    <title>Student Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include("header.php"); ?>

<div class="container">
    
    <div class="sidebar">
        <?php include("menu.php"); ?>
    </div>

    <div class="content">
        <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch($page){
                case "career": require("career.php"); break;
                case "education": require("education.php"); break;
                case "skills": require("skills.php"); break;
                case "affiliation": require("affiliation.php"); break;
                case "experience": require("experience.php"); break;
                default: require("personal.php"); break;
            }
        }else{
            require("personal.php");
        }
        ?>
    </div>

</div>

<?php include("footer.php"); ?>

</body>
</html>
``