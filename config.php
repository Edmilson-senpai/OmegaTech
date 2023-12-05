<?php
// default database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carvi";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Set the connection to use mysql_native_password
$conn->query("ALTER USER '$username'@'$servername' IDENTIFIED WITH mysql_native_password BY '$password'");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>