<?php
// Get the vote direction from the POST request
$direction = $_POST["direction"];

// Connect to the MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "votes";

$conn = new mysqli($servername, $username, $password, $dbname);

// Increment or decrement the vote count in the database
if ($direction === "up") {
  $sql = "UPDATE vote_count SET count = count + 1 WHERE id = 1";
} else {
  $sql = "UPDATE vote_count SET count = count - 1 WHERE id = 1";
}
$conn->query($sql);

// Return the updated vote count
$sql = "SELECT count FROM vote_count WHERE id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row["count"];

// Close the database connection
$conn->close();
?>
