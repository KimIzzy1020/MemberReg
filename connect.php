<?php
$servername = "localhost";
$username = "user21204";
$password = "pwd21204";
$dbname = "db21204";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


