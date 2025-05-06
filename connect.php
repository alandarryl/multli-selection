<?php

$databaseHost = 'localhost'; // Database host
$hostaname = 'root'; // Database username
$databaseName = 'test'; // Database name
$databasePassword = ''; // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$databaseHost;dbname=$databaseName", $hostaname, $databasePassword);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Connected successfully"; // Optional: for debugging
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}