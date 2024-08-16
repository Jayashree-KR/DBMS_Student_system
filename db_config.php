
<?php
// Database configuration
$host = 'localhost';  // Replace with your actual database host
$dbname = 'miniproject';';  // Replace with your actual database name
$username = 'root';  // Replace with your actual database username
$password = '8*Jkr@03#';  // Replace with your actual database password

// Create a PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
