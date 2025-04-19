<?php
// Database configuration
define('DB_SERVER', 'localhost');  // Database server
define('DB_USERNAME', 'root');     // Database username
define('DB_PASSWORD', '');         // Database password (set to your actual password)
define('DB_DATABASE', 'cryo_note'); // Database name

// Establishing connection to the database
try {
    $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
