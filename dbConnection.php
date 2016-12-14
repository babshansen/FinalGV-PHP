<?php
$servername = "104.131.91.87";
$username = "root";
$password = "fSpvR395ki";
$dbname = "GermantownVolunteers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
?>