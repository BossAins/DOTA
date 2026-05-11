<?php
$firstname = "Ainsley";
$lastname = "Gonzaga";
$location = "Manila, Philippines";
$email = "ainsleygonzaga@gmail.com";
$phone = "0912-345-6789";

$profile = "I am a motivated Information Technology Specialist with strong interest in web development, system design, and programming. I aim to continuously develop my technical skills and apply them in real-world projects.";

$expertise = [
    "Web Development",
    "System Analysis",
    "Database Management",
    "UI / UX Design"
];

$experience = [
    [
        "title" => "Software Web Developer",
        "year" => "2024 – Present",
        "details" => [
            "Developed responsive websites using HTML, CSS, and PHP",
            "Created dynamic webpages using PHP variables",
            "Worked on school-based portfolio projects"
        ]
    ],
    [
        "title" => "IT Specialist Intern",
        "year" => "2023",
        "details" => [
            "Assisted in troubleshooting hardware and software issues",
            "Provided technical support and documentation",
            "Helped maintain computer systems"
        ]
    ]
];

$education = [
    "course" => "Bachelor of Science in Information Technology",
    "school" => "FEU Institute of Technology",
    "year" => "2022 – Present"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $firstname . " " . $lastname; ?> | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="resume">

    <div class="header">
        <h1><?php echo strtoupper($firstname . " " . $lastname); ?></h1>
        <p><?php echo $location; ?></p>
        <p><?php echo $phone; ?> | <?php echo $email; ?></p>
    </div>

    <div class="content">

        <div class="left">
            <h3>EXPERTISE</h3>
            <ul>
                <?php foreach ($expertise as $skill) { ?>
                    <li><?php echo $skill; ?></li>
                <?php } ?>
            </ul>
        </div>

        <div class="right">

            <h3>PROFILE</h3>
            <p><?php echo $profile; ?></p>

            <h3>EXPERIENCE</h3>
            <?php foreach ($experience as $job) { ?>
                <div class="job">
                    <h4><?php echo $job["title"]; ?></h4>
                    <span class="year"><?php echo $job["year"]; ?></span>
                    <ul>
                        <?php foreach ($job["details"] as $detail) { ?>
                            <li><?php echo $detail; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

            <h3>EDUCATION</h3>
            <p>
                <strong><?php echo $education["course"]; ?></strong><br>
                <?php echo $education["school"]; ?><br>
                <?php echo $education["year"]; ?>
            </p>

        </div>

    </div>

</div>

</body>
</html>
``