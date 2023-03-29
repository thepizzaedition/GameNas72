<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "votes";

$conn = new mysqli($servername, $username, $password, $dbname);

// Get the current vote count from the database
$sql = "SELECT count FROM vote_count WHERE id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row["count"];

// Close the database connection
$conn->close();
?>
