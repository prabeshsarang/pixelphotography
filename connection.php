<?php
// Database connection parameters
$servername = 'localhost';
$username = 'root';
$password = 'Pradeepa@16';
$dbname = 'pixel';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "";

?>