<?php

if (!isset($_POST['name'])) {
    header('Location: index.php');
    exit;
}

require_once 'connect.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $inputs = $_POST['inputs'];

    // Prepare and execute the SQL statement
    $stmt = $pdo->prepare("INSERT INTO test (name, inputs) VALUES (:name, :inputs)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':inputs', $inputs); 
    $stmt->execute();

    echo "Data inserted successfully!";
} else {
    echo "No data received.";
}