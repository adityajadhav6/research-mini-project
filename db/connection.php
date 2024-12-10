<?php
$conn = new mysqli("localhost", "root", "root", "research_centre");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
