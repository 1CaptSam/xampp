<?php
// Database connection parameters
$servername = "localhost"; // Change to your servername if it's different
$username = "root"; // Change to your username
$password = ""; // Change to your password
$dbname = "cpu_db"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve selected items from POST data
    $processor = $_POST["processor"];
    $motherboard = $_POST["motherboard"];
    $cabinet = $_POST["cabinet"];
    $psu = $_POST["psu"];
    $ram = $_POST["ram"];

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO items (processor, motherboard, cabinet, psu, ram) VALUES ('$processor', '$motherboard', '$cabinet', '$psu', '$ram')";
    
    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();

