<?php
$conn = new mysqli("localhost", "root", "", "dog_profile");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>