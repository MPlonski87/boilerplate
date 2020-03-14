<?php

// Declare and set constants
define('SERVERNAME', getenv('DB_NAME'));
define('USERNAME', getenv('DB_USER'));
define('PASSWORD', getenv('DB_PASSWORD'));

// Create connection
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database connected successfully";